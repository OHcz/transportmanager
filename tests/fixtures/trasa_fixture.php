<?php
/* Trasa Fixture generated on: 2010-12-12 15:12:34 : 1292162734 */
class TrasaFixture extends CakeTestFixture {
	var $name = 'Trasa';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'odesilaci_stanice' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'stanice_urceni' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'datum_cas' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'id_periodicita' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_vs' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_cesta' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'stav_schvaleni' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'comment' => 'enum: - schválená - neschválená - ?ekající 
 stav schválení od MI', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'odesilaci_stanice' => 1,
			'stanice_urceni' => 1,
			'datum_cas' => '2010-12-12 15:05:34',
			'id_periodicita' => 1,
			'id_vs' => 1,
			'id_cesta' => 1,
			'stav_schvaleni' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>