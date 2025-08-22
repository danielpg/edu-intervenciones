<?php
/* TipoDocumentos Test cases generated on: 2013-01-08 00:42:07 : 1357623727*/
App::import('Controller', 'TipoDocumentos');

class TestTipoDocumentosController extends TipoDocumentosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TipoDocumentosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tipo_documento');

	function startTest() {
		$this->TipoDocumentos =& new TestTipoDocumentosController();
		$this->TipoDocumentos->constructClasses();
	}

	function endTest() {
		unset($this->TipoDocumentos);
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
