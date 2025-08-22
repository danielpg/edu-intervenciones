<?php
class MetasController extends AppController {

	var $name = 'Metas';

	function index() {
		$this->Meta->recursive = 0;
		$this->set('metas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid meta', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('meta', $this->Meta->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Meta->create();
			if ($this->Meta->save($this->data)) {
				$this->_flash(__('The meta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The meta could not be saved. Please, try again.', true));
			}
		}

		$indicadores = $this->Meta->Indicador->find('list');
		$this->set(compact('indicadores'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid meta', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Meta->save($this->data)) {
				$this->_flash(__('The meta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('The meta could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Meta->read(null, $id);
		}

		$indicadores = $this->Meta->Indicador->find('list');
		$this->set(compact('indicadores'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid id for meta', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Meta->delete($id)) {
			$this->_flash(__('Meta deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Meta was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
