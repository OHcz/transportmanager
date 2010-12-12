<?php
/* VozovaRada Test cases generated on: 2010-12-12 15:12:35 : 1292162735*/
App::import('Model', 'VozovaRada');

class VozovaRadaTestCase extends CakeTestCase {
	var $fixtures = array('app.vozova_rada');

	function startTest() {
		$this->VozovaRada =& ClassRegistry::init('VozovaRada');
	}

	function endTest() {
		unset($this->VozovaRada);
		ClassRegistry::flush();
	}

}
?>