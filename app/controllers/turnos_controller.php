<?php
class TurnosController extends AppController {

	var $name = 'Turnos';

	function index() {
		$this->Turno->recursive = 0;
		$this->set('turnos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid turno', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('turno', $this->Turno->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Turno->create();
			if ($this->Turno->save($this->data)) {
				$this->_flash(__('The turno has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The turno could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid turno', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Turno->save($this->data)) {
				$this->_flash(__('The turno has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The turno could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Turno->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for turno', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Turno->delete($id)) {
			$this->_flash(__('Turno deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Turno was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
