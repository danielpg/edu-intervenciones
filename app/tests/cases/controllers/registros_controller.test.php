<?php
/* Registros Test cases generated on: 2013-01-08 00:42:07 : 1357623727*/
App::import('Controller', 'Registros');

class TestRegistrosController extends RegistrosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RegistrosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.registro', 'app.organo', 'app.cargo', 'app.profesion', 'app.condicion', 'app.grupo_ocupacional', 'app.nivel_ocupacional', 'app.estado_civil', 'app.capacitacion', 'app.documento');

	function startTest() {
		$this->Registros =& new TestRegistrosController();
		$this->Registros->constructClasses();
	}

	function endTest() {
		unset($this->Registros);
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
