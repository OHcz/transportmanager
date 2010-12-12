<?php
/* VlakovaSouprava Fixture generated on: 2010-12-12 15:12:35 : 1292162735 */
class VlakovaSoupravaFixture extends CakeTestFixture {
	var $name = 'VlakovaSouprava';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'id_trasa' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'n?jaký vektor stanic ?i n?co podobného, nechme na implementaci'),
		'id_hnaci_vozidlo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_strojvedouci' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'stav_rezervace' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'comment' => 'možné stavy: \'alokovane\', \'rezervovane\' 
 - rezervovane - bere se v potaz ?as rezervace a nejdou v tuto dobu znovu zarezervovat - alokovane - nebere se v potas ?as rezervace, ale už mají naplánovanou trasu a nejdou zarezervovat', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'id_trasa' => 1,
			'id_hnaci_vozidlo' => 1,
			'id_strojvedouci' => 1,
			'stav_rezervace' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>