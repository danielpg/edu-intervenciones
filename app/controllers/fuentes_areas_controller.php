<?php
class FuentesAreasController extends AppController {

	var $name = 'FuentesAreas';

	function index() {
		$this->FuentesArea->recursive = 0;
		$this->set('fuentesAreas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid fuentes area', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('fuentesArea', $this->FuentesArea->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FuentesArea->create();
			if ($this->FuentesArea->save($this->data)) {
				$this->_flash(__('The fuentes area has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The fuentes area could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid fuentes area', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FuentesArea->save($this->data)) {
				$this->_flash(__('The fuentes area has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The fuentes area could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FuentesArea->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for fuentes area', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FuentesArea->delete($id)) {
			$this->_flash(__('Fuentes area deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Fuentes area was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
