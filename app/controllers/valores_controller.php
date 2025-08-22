<?php
class ValoresController extends AppController {

	var $name = 'Valores';
	
	var $helpers = array('Form', 'Alaxos.AlaxosForm', 'Alaxos.AlaxosHtml');
	var $components = array('Alaxos.AlaxosFilter');

	function index() {
		//$this->Valor->recursive = 0;
		//$this->set('valores', $this->paginate());
		$this->AlaxosFilter->set_auto_append_wildcard_characters(true);
		$conditions = $this->AlaxosFilter->get_filter();
		$string_conditions="";
		if(!empty($conditions)){
			$string_conditions.=" WHERE ";
			$j=1;
			$count_condition=count($conditions);
			
			foreach($conditions as $int => $item){
				$item = trim($item);
				if(!empty($item)){
					if($j!=1 && $count_condition>1){
						$string_conditions.=" AND ";
					}
					$string_conditions.="$int '$item'";
					$j++;
				}
			}
		}
		$sql="	SELECT Valor.id,Valor.fecha_inicio,Valor.fecha_fin,Intervencion.id,Intervencion.nombre,DetalleCentrosEducativo.id,DetalleCentrosEducativo.codigo_modular,CentrosEducativo.id,CentrosEducativo.nombre
				,Distrito.id,Distrito.nombre,Provincia.id,Provincia.nombre,Departamento.id,Departamento.nombre
				FROM valores AS Valor
				JOIN intervenciones AS Intervencion ON Intervencion.id=Valor.intervencion_id
				JOIN detalle_centros_educativos AS DetalleCentrosEducativo ON DetalleCentrosEducativo.id=Valor.detalle_centro_educativo_id
				JOIN centros_educativos AS CentrosEducativo ON (CentrosEducativo.id = DetalleCentrosEducativo.centro_educativo_id)
				
				JOIN centros_poblados AS CentrosPoblado ON (CentrosPoblado.id = CentrosEducativo.centros_poblados_id) 
				JOIN distritos AS Distrito ON (Distrito.id = CentrosPoblado.distrito_id)
				JOIN provincias AS Provincia ON (Provincia.id = Distrito.provincia_id)
				JOIN departamentos AS Departamento ON (Departamento.id = Provincia.departamento_id)
				$string_conditions
			";
		
		//$this->Valor->recursive = 0;
		//$this->set('valores', $this->paginate($this->Valor,$conditions));
		$total = Query::squery('SELECT count(*) AS total FROM valores');
		$total = $total[0][0]['total'];
		$valores=$this->Valor->paginate_query($sql,array('order'=>'Valor.id DESC','limit'=> 20,'total'=> $total));
		
		
		$this->set(compact('valores'));
		
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid valor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('valor', $this->Valor->read(null, $id));
	}

