<?php
class ValidacionesController extends AppController {

	var $name = 'Validaciones';

	function index() {
		$this->Validacion->recursive = 0;
		$this->set('validaciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid validacion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('validacion', $this->Validacion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Validacion->create();
			if ($this->Validacion->save($this->data)) {
				$this->_flash(__('The validacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The validacion could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid validacion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Validacion->save($this->data)) {
				$this->_flash(__('The validacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The validacion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Validacion->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for validacion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Validacion->delete($id)) {
			$this->_flash(__('Validacion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Validacion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
