<?php
/* Dres Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'Dres');

class TestDresController extends DresController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DresControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.dre');

	function startTest() {
		$this->Dres =& new TestDresController();
		$this->Dres->constructClasses();
	}

	function endTest() {
		unset($this->Dres);
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
