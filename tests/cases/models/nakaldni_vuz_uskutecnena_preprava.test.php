<?php
/* NakaldniVuzUskutecnenaPreprava Test cases generated on: 2010-12-12 15:12:33 : 1292162733*/
App::import('Model', 'NakaldniVuzUskutecnenaPreprava');

class NakaldniVuzUskutecnenaPrepravaTestCase extends CakeTestCase {
	var $fixtures = array('app.nakaldni_vuz_uskutecnena_preprava');

	function startTest() {
		$this->NakaldniVuzUskutecnenaPreprava =& ClassRegistry::init('NakaldniVuzUskutecnenaPreprava');
	}

	function endTest() {
		unset($this->NakaldniVuzUskutecnenaPreprava);
		ClassRegistry::flush();
	}

}
?>