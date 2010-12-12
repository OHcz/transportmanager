<?php
/* NakaldniVuzVlakovaSouprava Test cases generated on: 2010-12-12 15:12:33 : 1292162733*/
App::import('Model', 'NakaldniVuzVlakovaSouprava');

class NakaldniVuzVlakovaSoupravaTestCase extends CakeTestCase {
	var $fixtures = array('app.nakaldni_vuz_vlakova_souprava');

	function startTest() {
		$this->NakaldniVuzVlakovaSouprava =& ClassRegistry::init('NakaldniVuzVlakovaSouprava');
	}

	function endTest() {
		unset($this->NakaldniVuzVlakovaSouprava);
		ClassRegistry::flush();
	}

}
?>