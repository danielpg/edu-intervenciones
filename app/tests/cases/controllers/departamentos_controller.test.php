<?php
/* Departamentos Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'Departamentos');

class TestDepartamentosController extends DepartamentosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DepartamentosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.departamento');

	function startTest() {
		$this->Departamentos =& new TestDepartamentosController();
		$this->Departamentos->constructClasses();
	}

	function endTest() {
		unset($this->Departamentos);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
