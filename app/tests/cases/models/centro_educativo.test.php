<?php
/* CentroEducativo Test cases generated on: 2013-05-15 20:54:03 : 1368669243*/
App::import('Model', 'CentroEducativo');

class CentroEducativoTestCase extends CakeTestCase {
	var $fixtures = array('app.centro_educativo', 'app.centro_poblado', 'app.detalle_centros_educativo');

	function startTest() {
		$this->CentroEducativo =& ClassRegistry::init('CentroEducativo');
	}

	function endTest() {
		unset($this->CentroEducativo);
		ClassRegistry::flush();
	}

}
