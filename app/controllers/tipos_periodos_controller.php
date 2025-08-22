<?php
class TiposPeriodosController extends AppController {

	var $name = 'TiposPeriodos';

	function index() {
		$this->TiposPeriodo->recursive = 0;
		$this->set('tiposPeriodos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipos periodo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tiposPeriodo', $this->TiposPeriodo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TiposPeriodo->create();
			if ($this->TiposPeriodo->save($this->data)) {
				$this->Session->setFlash(__('The tipos periodo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipos periodo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipos periodo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TiposPeriodo->save($this->data)) {
				$this->Session->setFlash(__('The tipos periodo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipos periodo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TiposPeriodo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipos periodo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TiposPeriodo->delete($id)) {
			$this->Session->setFlash(__('Tipos periodo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipos periodo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
