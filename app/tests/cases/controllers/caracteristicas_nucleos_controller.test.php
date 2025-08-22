<?php
/* CaracteristicasNucleos Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'CaracteristicasNucleos');

class TestCaracteristicasNucleosController extends CaracteristicasNucleosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CaracteristicasNucleosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.caracteristicas_nucleo');

	function startTest() {
		$this->CaracteristicasNucleos =& new TestCaracteristicasNucleosController();
		$this->CaracteristicasNucleos->constructClasses();
	}

	function endTest() {
		unset($this->CaracteristicasNucleos);
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
