<?php
/* NucleosRoles Test cases generated on: 2013-05-15 21:38:03 : 1368671883*/
App::import('Controller', 'NucleosRoles');

class TestNucleosRolesController extends NucleosRolesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NucleosRolesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.nucleos_rol');

	function startTest() {
		$this->NucleosRoles =& new TestNucleosRolesController();
		$this->NucleosRoles->constructClasses();
	}

	function endTest() {
		unset($this->NucleosRoles);
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
