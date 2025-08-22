<?php
class FormasController extends AppController {

	var $name = 'Formas';

	function index() {
		$this->Forma->recursive = 0;
		$this->set('formas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid forma', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forma', $this->Forma->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Forma->create();
			if ($this->Forma->save($this->data)) {
				$this->_flash(__('The forma has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The forma could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid forma', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Forma->save($this->data)) {
				$this->_flash(__('The forma has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The forma could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Forma->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for forma', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Forma->delete($id)) {
			$this->_flash(__('Forma deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Forma was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
