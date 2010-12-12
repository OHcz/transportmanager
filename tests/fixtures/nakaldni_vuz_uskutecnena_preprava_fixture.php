<?php
/* NakaldniVuzUskutecnenaPreprava Fixture generated on: 2010-12-12 15:12:33 : 1292162733 */
class NakaldniVuzUskutecnenaPrepravaFixture extends CakeTestFixture {
	var $name = 'NakaldniVuzUskutecnenaPreprava';

	var $fields = array(
		'id_nakladni_vuz' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_uskutecnena_preprava' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_nakladni_vuz' => 1,
			'id_uskutecnena_preprava' => 1
		),
	);
}
?>