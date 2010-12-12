<?php
/* Zamestnanec Test cases generated on: 2010-12-12 15:12:35 : 1292162735*/
App::import('Model', 'Zamestnanec');

class ZamestnanecTestCase extends CakeTestCase {
	var $fixtures = array('app.zamestnanec');

	function startTest() {
		$this->Zamestnanec =& ClassRegistry::init('Zamestnanec');
	}

	function endTest() {
		unset($this->Zamestnanec);
		ClassRegistry::flush();
	}

}
?>