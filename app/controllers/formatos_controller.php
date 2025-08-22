<?php
class FormatosController extends AppController {

	var $name = 'Formatos';

	function index() {
		$this->Formato->recursive = 0;
		$this->set('formatos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid formato', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('formato', $this->Formato->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Formato->create();
			if ($this->Formato->save($this->data)) {
				$this->_flash(__('The formato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The formato could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid formato', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Formato->save($this->data)) {
				$this->_flash(__('The formato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The formato could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Formato->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for formato', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Formato->delete($id)) {
			$this->_flash(__('Formato deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Formato was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
