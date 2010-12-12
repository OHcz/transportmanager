<?php
/* Zamestnanec Fixture generated on: 2010-12-12 15:12:35 : 1292162735 */
class ZamestnanecFixture extends CakeTestFixture {
	var $name = 'Zamestnanec';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'jmeno' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'prjmeni' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'id_role' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'jmeno' => 'Lorem ipsum dolor sit amet',
			'prjmeni' => 'Lorem ipsum dolor sit amet',
			'id_role' => 1
		),
	);
}
?>