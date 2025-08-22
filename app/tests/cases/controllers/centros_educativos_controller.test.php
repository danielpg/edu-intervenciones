<?php
/* CentrosEducativos Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'CentrosEducativos');

class TestCentrosEducativosController extends CentrosEducativosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CentrosEducativosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.centros_educativo', 'app.centros_poblado', 'app.distrito', 'app.provincia', 'app.departamento');

	function startTest() {
		$this->CentrosEducativos =& new TestCentrosEducativosController();
		$this->CentrosEducativos->constructClasses();
	}

	function endTest() {
		unset($this->CentrosEducativos);
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
