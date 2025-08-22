<?php
/* HistorialParticipantes Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'HistorialParticipantes');

class TestHistorialParticipantesController extends HistorialParticipantesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class HistorialParticipantesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.historial_participante', 'app.participante', 'app.nucleo', 'app.cargo', 'app.caracterisitcas_participante');

	function startTest() {
		$this->HistorialParticipantes =& new TestHistorialParticipantesController();
		$this->HistorialParticipantes->constructClasses();
	}

	function endTest() {
		unset($this->HistorialParticipantes);
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
