<?php
/* OkolniStanice Fixture generated on: 2010-12-12 14:12:20 : 1292162360 */
class OkolniStaniceFixture extends CakeTestFixture {
	var $name = 'OkolniStanice';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'id_stanice' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_dalsi_stanice' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'vzdalenost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'id_stanice' => 1,
			'id_dalsi_stanice' => 1,
			'vzdalenost' => 1
		),
	);
}
?>