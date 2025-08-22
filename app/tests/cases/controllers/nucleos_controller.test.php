<?php
/* Nucleos Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'Nucleos');

class TestNucleosController extends NucleosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NucleosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.nucleo');

	function startTest() {
		$this->Nucleos =& new TestNucleosController();
		$this->Nucleos->constructClasses();
	}

	function endTest() {
		unset($this->Nucleos);
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
