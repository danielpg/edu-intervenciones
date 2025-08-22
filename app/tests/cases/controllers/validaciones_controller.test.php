<?php
/* Validaciones Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'Validaciones');

class TestValidacionesController extends ValidacionesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ValidacionesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.validacion');

	function startTest() {
		$this->Validaciones =& new TestValidacionesController();
		$this->Validaciones->constructClasses();
	}

	function endTest() {
		unset($this->Validaciones);
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
