<?php
/* HnaciVozidlo Test cases generated on: 2010-12-12 15:12:32 : 1292162732*/
App::import('Model', 'HnaciVozidlo');

class HnaciVozidloTestCase extends CakeTestCase {
	var $fixtures = array('app.hnaci_vozidlo');

	function startTest() {
		$this->HnaciVozidlo =& ClassRegistry::init('HnaciVozidlo');
	}

	function endTest() {
		unset($this->HnaciVozidlo);
		ClassRegistry::flush();
	}

}
?>