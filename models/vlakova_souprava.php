<?php
class VlakovaSouprava extends AppModel {
	var $name = 'VlakovaSouprava';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'NakaldniVuz' => array(
			'className' => 'NakaldniVuz',
			'joinTable' => 'nakladni_vozy_vlakove_soupravy',
			'foreignKey' => 'vlakova_souprava_id',
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
            'HnaciVozidlo' => array(
                'className' => 'HnaciVozidlo',
                'foreginKey' => 'id'
            ),
            'Trasa' => array(
                'className' => 'Trasa',
                'foreginKey' => 'id'
            ),
            'Zamestnanec' => array(
                'classname' => 'Zamestnanec',
                'foreginKey' => 'id'
            )
            );

}
?>