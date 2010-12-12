<?php
/* VlakovaSouprava Test cases generated on: 2010-12-12 15:12:35 : 1292162735*/
App::import('Model', 'VlakovaSouprava');

class VlakovaSoupravaTestCase extends CakeTestCase {
	var $fixtures = array('app.vlakova_souprava', 'app.nakaldni_vuz', 'app.uskutecnena_preprava', 'app.nakaldni_vuz_uskutecnena_preprava', 'app.nakaldni_vuz_vlakova_souprava');

	function startTest() {
		$this->VlakovaSouprava =& ClassRegistry::init('VlakovaSouprava');
	}

	function endTest() {
		unset($this->VlakovaSouprava);
		ClassRegistry::flush();
	}

}
?>