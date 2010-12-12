<?php
class Trasa extends AppModel {
	var $name = 'Trasa';
        var $hasOne = array(
            'Periodicita',
            'Cesta',
            'Stanice',
            'VlakovaSouprava' => array(
                'className' => 'VlakovaSouprava',
                'foreginKey' => 'id_trasa'
                )
            );

}
?>