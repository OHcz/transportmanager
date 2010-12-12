<?php
/* Stanice Test cases generated on: 2010-12-12 15:12:34 : 1292162734*/
App::import('Model', 'Stanice');

class StaniceTestCase extends CakeTestCase {
	var $fixtures = array('app.stanice');

	function startTest() {
		$this->Stanice =& ClassRegistry::init('Stanice');
	}

	function endTest() {
		unset($this->Stanice);
		ClassRegistry::flush();
	}

}
?>