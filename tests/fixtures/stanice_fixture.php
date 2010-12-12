<?php
/* Stanice Fixture generated on: 2010-12-12 15:12:34 : 1292162734 */
class StaniceFixture extends CakeTestFixture {
	var $name = 'Stanice';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'jmeno' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'okres' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'kraj' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'cislo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'comment' => 'sou tam i poml?ky a kdoví co ješt? - zjistit', 'charset' => 'utf8'),
		'gps' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'comment' => 'v jakým formátu se GPS sou?adnice ukládaj do db?', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'jmeno' => 'Lorem ipsum dolor sit amet',
			'okres' => 'Lorem ipsum dolor sit amet',
			'kraj' => 'Lorem ipsum dolor sit amet',
			'cislo' => 'Lorem ipsum dolor sit amet',
			'gps' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>