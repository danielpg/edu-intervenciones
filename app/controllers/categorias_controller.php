<?php

//ALTER TABLE  `categorias` ADD  `codigo` VARCHAR( 100 ) NULL ;

class CategoriasController extends AppController {

	var $name = 'Categorias';


	function beforeFilter(){
	
		parent::beforeFilter();
		
		$this->set('title_for_layout', 'Tematicas'); 
	}


	function index() {
		$this->Categoria->recursive = 0;
		$this->set('categorias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid categoria', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('categoria', $this->Categoria->read(null, $id));



	}

	function add() {
		if (!empty($this->data)) {
			$this->Categoria->create();

			if ($this->Categoria->save($this->data)) {
				$this->_flash(__('The categoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The categoria could not be saved. Please, try again.', true));
			}
		}

		$items = array("" => "-- Seleccione --");
		foreach($this->Categoria->CategoriasPadre->find("list") as $id => $label){
			$items[$id] = $label;
		}
		$this->set('padres', $items);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid categoria', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			//var_dump($this->data);
			if ($this->Categoria->save($this->data)) {
				$this->_flash(__('The categoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The categoria could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Categoria->read(null, $id);
		}

		//var_dump($this->data);

		$items = array("" => "-- Seleccione --");
		foreach($this->Categoria->CategoriasPadre->find("list") as $id => $label){
			$items[$id] = $label;
		}

		//$this->set("data",$this->data);
		$this->set('padres', $items);
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for categoria', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Categoria->delete($id)) {
			$this->_flash(__('Categoria deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Categoria was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
