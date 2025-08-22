<?php
class GestionesController extends AppController {

	var $name = 'Gestiones';

	function index() {
		$this->Gestion->recursive = 0;
		$this->set('gestiones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid gestion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('gestion', $this->Gestion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Gestion->create();
			if ($this->Gestion->save($this->data)) {
				$this->_flash(__('The gestion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The gestion could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid gestion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Gestion->save($this->data)) {
				$this->_flash(__('The gestion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The gestion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Gestion->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for gestion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Gestion->delete($id)) {
			$this->_flash(__('Gestion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Gestion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
