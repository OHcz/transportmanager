<?php
/* Cesta Fixture generated on: 2010-12-12 15:12:32 : 1292162732 */
class CestaFixture extends CakeTestFixture {
	var $name = 'Cesta';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'id_stanice' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_dalsi' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'id_stanice' => 1,
			'id_dalsi' => 1,
			'lft' => 1,
			'rght' => 1
		),
	);
}
?>