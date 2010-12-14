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
        var $belongsTo = array(
            'HnaciVozidlo' => array(
                'className' => 'HnaciVozidlo',
                'foreginKey' => 'id'
            ),
            'Zamestnanec' => array(
                'className' => 'Zamestnanec',
                'foreginKey' => 'id'
            ),
            'Cesta' => array(
                'className' => 'Cesta',
                'foreginKey' => 'id'
            )
        );

}
?>