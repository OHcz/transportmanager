<?php
class Stanice extends AppModel {
	var $name = 'Stanice';
        var $hasMany = array(
            'OkolniStanice' => array(
                'className' => 'OkolniStanice',
                'foreginKey' => 'id_stanice'
                   ),
            'OkolniStanice' => array(
                'className' => 'OkolniStanice',
                'foreginKey'=> 'id_dalsi_stanice'
                ),
            'Trasa' => array(
                'className' => 'Trasa',
                'foreginKey' => 'odesilaci_stanice'
                ),
            'Trasa' => array(
                'className' => 'Trasa',
                'foreginKey' => 'stanice_urceni'
            ),
            'Cesta' => array(
                'className' => 'Cesta',
                'foreginKey' => 'id'
            )
        );
}
?>