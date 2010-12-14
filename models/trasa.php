<?php
class Trasa extends AppModel {
	var $name = 'Trasa';
        var $belongsTo = array(
            'Periodicita' => array(
                'className' => 'Periodicita',
                'foreginKey' => 'id'
            ),
            'Cesta' => array(
                'className' => 'Cesta',
                'foreginKey' => 'id'
            ),
            'OdesilaceStanice' => array(
                'className' => 'Stanice',
                'foreginKey' => 'id'
            ),
            'StaniceUrceni' => array(
                'className' => 'Stanice',
                'foreginKey' => 'id'
            ),
            'VlakovaSouprava' => array(
                'className' => 'VlakovaSouprava',
                'foreginKey' => 'id_trasa'
                )
            );

}
?>