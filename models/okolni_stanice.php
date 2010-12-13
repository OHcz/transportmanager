<?php
class OkolniStanice extends AppModel {
	var $name = 'OkolniStanice';
        var $belongsTo = array(
            'Stanice' => array(
                'className' => 'Stanice',
                'foreginKey' => 'id_stanice'
            ),
            'DalsiStanice' => array(
                'className' => 'Stanice',
                'foreginKey' => 'id_dalsi_stanice'
            )
            );
}
?>