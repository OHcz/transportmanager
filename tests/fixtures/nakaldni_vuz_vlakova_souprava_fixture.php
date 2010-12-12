<?php
/* NakaldniVuzVlakovaSouprava Fixture generated on: 2010-12-12 15:12:33 : 1292162733 */
class NakaldniVuzVlakovaSoupravaFixture extends CakeTestFixture {
	var $name = 'NakaldniVuzVlakovaSouprava';

	var $fields = array(
		'id_nakladni_vuz' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_vlakova_souprava' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_nakladni_vuz' => 1,
			'id_vlakova_souprava' => 1
		),
	);
}
?>