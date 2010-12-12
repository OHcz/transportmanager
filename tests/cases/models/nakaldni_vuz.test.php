<?php
/* NakaldniVuz Test cases generated on: 2010-12-12 15:12:32 : 1292162732*/
App::import('Model', 'NakaldniVuz');

class NakaldniVuzTestCase extends CakeTestCase {
	var $fixtures = array('app.nakaldni_vuz', 'app.uskutecnena_preprava', 'app.nakaldni_vuz_uskutecnena_preprava', 'app.vlakova_souprava', 'app.nakaldni_vuz_vlakova_souprava');

	function startTest() {
		$this->NakaldniVuz =& ClassRegistry::init('NakaldniVuz');
	}

	function endTest() {
		unset($this->NakaldniVuz);
		ClassRegistry::flush();
	}

}
?>