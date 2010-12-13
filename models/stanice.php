<?php
class Stanice extends AppModel {
	var $name = 'Stanice';
        var $hasMany = array(
            'Stanice' => array(
                'className' => 'OkolniStanice',
                'foreginKey' => 'id_stanice'
                
                   ),
            'DalsiStanice' => array(
                'className' => 'OkolniStanice',
                'foreginKey'=> 'id_dalsi_stanice'
                ),
            'OdesilaciStanice' => array(
                'className' => 'Trasa',
                'foreginKey' => 'odesilaci_stanice'
                ),
            'StaniceUrceni' => array(
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