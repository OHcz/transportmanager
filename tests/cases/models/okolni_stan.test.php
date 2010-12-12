<?php
/* OkolniStan Test cases generated on: 2010-12-12 15:12:33 : 1292162733*/
App::import('Model', 'OkolniStan');

class OkolniStanTestCase extends CakeTestCase {
	var $fixtures = array('app.okolni_stan');

	function startTest() {
		$this->OkolniStan =& ClassRegistry::init('OkolniStan');
	}

	function endTest() {
		unset($this->OkolniStan);
		ClassRegistry::flush();
	}

}
?>