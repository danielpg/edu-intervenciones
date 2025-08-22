<?php
class DetalleCentrosEducativosController extends AppController {

	var $name = 'DetalleCentrosEducativos';

    var $helpers = array('Form', 'Alaxos.AlaxosForm', 'Alaxos.AlaxosHtml');
    var $components = array('Alaxos.AlaxosFilter');

	function index() {
		$this->AlaxosFilter->set_auto_append_wildcard_characters(true);
		$conditions = $this->AlaxosFilter->get_filter();

		if(empty($conditions)){
			//$conditions = $conditions2;
		} else {

			foreach($conditions as $int => $item){
				$item = trim($item);
				if(empty($item)){
					unset($conditions[$int]);
				} else {
					$conditions[$int] = $item;
				}
			}
		}

		$gestiones = $this->DetalleCentrosEducativo->Gestion->find('list');
		$turnos = $this->DetalleCentrosEducativo->Turno->find('list');
		$estados = $this->DetalleCentrosEducativo->Estado->find('list');
		$niveles = $this->DetalleCentrosEducativo->Nivel->find('list');
		$caracteristicas = $this->DetalleCentrosEducativo->Caracteristica->find('list');
		$this->set(compact('gestiones', 'turnos', 'estados', 'niveles', 'caracteristicas'));

		$this->DetalleCentrosEducativo->recursive = 0;
		$this->set('detalleCentrosEducativos', $this->paginate($this->DetalleCentrosEducativo,$conditions));
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid detalle centros educativo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('detalleCentrosEducativo', $this->DetalleCentrosEducativo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DetalleCentrosEducativo->create();
			if ($this->DetalleCentrosEducativo->save($this->data)) {
				$this->_flash(__('The detalle centros educativo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The detalle centros educativo could not be saved. Please, try again.', true));
			}
		}
		$validaciones = $this->DetalleCentrosEducativo->Validacion->find('list');
		$gestiones = $this->DetalleCentrosEducativo->Gestion->find('list');
		$turnos = $this->DetalleCentrosEducativo->Turno->find('list');
		$estados = $this->DetalleCentrosEducativo->Estado->find('list');
		$niveles = $this->DetalleCentrosEducativo->Nivel->find('list');
		$caracteristicas = $this->DetalleCentrosEducativo->Caracteristica->find('list');
		$formas = $this->DetalleCentrosEducativo->Forma->find('list');
		$centrosEducativos = $this->DetalleCentrosEducativo->CentrosEducativo->find('list',array("limit"=>100));
		//$fuentesAreas = $this->DetalleCentrosEducativo->FuentesArea->find('list');
		$unidades = $this->DetalleCentrosEducativo->Unidad->find('list');
		$this->set(compact('validaciones', 'gestiones', 'turnos', 'estados', 'niveles', 'caracteristicas', 'formas', 'centrosEducativos', 'fuentesAreas', 'unidades'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid detalle centros educativo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DetalleCentrosEducativo->save($this->data)) {
				$this->_flash(__('The detalle centros educativo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The detalle centros educativo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DetalleCentrosEducativo->read(null, $id);
		}

		$validaciones = $this->DetalleCentrosEducativo->Validacion->find('list');
		$gestiones = $this->DetalleCentrosEducativo->Gestion->find('list');
		$turnos = $this->DetalleCentrosEducativo->Turno->find('list');
		$estados = $this->DetalleCentrosEducativo->Estado->find('list');
		$niveles = $this->DetalleCentrosEducativo->Nivel->find('list');
		$caracteristicas = $this->DetalleCentrosEducativo->Caracteristica->find('list');
		//echo $this->data["DetalleCentrosEducativo"]["centro_educativo_id"];

		$formas = $this->DetalleCentrosEducativo->Forma->find('list');
		$centrosEducativos = $this->DetalleCentrosEducativo->CentrosEducativo->find('list',array("conditions"=>array("CentrosEducativo.id"=>$this->data["DetalleCentrosEducativo"]["centro_educativo_id"]),"limit"=>100));
		//$fuentesAreas = $this->DetalleCentrosEducativo->FuentesArea->find('list');
		$unidades = $this->DetalleCentrosEducativo->Unidad->find('list');
		$this->set(compact('validaciones', 'gestiones', 'turnos', 'estados', 'niveles', 'caracteristicas', 'formas', 'centrosEducativos', 'fuentesAreas', 'unidades'));
	}


	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for detalle centros educativo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DetalleCentrosEducativo->delete($id)) {
			$this->_flash(__('Detalle centros educativo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Detalle centros educativo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function autoComplete(){
		//var_dump($this->params);echo "<br>";
		//echo $this->params['url']['term'];echo "<br>";
		//header('Content-Type: text/html; charset=utf-8');
		
		//var_dump($detalles);
		/*
		$this->DetalleCentrosEducativo->recursive = 2;
		$detalles=$this->DetalleCentrosEducativo->find('all', array("limit" =>20,'conditions' =>
				array('DetalleCentrosEducativo.codigo_modular LIKE' => '%'.$this->params['url']['term'].'%')
				//,'fields' => array('id',"codigo_modular")
				));
		
		*//*
		$sql="SELECT DetalleCentrosEducativo.id,DetalleCentrosEducativo.codigo_modular,CentrosEducativo.id,CentrosEducativo.nombre,CentrosPoblado.id,CentrosPoblado.nombre,
			Distrito.id,Distrito.nombre,Provincia.id,Provincia.nombre,Departamento.id,Departamento.nombre
			FROM detalle_centros_educativos AS DetalleCentrosEducativo
			JOIN centros_educativos AS CentrosEducativo ON (CentrosEducativo.id = DetalleCentrosEducativo.centro_educativo_id)
			JOIN centros_poblados AS CentrosPoblado ON (CentrosPoblado.id = CentrosEducativo.centros_poblados_id)
			JOIN distritos AS Distrito ON (Distrito.id = CentrosPoblado.distrito_id)
			JOIN provincias AS Provincia ON (Provincia.id = Distrito.provincia_id)
			JOIN departamentos AS Departamento ON (Departamento.id = Provincia.departamento_id) WHERE DetalleCentrosEducativo.codigo_modular LIKE '%'.$this->params['url']['term'].'%'
			LIMIT 20
		";*/
		$sql="SELECT DetalleCentrosEducativo.id,DetalleCentrosEducativo.codigo_modular,CentrosEducativo.id,CentrosEducativo.nombre,CentrosPoblado.id,CentrosPoblado.nombre,
		Distrito.id,Distrito.nombre,Provincia.id,Provincia.nombre,Departamento.id,Departamento.nombre
		FROM detalle_centros_educativos AS DetalleCentrosEducativo
		JOIN centros_educativos AS CentrosEducativo ON (CentrosEducativo.id = DetalleCentrosEducativo.centro_educativo_id)
		JOIN centros_poblados AS CentrosPoblado ON (CentrosPoblado.id = CentrosEducativo.centros_poblados_id)
		JOIN distritos AS Distrito ON (Distrito.id = CentrosPoblado.distrito_id)
		JOIN provincias AS Provincia ON (Provincia.id = Distrito.provincia_id)
		JOIN departamentos AS Departamento ON (Departamento.id = Provincia.departamento_id) WHERE DetalleCentrosEducativo.codigo_modular LIKE '%".$this->params['url']['term']."%'
		LIMIT 20";
		//echo $sql;
		$detalles=$this->DetalleCentrosEducativo->query($sql);
		//var_dump($detalles);
		//exit;
		$list = array();
		foreach($detalles as $item){
			$list[] = $item;
		}
		
	//	$this->set(compact('list'));
		//$this->set(compact('detalles'));
	
		echo json_encode($list);
		exit;
		//$this->layout = 'ajax';
	}
}
