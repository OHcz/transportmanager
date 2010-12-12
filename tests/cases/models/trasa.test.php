<?php
/* Trasa Test cases generated on: 2010-12-12 15:12:34 : 1292162734*/
App::import('Model', 'Trasa');

class TrasaTestCase extends CakeTestCase {
	var $fixtures = array('app.trasa');

	function startTest() {
		$this->Trasa =& ClassRegistry::init('Trasa');
	}

	function endTest() {
		unset($this->Trasa);
		ClassRegistry::flush();
	}

}
?>