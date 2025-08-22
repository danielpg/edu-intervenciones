<?php
/* CentrosPoblados Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'CentrosPoblados');

class TestCentrosPobladosController extends CentrosPobladosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CentrosPobladosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.centros_poblado', 'app.distrito', 'app.provincia', 'app.departamento');

	function startTest() {
		$this->CentrosPoblados =& new TestCentrosPobladosController();
		$this->CentrosPoblados->constructClasses();
	}

	function endTest() {
		unset($this->CentrosPoblados);
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
