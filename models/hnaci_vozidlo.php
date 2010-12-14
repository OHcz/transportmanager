<?php
class HnaciVozidlo extends AppModel {
	var $name = 'HnaciVozidlo';
        var $belongsTo = array('VlakovaSouprava' => array(
            'className' => 'VlakovaSouprava',
            'foreginKey' => 'id_hnaci_vozidlo',
            )
        );
}
?>