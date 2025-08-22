<?php
class IntervencionesController extends AppController {

	var $name = 'Intervenciones';

	function index() {
		$this->Intervencion->recursive = 0;
		$this->set('intervenciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid intervencion', true));
			$this->redirect(array('action' => 'index'));
		}


		App::import("Model","IntervencionesOrgano");
		App::import("Model","IntervencionesCategoria");
		$this->IntervencionesOrgano = new IntervencionesOrgano;
		$this->IntervencionesCategoria = new IntervencionesCategoria;


		App::import("Model","Organo");
		App::import("Model","Categoria");
		$this->Organo = new Organo;
		$this->Categoria = new Categoria;

		$orgs = $this->IntervencionesOrgano->find("all",array("conditions"=>array("intervencion_id" => $id)));
		$cats = $this->IntervencionesCategoria->find("all",array("conditions"=>array("intervencion_id" => $id)));
		$orgs_list = array();
		$cats_list = array();
		foreach($orgs as $item){
			$orgs_list[] = $item["IntervencionesOrgano"]["organo_id"];
		}

		foreach($cats as $item){
			$cats_list[] = $item["IntervencionesCategoria"]["categoria_id"];
		}

		//var_dump($orgs);

		$organos = $this->Organo->find('list');
		$categorias = $this->Categoria->find('list');
		$this->set(compact('organos', 'categorias',"orgs_list","cats_list"));

		$this->set('intervencion', $this->Intervencion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Intervencion->create();



			$organo_flag = false;							
			foreach($this->data["organo"] as $organo_id => $check){
				if($check){
					$organo_flag = true;
				}
			}

			$cat_flag = false;							
			foreach($this->data["organo"] as $organo_id => $check){
				if($check){
					$cat_flag = true;
				}
			}

			if ($organo_flag == true && $cat_flag == true && $this->Intervencion->save($this->data)) {
					App::import("Model","IntervencionesOrgano");
				App::import("Model","IntervencionesCategoria");
				$this->IntervencionesOrgano = new IntervencionesOrgano;
				$this->IntervencionesCategoria = new IntervencionesCategoria;	

				foreach($this->data["organo"] as $organo_id => $check){
					if($check){
						$this->IntervencionesOrgano->save(array("intervencion_id" => $this->Intervencion->id, "organo_id" => $organo_id));
						$this->IntervencionesOrgano->id = null;
					}
				}

				foreach($this->data["categoria"] as $categoria_id => $check){
					if($check){
						$this->IntervencionesCategoria->save(array("intervencion_id" => $this->Intervencion->id, "categoria_id" => $categoria_id));
						$this->IntervencionesCategoria->id = null;
					}
				}

				$this->_flash(__('The intervencion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				if ($organo_flag == false)$this->_flash(__('Seleccione una Fuente de Financiación.', true),"error");
				if ($cat_flag == false)$this->_flash(__('Seleccione una Temática.', true),"error");

				$this->_flash(__('The intervencion could not be saved. Please, try again.', true));
			}
		}
		App::import("Model","Organo");
		App::import("Model","Categoria");
		$this->Organo = new Organo;
		$this->Categoria = new Categoria;

		$organos = $this->Organo->find('list');
		$categorias = $this->Categoria->find('list');
		$this->set(compact('organos', 'categorias'));
	}

	function edit($id = null) {
	

		App::import("Model","IntervencionesOrgano");
		App::import("Model","IntervencionesCategoria");
		$this->IntervencionesOrgano = new IntervencionesOrgano;
		$this->IntervencionesCategoria = new IntervencionesCategoria;

		/*	$this->IntervencionesOrgano->deleteAll(array('intervencion_id' => $id), false);
				$this->IntervencionesCategoria->deleteAll(array('intervencion_id' => $id), false);
*/
		if (!$id && empty($this->data)) {
			$this->_flash(__('Invalid intervencion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {


			$organo_flag = false;							
			foreach($this->data["organo"] as $organo_id => $check){
				if($check){
					$organo_flag = true;
				}
			}

			$cat_flag = false;							
			foreach($this->data["organo"] as $organo_id => $check){
				if($check){
					$cat_flag = true;
				}
			}

			if ($organo_flag == true && $cat_flag == true && $this->Intervencion->save($this->data)) {
				$this->IntervencionesOrgano->deleteAll(array('intervencion_id' => $id), false);
				$this->IntervencionesCategoria->deleteAll(array('intervencion_id' => $id), false);

				foreach($this->data["organo"] as $organo_id => $check){
					if($check){
						$this->IntervencionesOrgano->save(array("intervencion_id" => $this->Intervencion->id, "organo_id" => $organo_id));
						$this->IntervencionesOrgano->id = null;
					}
				}

				foreach($this->data["categoria"] as $categoria_id => $check){
					if($check){
						$this->IntervencionesCategoria->save(array("intervencion_id" => $this->Intervencion->id, "categoria_id" => $categoria_id));
						$this->IntervencionesCategoria->id = null;
					}
				}

				$this->_flash(__('The intervencion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {

				if ($organo_flag == false)$this->_flash(__('Seleccione una Fuente de Financiación.', true),"error");
				if ($cat_flag == false)$this->_flash(__('Seleccione una Temática.', true),"error");

				$this->_flash(__('The intervencion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Intervencion->read(null, $id);
		}

		App::import("Model","Organo");
		App::import("Model","Categoria");
		$this->Organo = new Organo;
		$this->Categoria = new Categoria;

		$orgs = $this->IntervencionesOrgano->find("all",array("conditions"=>array("intervencion_id" => $id)));
		$cats = $this->IntervencionesCategoria->find("all",array("conditions"=>array("intervencion_id" => $id)));
		$orgs_list = array();
		$cats_list = array();
		foreach($orgs as $item){
			$orgs_list[] = $item["IntervencionesOrgano"]["organo_id"];
		}

		foreach($cats as $item){
			$cats_list[] = $item["IntervencionesCategoria"]["categoria_id"];
		}

		$organos = $this->Organo->find('list');
		$categorias = $this->Categoria->find('list');
		$this->set(compact('organos', 'categorias',"orgs_list","cats_list"));
	}

	function delete($id = null) {

		if (!$id) {
			$this->_flash(__('Invalid id for intervencion', true));
			$this->redirect(array('action'=>'index'));
		}



		App::import("Model","IntervencionesOrgano");
		App::import("Model","IntervencionesCategoria");
		$this->IntervencionesOrgano = new IntervencionesOrgano;
		$this->IntervencionesCategoria = new IntervencionesCategoria;


		App::import("Model","Organo");
		App::import("Model","Categoria");
		$this->Organo = new Organo;
		$this->Categoria = new Categoria;

		$orgs = $this->IntervencionesOrgano->find("all",array("conditions"=>array("intervencion_id" => $id)));
		$cats = $this->IntervencionesCategoria->find("all",array("conditions"=>array("intervencion_id" => $id)));
		foreach($orgs as $item){
			$this->IntervencionesOrgano->delete( $item["IntervencionesOrgano"]["id"]);
		}

		foreach($cats as $item){
			$this->IntervencionesCategoria->delete($item["IntervencionesCategoria"]["id"]);
		}

		if ($this->Intervencion->delete($id)) {
			$this->_flash(__('Intervencion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->_flash(__('Intervencion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
