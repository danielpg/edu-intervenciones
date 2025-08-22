<?php
class CentrosEducativosController extends AppController {

	var $name = 'CentrosEducativos';

	function index() {
		$this->CentrosEducativo->recursive = 0;
		$this->set('centrosEducativos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid centros educativo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('centrosEducativo', $this->CentrosEducativo->read(null, $id));
	}



	function autocomplete(){
		header('Content-Type: text/html; charset=utf-8');
		$search = "";
		$this->autoRender = false;
		$term = trim($this->params["url"]["term"]);
		$parts = explode(" ",$term);
		//exit;
		/*if(is_numeric($term)){
			if(strlen($term)==4){
				$term = substr($term,0,2).".".substr($term,2,2);
			}
			$cd = array("Precio.codigo" => $term);
		}  else {*/
			$cd = array("CentrosEducativo.nombre LIKE" => "%".$term."%");
		//}

		$data = $this->CentrosEducativo->find("all",array(
										  "limit"=>20,
										  "conditions"=>$cd
												)		
				);

		//var_dump($data, $term);		
		$list = array();
		foreach($data as $item){
			$list[] = $item["CentrosEducativo"];
		}
		echo json_encode($list);
		exit;
	}


	function add() {
		if (!empty($this->data)) {
			$this->CentrosEducativo->create();
			if ($this->CentrosEducativo->save($this->data)) {
				$this->_flash(__('The centros educativo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The centros educativo could not be saved. Please, try again.', true));
			}
		}
		//$centrosPoblados = $this->CentrosEducativo->CentrosPoblado->find('list');
		//$this->set(compact('centrosPoblados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid centros educativo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CentrosEducativo->save($this->data)) {
				$this->_flash(__('The centros educativo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The centros educativo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CentrosEducativo->read(null, $id);

			if(!empty($this->data["CentrosEducativo"]["centro_poblado_id"])){
				$check = $this->CentrosEducativo->CentrosPoblado->find('first',array("conditions"=>array("Distrito.id"=>$this->data["CentrosEducativo"]["centro_poblado_id"] ) ) );
				$this->data["CentrosEducativo"]["centro_poblado"] = $check["CentrosPoblado"]["nombre"];
			}
		}
		//$centrosPoblados = $this->CentrosEducativo->CentrosPoblado->find('list');
		//$this->set(compact('centrosPoblados'));
	}

	function importar(){
		$error = array();

		if (!empty($this->data)) {
			$validate = true; $ext = $fileerror = "";

			if(!empty($this->data["Indicador"]["archivo"]["name"])){
				$parts = explode(".",$this->data["Indicador"]["archivo"]["name"]);
				$ext = array_pop($parts);
			}

			if($ext != "csv"){
				$validate = false;
				$fileerror = "Archivo invalido.";
			} else if(empty($this->data["Indicador"]["archivo"]["name"])){
				$validate = false;
				$fileerror = "Archivo invalido.";
			} else if($this->data["Indicador"]["archivo"]["error"] != 0){
				$validate = false;
				$fileerror = "Archivo invalido.";
			}

			if($validate){
				ini_set('max_execution_time',60*5);
				$file = APP."/tmp/uploads/".md5(rand(1,1000000).date("Y-m-d H:i:s")).".".$ext;
				move_uploaded_file($this->data["Indicador"]["archivo"]["tmp_name"],$file);

				$config = new DATABASE_CONFIG();
				$cn=mysql_connect($config->default["host"],$config->default["login"],$config->default["password"]);
				mysql_select_db($config->default["database"], $cn);

				require_once APP."/vendors/validar_centros_educativos.php";
	
				@unlink($file);

				if(empty($error)){
					$this->_flash('Se importaron los nuevos centros educativos.',"success");
					$this->redirect(array('action' => 'index'));
				} else {

				}

			} else {
				$this->_flash($fileerror,"error");
			}
		}

		$this->set("error", $error);
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for centros educativo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CentrosEducativo->delete($id)) {
			$this->_flash(__('Centros educativo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Centros educativo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
