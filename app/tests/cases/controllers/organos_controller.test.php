<?php
/* Organos Test cases generated on: 2013-01-08 00:42:07 : 1357623727*/
App::import('Controller', 'Organos');

class TestOrganosController extends OrganosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OrganosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.organo');

	function startTest() {
		$this->Organos =& new TestOrganosController();
		$this->Organos->constructClasses();
	}

	function endTest() {
		unset($this->Organos);
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
