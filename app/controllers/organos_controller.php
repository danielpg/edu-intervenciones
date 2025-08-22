<?php
class OrganosController extends AppController {

	var $name = 'Organos';


	function beforeFilter(){
		parent::beforeFilter();
		
		$this->set('title_for_layout', 'Fuentes de Financiamiento'); 
	}


	function index() {
		$this->Organo->recursive = 0;
		$this->set('organos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid organo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('organo', $this->Organo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Organo->create();
			if ($this->Organo->save($this->data)) {
				$this->_flash(__('The organo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The organo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid organo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Organo->save($this->data)) {
				$this->_flash(__('The organo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The organo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Organo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for organo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Organo->delete($id)) {
			$this->_flash(__('Organo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Organo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
