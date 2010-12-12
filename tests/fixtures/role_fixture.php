<?php
/* Role Fixture generated on: 2010-12-12 15:12:34 : 1292162734 */
class RoleFixture extends CakeTestFixture {
	var $name = 'Role';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nazev' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'nazev' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>