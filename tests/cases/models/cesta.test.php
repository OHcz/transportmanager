<?php
/* Cesta Test cases generated on: 2010-12-12 15:12:32 : 1292162732*/
App::import('Model', 'Cesta');

class CestaTestCase extends CakeTestCase {
	var $fixtures = array('app.cesta');

	function startTest() {
		$this->Cesta =& ClassRegistry::init('Cesta');
	}

	function endTest() {
		unset($this->Cesta);
		ClassRegistry::flush();
	}

}
?>