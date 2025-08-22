<?php
/* EstadoCivils Test cases generated on: 2013-01-08 00:42:07 : 1357623727*/
App::import('Controller', 'EstadoCivils');

class TestEstadoCivilsController extends EstadoCivilsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EstadoCivilsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.estado_civil');

	function startTest() {
		$this->EstadoCivils =& new TestEstadoCivilsController();
		$this->EstadoCivils->constructClasses();
	}

	function endTest() {
		unset($this->EstadoCivils);
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
