<?php
/* CaracterisitcasParticipantes Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'CaracterisitcasParticipantes');

class TestCaracterisitcasParticipantesController extends CaracterisitcasParticipantesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CaracterisitcasParticipantesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.caracterisitcas_participante');

	function startTest() {
		$this->CaracterisitcasParticipantes =& new TestCaracterisitcasParticipantesController();
		$this->CaracterisitcasParticipantes->constructClasses();
	}

	function endTest() {
		unset($this->CaracterisitcasParticipantes);
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
