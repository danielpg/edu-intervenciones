<?php
class DependenciasController extends AppController {

	var $name = 'Dependencias';

	function index() {
		$this->Dependencia->recursive = 0;
		$this->set('dependencias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid dependencia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dependencia', $this->Dependencia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dependencia->create();
			if ($this->Dependencia->save($this->data)) {
				$this->_flash(__('The dependencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The dependencia could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid dependencia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dependencia->save($this->data)) {
				$this->_flash(__('The dependencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The dependencia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dependencia->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for dependencia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dependencia->delete($id)) {
			$this->_flash(__('Dependencia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Dependencia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
