<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

    // custom
    'column_class' => array(
	    'type'  => 'text',
    	'label' => __('Column Class', 'fw'),
	    'desc'  => __('Column Class', 'fw'),
    ),
	'column_id' => array(
		'type'  => 'text',
		'label' => __('Column ID', 'fw'),
		'desc'  => __('Column ID', 'fw'),
	)
);