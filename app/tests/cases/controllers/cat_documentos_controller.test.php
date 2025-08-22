<?php
/* CatDocumentos Test cases generated on: 2013-01-08 00:42:07 : 1357623727*/
App::import('Controller', 'CatDocumentos');

class TestCatDocumentosController extends CatDocumentosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CatDocumentosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.cat_documento');

	function startTest() {
		$this->CatDocumentos =& new TestCatDocumentosController();
		$this->CatDocumentos->constructClasses();
	}

	function endTest() {
		unset($this->CatDocumentos);
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
