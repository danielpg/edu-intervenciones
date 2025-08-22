<?php
class LenguasController extends AppController {

	var $name = 'Lenguas';

	function index() {
		$this->Lengua->recursive = 0;
		$this->set('lenguas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid lengua', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lengua', $this->Lengua->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Lengua->create();
			if ($this->Lengua->save($this->data)) {
				$this->_flash(__('The lengua has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The lengua could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid lengua', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lengua->save($this->data)) {
				$this->_flash(__('The lengua has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The lengua could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lengua->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for lengua', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lengua->delete($id)) {
			$this->_flash(__('Lengua deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Lengua was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
