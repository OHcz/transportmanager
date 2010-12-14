<?php
class Zamestnanec extends AppModel {
	var $name = 'Zamestnanec';
        var $hasOne= 'Role';
        var $hasMany= array(
          'UskutecnenaPreprava' => array(
              'className' => 'UskutecnenaPreprava',
              'foreginKey' => 'id_strojvedouci'
            ),
        );
        var $hasOne = array(
           'VlakovaSouprava' => array(
              'className' => 'VlakovaSouprava',
              'foreginKey' => 'id_strojvedouci'
          )
        );
}
?>