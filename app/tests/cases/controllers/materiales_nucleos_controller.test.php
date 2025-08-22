<?php
/* MaterialesNucleos Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'MaterialesNucleos');

class TestMaterialesNucleosController extends MaterialesNucleosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MaterialesNucleosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.materiales_nucleo', 'app.material', 'app.nucleo');

	function startTest() {
		$this->MaterialesNucleos =& new TestMaterialesNucleosController();
		$this->MaterialesNucleos->constructClasses();
	}

	function endTest() {
		unset($this->MaterialesNucleos);
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
