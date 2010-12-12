<?php
/* OkolniStanice Test cases generated on: 2010-12-12 14:12:20 : 1292162360*/
App::import('Model', 'OkolniStanice');

class OkolniStaniceTestCase extends CakeTestCase {
	var $fixtures = array('app.okolni_stanice');

	function startTest() {
		$this->OkolniStanice =& ClassRegistry::init('OkolniStanice');
	}

	function endTest() {
		unset($this->OkolniStanice);
		ClassRegistry::flush();
	}

}
?>