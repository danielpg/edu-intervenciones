<?php
/* GrupoOcupacionals Test cases generated on: 2013-01-08 00:42:07 : 1357623727*/
App::import('Controller', 'GrupoOcupacionals');

class TestGrupoOcupacionalsController extends GrupoOcupacionalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GrupoOcupacionalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.grupo_ocupacional');

	function startTest() {
		$this->GrupoOcupacionals =& new TestGrupoOcupacionalsController();
		$this->GrupoOcupacionals->constructClasses();
	}

	function endTest() {
		unset($this->GrupoOcupacionals);
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
