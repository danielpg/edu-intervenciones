<?php
/* CaracterisitcasParticipante Test cases generated on: 2013-05-15 20:54:00 : 1368669240*/
App::import('Model', 'CaracterisitcasParticipante');

class CaracterisitcasParticipanteTestCase extends CakeTestCase {
	var $fixtures = array('app.caracterisitcas_participante');

	function startTest() {
		$this->CaracterisitcasParticipante =& ClassRegistry::init('CaracterisitcasParticipante');
	}

	function endTest() {
		unset($this->CaracterisitcasParticipante);
		ClassRegistry::flush();
	}

}
