<?php
class NakaldniVuz extends AppModel {
	var $name = 'NakaldniVuz';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'UskutecnenaPreprava' => array(
			'className' => 'UskutecnenaPreprava',
			'joinTable' => 'nakladni_vozy_uskutecnene_prepravy',
			'foreignKey' => 'nakaldni_vuz_id',
			'associationForeignKey' => 'uskutecnena_preprava_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'VlakovaSouprava' => array(
			'className' => 'VlakovaSouprava',
			'joinTable' => 'nakladni_vozy_vlakove_soupravy',
			'foreignKey' => 'nakaldni_vuz_id',
			'associationForeignKey' => 'vlakova_souprava_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
        var $hasOne = 'VozovaRada';

}
?>