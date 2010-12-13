<?php
class HnaciVozidlo extends AppModel {
	var $name = 'HnaciVozidlo';
        var $hasOne = array('VlakovaSouprava' => array(
            'className' => 'VlakovaSouprava',
            'foreginKey' => 'id_hnaci_vozidlo',
            )
        );
}
?>