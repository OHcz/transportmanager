<?php
class Trasa extends AppModel {
	var $name = 'Trasa';
        var $belongsTo = array(
            'Periodicita',
            'Cesta',
            'OdesilaceStanice' => array(
                'className' => 'Stanice',
                'foreginKey' => 'odesilaci_stanice'
            ),
            'StaniceUrceni' => array(
                'className' => 'Stanice',
                'foreginKey' => 'stanice_urceni'
            ),
            'VlakovaSouprava' => array(
                'className' => 'VlakovaSouprava',
                'foreginKey' => 'id_trasa'
                )
            );

}
?>