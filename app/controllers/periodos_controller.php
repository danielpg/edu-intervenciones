<?php
class PeriodosController extends AppController {

	var $name = 'Periodos';

	function index() {
		$this->Periodo->recursive = 0;
		$this->set('periodos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid periodo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('periodo', $this->Periodo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Periodo->create();
			if ($this->Periodo->save($this->data)) {
				$this->_flash(__('The periodo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The periodo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid periodo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Periodo->save($this->data)) {
				$this->_flash(__('The periodo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The periodo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Periodo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for periodo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Periodo->delete($id)) {
			$this->_flash(__('Periodo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Periodo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
