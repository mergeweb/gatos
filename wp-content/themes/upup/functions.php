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


// Form



// /* Replace XXX with your Gravity Form ID. e.g., gform_after_submission_2 for Form 2 */
// add_action('gform_after_submission_1', 'add_to_google_spreadsheet', 10, 2);
 
// function add_to_google_spreadsheet($entry, $form) {
 
//     // This is the web app URL of your Google Script create in previous step
//     $post_url = 'https://script.google.com/macros/s/AKfycbyRz9laq933aIX7YkpAG95Sf4W9jTz6e4F4D7aGMY7FdE-A5CQ/exec';
 
//     // Put all the form fields (names and values) in this array
//     $body = array('input_1' => rgar($entry, '1'));
 
//     // Send the data to Google Spreadsheet via HTTP POST request
//     $request = new WP_Http();
//     $response = $request->request($post_url, array('method' => 'POST', 'sslverify' => false, 'body' => $body));
// }

?>