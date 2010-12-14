<?php
class Periodicita extends AppModel {
	var $name = 'Periodicita';
        var $hasMany = array(
            'Trasa' => array(
                'className' => 'Trasa',
                'foreginKey' => 'id_periodicita'
            )
            );
}
?>