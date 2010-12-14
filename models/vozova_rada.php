<?php
class VozovaRada extends AppModel {
	var $name = 'VozovaRada';
        var $hasMany = array(
            'NakladniVuz' => array(
                'className' => 'NakladniVuz',
                'foreginKey' => 'id_nakladni_vuz'
                )
            );
}
?>