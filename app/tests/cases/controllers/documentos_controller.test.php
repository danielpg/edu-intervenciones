<?php
/* Documentos Test cases generated on: 2013-01-08 00:42:07 : 1357623727*/
App::import('Controller', 'Documentos');

class TestDocumentosController extends DocumentosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DocumentosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.documento');

	function startTest() {
		$this->Documentos =& new TestDocumentosController();
		$this->Documentos->constructClasses();
	}

	function endTest() {
		unset($this->Documentos);
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
