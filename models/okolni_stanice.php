<?php
class OkolniStanice extends AppModel {
	var $name = 'OkolniStanice';
        var $belongsTo = array(
            'Stanice' => array(
                'className' => 'Stanice',
                'foreginKey' => 'id'
            ),
            'DalsiStanice' => array(
                'className' => 'Stanice',
                'foreginKey' => 'id'
            )
            );
}
?>