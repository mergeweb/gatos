<?php

//---------------------------------------------------//
//----'FIELD LABEL' VISIBILITY FOR GRAVITY FORMS-----//
//---------------------------------------------------//

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

//---------------------------------------------------//
//----ADD JQUERY-------------------------------------//
//---------------------------------------------------//

function jquery_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script(   'jquery'
	    , '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, false);

	wp_enqueue_script('jquery');
}    

if( !is_admin() ) {
	add_action('init', 'jquery_method');
}

?>