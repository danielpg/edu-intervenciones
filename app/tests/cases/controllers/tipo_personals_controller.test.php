<?php
/* TipoPersonals Test cases generated on: 2013-01-08 00:42:07 : 1357623727*/
App::import('Controller', 'TipoPersonals');

class TestTipoPersonalsController extends TipoPersonalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TipoPersonalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tipo_personal');

	function startTest() {
		$this->TipoPersonals =& new TestTipoPersonalsController();
		$this->TipoPersonals->constructClasses();
	}

	function endTest() {
		unset($this->TipoPersonals);
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
