<?php
/* DetalleCentrosEducativos Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'DetalleCentrosEducativos');

class TestDetalleCentrosEducativosController extends DetalleCentrosEducativosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DetalleCentrosEducativosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.detalle_centros_educativo', 'app.centros_educativo', 'app.centros_poblado', 'app.distrito', 'app.provincia', 'app.departamento', 'app.unidad');

	function startTest() {
		$this->DetalleCentrosEducativos =& new TestDetalleCentrosEducativosController();
		$this->DetalleCentrosEducativos->constructClasses();
	}

	function endTest() {
		unset($this->DetalleCentrosEducativos);
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
