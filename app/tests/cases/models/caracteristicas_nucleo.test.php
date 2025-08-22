<?php
/* CaracteristicasNucleo Test cases generated on: 2013-05-15 20:54:02 : 1368669242*/
App::import('Model', 'CaracteristicasNucleo');

class CaracteristicasNucleoTestCase extends CakeTestCase {
	var $fixtures = array('app.caracteristicas_nucleo');

	function startTest() {
		$this->CaracteristicasNucleo =& ClassRegistry::init('CaracteristicasNucleo');
	}

	function endTest() {
		unset($this->CaracteristicasNucleo);
		ClassRegistry::flush();
	}

}
