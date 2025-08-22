<?php
/* Distritos Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'Distritos');

class TestDistritosController extends DistritosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DistritosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.distrito', 'app.provincia', 'app.departamento');

	function startTest() {
		$this->Distritos =& new TestDistritosController();
		$this->Distritos->constructClasses();
	}

	function endTest() {
		unset($this->Distritos);
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
