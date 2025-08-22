<?php
/* HistorialFormatos Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'HistorialFormatos');

class TestHistorialFormatosController extends HistorialFormatosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class HistorialFormatosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.historial_formato', 'app.formato', 'app.validacion', 'app.nucleo');

	function startTest() {
		$this->HistorialFormatos =& new TestHistorialFormatosController();
		$this->HistorialFormatos->constructClasses();
	}

	function endTest() {
		unset($this->HistorialFormatos);
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
