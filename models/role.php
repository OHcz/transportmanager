<?php
class Role extends AppModel {
	var $name = 'Role';
        var $hasMany= array(
            'Zamestnanec' => array(
                'className' => 'Zamestnanec',
                'foreginKey' => 'id_role'
            )
        );
}
?>