<?php
/* Cargos Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'Cargos');

class TestCargosController extends CargosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CargosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.cargo');

	function startTest() {
		$this->Cargos =& new TestCargosController();
		$this->Cargos->constructClasses();
	}

	function endTest() {
		unset($this->Cargos);
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
