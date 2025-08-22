<?php

class CategoriasPadresController extends AppController {

	var $name = 'CategoriasPadres';

	function index() {
		$this->CategoriasPadre->recursive = 0;
		$this->set('categorias', $this->paginate());
	}

	function beforeFilter(){
		
		parent::beforeFilter();
		
		$this->set('title_for_layout', 'Categoria de Tematicas'); 

	
	}


	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid categoria', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('categoria', $this->CategoriasPadre->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CategoriasPadre->create();
			if ($this->CategoriasPadre->save($this->data)) {
				$this->_flash(__('The categoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The categoria could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid categoria', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CategoriasPadre->save($this->data)) {
				$this->_flash(__('The categoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The categoria could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CategoriasPadre->read(null, $id);
		}
	}

	function delete($id = null) {
		Configure::write("debug",0);
		if (!$id) {
			$this->_flash(__('Invalid id for categoria', true));
			$this->redirect(array('action'=>'index'));
		}


		//$this->Categoria->find("all",array("conditions" => array() , "limit" => 1 ));

		if (@$this->CategoriasPadre->delete($id)) {
			$this->_flash(__('Categoria deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Categoria was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
