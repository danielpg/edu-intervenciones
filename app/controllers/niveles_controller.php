<?php
class NivelesController extends AppController {

	var $name = 'Niveles';

	function index() {
		$this->Nivel->recursive = 0;
		$this->set('niveles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid nivel', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nivel', $this->Nivel->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Nivel->create();
			if ($this->Nivel->save($this->data)) {
				$this->_flash(__('The nivel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The nivel could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid nivel', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nivel->save($this->data)) {
				$this->_flash(__('The nivel has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The nivel could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nivel->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for nivel', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nivel->delete($id)) {
			$this->_flash(__('Nivel deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Nivel was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
