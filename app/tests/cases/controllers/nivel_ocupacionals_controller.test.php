<?php
/* NivelOcupacionals Test cases generated on: 2013-01-08 00:42:07 : 1357623727*/
App::import('Controller', 'NivelOcupacionals');

class TestNivelOcupacionalsController extends NivelOcupacionalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NivelOcupacionalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.nivel_ocupacional');

	function startTest() {
		$this->NivelOcupacionals =& new TestNivelOcupacionalsController();
		$this->NivelOcupacionals->constructClasses();
	}

	function endTest() {
		unset($this->NivelOcupacionals);
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
