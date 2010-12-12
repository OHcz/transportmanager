<?php
/* UskutecnenaPreprava Fixture generated on: 2010-12-12 15:12:34 : 1292162734 */
class UskutecnenaPrepravaFixture extends CakeTestFixture {
	var $name = 'UskutecnenaPreprava';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'id_cesta' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_hnaci_vozidlo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_strojvedouci' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_odesilaci_stanice' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_stanice_urceni' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'datum_cas' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'id_cesta' => 1,
			'id_hnaci_vozidlo' => 1,
			'id_strojvedouci' => 1,
			'id_odesilaci_stanice' => 1,
			'id_stanice_urceni' => 1,
			'datum_cas' => '2010-12-12 15:05:34'
		),
	);
}
?>