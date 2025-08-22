<?php
/* Provincias Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'Provincias');

class TestProvinciasController extends ProvinciasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProvinciasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.provincia', 'app.departamento');

	function startTest() {
		$this->Provincias =& new TestProvinciasController();
		$this->Provincias->constructClasses();
	}

	function endTest() {
		unset($this->Provincias);
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
