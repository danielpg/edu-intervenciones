<?php
class ModalidadesController extends AppController {

	var $name = 'Modalidades';

	function index() {
		$this->Modalidad->recursive = 0;
		$this->set('modalidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid modalidad', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('modalidad', $this->Modalidad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Modalidad->create();
			if ($this->Modalidad->save($this->data)) {
				$this->_flash(__('The modalidad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The modalidad could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid modalidad', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Modalidad->save($this->data)) {
				$this->_flash(__('The modalidad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The modalidad could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Modalidad->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for modalidad', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Modalidad->delete($id)) {
			$this->_flash(__('Modalidad deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Modalidad was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
