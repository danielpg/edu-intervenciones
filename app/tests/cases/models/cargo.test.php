<?php
/* Cargo Test cases generated on: 2013-05-15 20:54:02 : 1368669242*/
App::import('Model', 'Cargo');

class CargoTestCase extends CakeTestCase {
	var $fixtures = array('app.cargo', 'app.participante');

	function startTest() {
		$this->Cargo =& ClassRegistry::init('Cargo');
	}

	function endTest() {
		unset($this->Cargo);
		ClassRegistry::flush();
	}

}
