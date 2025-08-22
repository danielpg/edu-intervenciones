<?php
/* Participantes Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'Participantes');

class TestParticipantesController extends ParticipantesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ParticipantesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.participante', 'app.nucleo', 'app.cargo');

	function startTest() {
		$this->Participantes =& new TestParticipantesController();
		$this->Participantes->constructClasses();
	}

	function endTest() {
		unset($this->Participantes);
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
