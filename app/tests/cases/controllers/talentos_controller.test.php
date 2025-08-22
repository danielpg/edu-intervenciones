<?php
/* Talentos Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'Talentos');

class TestTalentosController extends TalentosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TalentosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.talento', 'app.estudiante', 'app.nucleo');

	function startTest() {
		$this->Talentos =& new TestTalentosController();
		$this->Talentos->constructClasses();
	}

	function endTest() {
		unset($this->Talentos);
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
