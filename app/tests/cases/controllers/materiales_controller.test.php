<?php
/* Materiales Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'Materiales');

class TestMaterialesController extends MaterialesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MaterialesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.material');

	function startTest() {
		$this->Materiales =& new TestMaterialesController();
		$this->Materiales->constructClasses();
	}

	function endTest() {
		unset($this->Materiales);
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
