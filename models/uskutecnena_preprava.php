<?php
class UskutecnenaPreprava extends AppModel {
	var $name = 'UskutecnenaPreprava';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'NakaldniVuz' => array(
			'className' => 'NakaldniVuz',
			'joinTable' => 'nakladni_vozy_uskutecnene_prepravy',
			'foreignKey' => 'uskutecnena_preprava_id',
			'associationForeignKey' => 'nakaldni_vuz_id',
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
        var $hasOne = array(
            'HnaciVozidlo',
            'Zamestnanec',
            'Cesta'
        );

}
?>