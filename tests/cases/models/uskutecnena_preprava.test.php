<?php
/* UskutecnenaPreprava Test cases generated on: 2010-12-12 15:12:34 : 1292162734*/
App::import('Model', 'UskutecnenaPreprava');

class UskutecnenaPrepravaTestCase extends CakeTestCase {
	var $fixtures = array('app.uskutecnena_preprava', 'app.nakaldni_vuz', 'app.nakaldni_vuz_uskutecnena_preprava', 'app.vlakova_souprava', 'app.nakaldni_vuz_vlakova_souprava');

	function startTest() {
		$this->UskutecnenaPreprava =& ClassRegistry::init('UskutecnenaPreprava');
	}

	function endTest() {
		unset($this->UskutecnenaPreprava);
		ClassRegistry::flush();
	}

}
?>