<?php
class CentrosPobladosController extends AppController {

	var $name = 'CentrosPoblados';

	function index() {
		$this->CentrosPoblado->recursive = 0;
		$this->set('centrosPoblados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid centros poblado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('centrosPoblado', $this->CentrosPoblado->read(null, $id));
	}


	function autocomplete(){
		header('Content-Type: text/html; charset=utf-8');
		$this->CentrosPoblado->recursive = 2;
		$tmp = $this->CentrosPoblado->find('all', array("limit" =>20,'conditions' =>
				array('CentrosPoblado.nombre LIKE' => '%'.$this->params['url']['term'].'%') //,'fields' => array('id','nombre')
		));

		//var_dump($tmp);

		$centros= array();
		foreach($tmp as $item){
			$centros[] = array("id"=> $item["CentrosPoblado"]["id"], 
				"nombre" =>$item["CentrosPoblado"]["nombre"].' - '.$item["Distrito"]["nombre"].' - '.$item["Distrito"]["Provincia"]["nombre"]);
		}

		$this->set(compact('centros'));
		echo json_encode($centros);
		exit;
	}

	function add() {
		if (!empty($this->data)) {
			$this->CentrosPoblado->create();
			if ($this->CentrosPoblado->save($this->data)) {
				$this->_flash(__('The centros poblado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The centros poblado could not be saved. Please, try again.', true));
			}
		}
		//$distritos = $this->CentrosPoblado->Distrito->find('list');
		//$this->set(compact('distritos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid centros poblado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CentrosPoblado->save($this->data)) {
				$this->_flash(__('The centros poblado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The centros poblado could not be saved. Please, try again.', true));
			}
		}

		if (empty($this->data)) {
			$this->data = $this->CentrosPoblado->read(null, $id);

			if(!empty($this->data["CentrosPoblado"]["distrito_id"])){
				$check = $this->CentrosPoblado->Distrito->find('first',array("conditions"=>array("Distrito.id"=>$this->data["CentrosPoblado"]["distrito_id"] ) ) );
				$this->data["CentrosPoblado"]["distrito"] = $check["Distrito"]["nombre"];
			}
		}


		//$distritos = $this->CentrosPoblado->Distrito->find('list');
		//$this->set(compact('distritos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for centros poblado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CentrosPoblado->delete($id)) {
			$this->_flash(__('Centros poblado deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Centros poblado was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
