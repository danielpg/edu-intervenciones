<?php
/* Unidades Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'Unidades');

class TestUnidadesController extends UnidadesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UnidadesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.unidad');

	function startTest() {
		$this->Unidades =& new TestUnidadesController();
		$this->Unidades->constructClasses();
	}

	function endTest() {
		unset($this->Unidades);
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
