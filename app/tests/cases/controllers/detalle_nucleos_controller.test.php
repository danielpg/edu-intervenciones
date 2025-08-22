<?php
/* DetalleNucleos Test cases generated on: 2013-05-15 21:38:02 : 1368671882*/
App::import('Controller', 'DetalleNucleos');

class TestDetalleNucleosController extends DetalleNucleosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DetalleNucleosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.detalle_nucleo', 'app.detalle_centros_educativo', 'app.centros_educativo', 'app.centros_poblado', 'app.distrito', 'app.provincia', 'app.departamento', 'app.unidad', 'app.nucleos_rol', 'app.nucleo');

	function startTest() {
		$this->DetalleNucleos =& new TestDetalleNucleosController();
		$this->DetalleNucleos->constructClasses();
	}

	function endTest() {
		unset($this->DetalleNucleos);
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
