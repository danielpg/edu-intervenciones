<?php
class CodigosLocalesController extends AppController {

	var $name = 'CodigosLocales';

	function index() {
		$this->CodigosLocal->recursive = 0;
		$this->set('codigosLocales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid codigos local', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('codigosLocal', $this->CodigosLocal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CodigosLocal->create();
			if ($this->CodigosLocal->save($this->data)) {
				$this->_flash(__('The codigos local has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The codigos local could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid codigos local', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CodigosLocal->save($this->data)) {
				$this->_flash(__('The codigos local has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The codigos local could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CodigosLocal->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for codigos local', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CodigosLocal->delete($id)) {
			$this->_flash(__('Codigos local deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Codigos local was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
