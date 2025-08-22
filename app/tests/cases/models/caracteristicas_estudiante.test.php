<?php
/* CaracteristicasEstudiante Test cases generated on: 2013-05-15 20:54:01 : 1368669241*/
App::import('Model', 'CaracteristicasEstudiante');

class CaracteristicasEstudianteTestCase extends CakeTestCase {
	var $fixtures = array('app.caracteristicas_estudiante');

	function startTest() {
		$this->CaracteristicasEstudiante =& ClassRegistry::init('CaracteristicasEstudiante');
	}

	function endTest() {
		unset($this->CaracteristicasEstudiante);
		ClassRegistry::flush();
	}

}
