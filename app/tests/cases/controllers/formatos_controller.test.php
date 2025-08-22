<?php
/* Formatos Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'Formatos');

class TestFormatosController extends FormatosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FormatosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.formato');

	function startTest() {
		$this->Formatos =& new TestFormatosController();
		$this->Formatos->constructClasses();
	}

	function endTest() {
		unset($this->Formatos);
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
