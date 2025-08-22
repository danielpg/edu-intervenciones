<?php
class DresController extends AppController {

	var $name = 'Dres';

	function index() {
		$this->Dre->recursive = 0;
		$this->set('dres', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid dre', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dre', $this->Dre->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dre->create();
			if ($this->Dre->save($this->data)) {
				$this->_flash(__('The dre has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The dre could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid dre', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dre->save($this->data)) {
				$this->_flash(__('The dre has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The dre could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dre->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for dre', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dre->delete($id)) {
			$this->_flash(__('Dre deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Dre was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
