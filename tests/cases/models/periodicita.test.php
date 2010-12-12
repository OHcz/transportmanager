<?php
/* Periodicita Test cases generated on: 2010-12-12 15:12:33 : 1292162733*/
App::import('Model', 'Periodicita');

class PeriodicitaTestCase extends CakeTestCase {
	var $fixtures = array('app.periodicita');

	function startTest() {
		$this->Periodicita =& ClassRegistry::init('Periodicita');
	}

	function endTest() {
		unset($this->Periodicita);
		ClassRegistry::flush();
	}

}
?>