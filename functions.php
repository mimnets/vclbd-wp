<?php
/*
* Functions definitions for VCLBD WordPress theme
*/
?>

<?php

if(! isset($content_width)){
    $content_width = 660;
}

function vclbd_setup(){
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','vclbd_setup');


function vclbd_scripts() {
 /*
 * Add styles
 */
	wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() .'/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/css/fontawesome/css/all.min.css');
    wp_enqueue_style( 'custom', get_template_directory_uri() .'/style.css');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), null, true);

}
// Register style sheet.
add_action( 'wp_enqueue_scripts', 'vclbd_scripts');
?>