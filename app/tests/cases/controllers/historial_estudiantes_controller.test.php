<?php
/* HistorialEstudiantes Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'HistorialEstudiantes');

class TestHistorialEstudiantesController extends HistorialEstudiantesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class HistorialEstudiantesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.historial_estudiante', 'app.caracteristicas_estudiante', 'app.estudiante', 'app.nucleo');

	function startTest() {
		$this->HistorialEstudiantes =& new TestHistorialEstudiantesController();
		$this->HistorialEstudiantes->constructClasses();
	}

	function endTest() {
		unset($this->HistorialEstudiantes);
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
