<?php
/* HistorialNucleos Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'HistorialNucleos');

class TestHistorialNucleosController extends HistorialNucleosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class HistorialNucleosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.historial_nucleo', 'app.caracteristicas_nucleo', 'app.nucleo');

	function startTest() {
		$this->HistorialNucleos =& new TestHistorialNucleosController();
		$this->HistorialNucleos->constructClasses();
	}

	function endTest() {
		unset($this->HistorialNucleos);
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
