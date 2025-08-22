<?php
class DistritosController extends AppController {

	var $name = 'Distritos';

	function index() {
		$this->Distrito->recursive = 0;
		$this->set('distritos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid distrito', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('distrito', $this->Distrito->read(null, $id));
	}


	function autocomplete(){
		/*header('Content-Type: text/html; charset=utf-8');
		$search = "";
		$this->autoRender = false;
		$term = trim($this->params["url"]["term"]);
		$parts = explode(" ",$term);
		//exit;
		if(is_numeric($term)){
			if(strlen($term)==4){
				$term = substr($term,0,2).".".substr($term,2,2);
			}
			$cd = array("Precio.codigo" => $term);
		}  else {
			$cd = array("Distrito.nombre LIKE" => "%".$term."%");
		//}

		$data = $this->Distrito->find("all",array(
										  "limit"=>20,
										  "conditions"=>$cd
												)		
				);

		//var_dump($data, $term);		
		$list = array();
		foreach($data as $item){
			$list[] = $item["Distrito"];
		}
		echo json_encode($list);
		exit;*/


		$this->Distrito->recursive = 2;
		$tmp = $this->Distrito->find('all', array("limit" =>20,'conditions' =>
				array('Distrito.nombre LIKE' => '%'.$this->params['url']['term'].'%') //,'fields' => array('id','nombre')
		));

		//var_dump($tmp);

		$centros= array();
		foreach($tmp as $item){
			$centros[] = array("id"=> $item["Distrito"]["id"], 
				"nombre" =>$item["Distrito"]["nombre"].' - '.$item["Provincia"]["nombre"]);
		}

		$this->set(compact('centros'));
		echo json_encode($centros);
		exit;
	}

	function add() {
		if (!empty($this->data)) {
			$this->Distrito->create();
			if ($this->Distrito->save($this->data)) {
				$this->_flash(__('The distrito has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The distrito could not be saved. Please, try again.', true));
			}
		}
		$provincias = $this->Distrito->Provincia->find('list');
		$this->set(compact('provincias'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid distrito', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Distrito->save($this->data)) {
				$this->_flash(__('The distrito has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The distrito could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Distrito->read(null, $id);
		}
		$provincias = $this->Distrito->Provincia->find('list');
		$this->set(compact('provincias'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for distrito', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Distrito->delete($id)) {
			$this->_flash(__('Distrito deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Distrito was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