	function add() {
		//header('Content-Type: text/html; charset=utf-8');
		$errors_array = array();
		$validation = array();
		$validation[] = true;
		$string_detalle=array();
		if (!empty($this->data)) {
			if(!empty($this->data["Valor"]["table_centro_educativo"])){
				$all=$this->data;
				$this->Valor->create();
				$this->Valor->set($this->data);
				$validation[] = $this->Valor->validates();
				$errors_array = array_merge($errors_array,$this->Valor->validationErrors);
				
				$tmp1 = $all["Valor"]["fecha_inicio"];
				$date1 = strtotime($tmp1["year"]."-".$tmp1["month"]."-".$tmp1["day"]);
				$tmp2 = $all["Valor"]["fecha_fin"];
				$date2 = strtotime($tmp2["year"]."-".$tmp2["month"]."-".$tmp2["day"]);
					
				$fecha_inicio=$tmp1["year"]."-".$tmp1["month"]."-".$tmp1["day"];
				$fecha_fin=$tmp2["year"]."-".$tmp2["month"]."-".$tmp2["day"];
				
				$table_centro_educativo=array_unique($all["Valor"]["table_centro_educativo"]);
				$k=1;

				$string_detalle="";
				foreach($table_centro_educativo as $detalle_ce_id){
					$array_detalles=explode(" - ",$detalle_ce_id);
					$string_detalle.="<tr>";
					$j=1;
					foreach($array_detalles as $array_detalle){
						if($j>1){
							$string_detalle.="<td>".$array_detalle;
							if($j==2){
								$string_detalle.="<input type='hidden' value='".$detalle_ce_id."' name='data[Valor][table_centro_educativo][]' id='ValorTable".$array_detalles[0]."'/>";
							}
							$string_detalle.="</td>";
						}
						$j++;
					}
					$string_detalle.="<td><a href='JavaScript:void(0)' onclick='del_codigos()'><img src='".Router::url('/img/icon_delete.png')."' /></a></td>";
					//$string_detalle.="<td><input type='button' value='Eliminar' onclick='del_codigos()' /></td>";
					$string_detalle.="</tr>";
					
					$register["Valor"][$k]["fecha_inicio"]=$fecha_inicio;
					$register["Valor"][$k]["fecha_fin"]=$fecha_fin;
					$register["Valor"][$k]["intervencion_id"]=$all["Valor"]["intervencion_id"];
					$register["Valor"][$k]["detalle_centro_educativo_id"]=$array_detalles[0];
					$register["Valor"][$k]["tipo_periodo_id"]=$all["Valor"]["tipo_periodo_id"];
					$register["Valor"][$k]["periodo"]=$all["Valor"]["periodo"];
					$k++;
				}
				
				if (in_array(false,$validation)==false) {
					if ($date2 > $date1){
						$this->Valor->saveAll($register["Valor"]);
						$this->_flash(__('Se asociaron los Codigos Modulares a la Intervencion', true));
						$this->redirect(array('action' => 'index'));
					} else {
						$this->_flash(__('La Fecha de Fin debe ser mayor a la Fecha de Inicio', true));
					}
				}else{
					$this->Session->setFlash(__('Error al grabar.', true));
				}
				$this->set(compact('string_detalle'));
			}else{
				$this->_flash(__('Se debe de agregar Codigos Modulares', true));
			}
		}
		$detalleCentrosEducativos = "";//$this->Valor->DetalleCentrosEducativo->find('list');
		$intervenciones = $this->Valor->Intervencion->find('list');
		$tiposPeriodos = $this->Valor->TiposPeriodo->find('list');
		$this->set(compact('detalleCentrosEducativos', 'intervenciones', 'tiposPeriodos','string_detalle'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid valor', true));
			$this->redirect(array('action' => 'index'));
		}


			$tmp1 = $this->data["Valor"]["fecha_inicio"];
			$date1 = strtotime($tmp1["year"]."-".$tmp1["month"]."-".$tmp1["day"]);
			$tmp1 = $this->data["Valor"]["fecha_fin"];
			$date2 = strtotime($tmp1["year"]."-".$tmp1["month"]."-".$tmp1["day"]);

		if (!empty($this->data)) {
			if (($date2 > $date1) && $this->Valor->save($this->data)) {
				$this->_flash(__('The valor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The valor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Valor->read(null, $id);

			if(!empty($this->data["Valor"]["detalle_centro_educativo_id"])){
				$check = $this->Valor->DetalleCentrosEducativo->find('first',array("conditions"=>array("DetalleCentrosEducativo.id"=>$this->data["Valor"]["detalle_centro_educativo_id"] ) ) );
				$this->data["Valor"]["detalle_centro_educativo"] = $check["DetalleCentrosEducativo"]["codigo_modular"].' - '.$check["CentrosEducativo"]["nombre"];
			}

		}
		$detalleCentrosEducativos = "";//$this->Valor->DetalleCentrosEducativo->find('list');

	

		$intervenciones = $this->Valor->Intervencion->find('list');
		$tiposPeriodos = $this->Valor->TiposPeriodo->find('list');
		$this->set(compact('detalleCentrosEducativos', 'intervenciones', 'tiposPeriodos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for valor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Valor->delete($id)) {
			$this->_flash(__('Valor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Valor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
