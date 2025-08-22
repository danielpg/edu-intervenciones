<?php
/* Estudiantes Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'Estudiantes');

class TestEstudiantesController extends EstudiantesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EstudiantesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.estudiante', 'app.nucleo');

	function startTest() {
		$this->Estudiantes =& new TestEstudiantesController();
		$this->Estudiantes->constructClasses();
	}

	function endTest() {
		unset($this->Estudiantes);
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
