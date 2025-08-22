<?php
class ProvinciasController extends AppController {

	var $name = 'Provincias';

	function index() {
		$this->Provincia->recursive = 0;
		$this->set('provincias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid provincia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('provincia', $this->Provincia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Provincia->create();
			if ($this->Provincia->save($this->data)) {
				$this->_flash(__('The provincia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The provincia could not be saved. Please, try again.', true));
			}
		}
		$departamentos = $this->Provincia->Departamento->find('list');
		$this->set(compact('departamentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid provincia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Provincia->save($this->data)) {
				$this->_flash(__('The provincia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The provincia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Provincia->read(null, $id);
		}
		$departamentos = $this->Provincia->Departamento->find('list');
		$this->set(compact('departamentos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for provincia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Provincia->delete($id)) {
			$this->_flash(__('Provincia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Provincia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
