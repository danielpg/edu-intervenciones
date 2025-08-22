<?php
/* CaracteristicasEstudiantes Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'CaracteristicasEstudiantes');

class TestCaracteristicasEstudiantesController extends CaracteristicasEstudiantesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CaracteristicasEstudiantesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.caracteristicas_estudiante');

	function startTest() {
		$this->CaracteristicasEstudiantes =& new TestCaracteristicasEstudiantesController();
		$this->CaracteristicasEstudiantes->constructClasses();
	}

	function endTest() {
		unset($this->CaracteristicasEstudiantes);
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
