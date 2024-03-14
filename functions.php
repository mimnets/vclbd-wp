<?php
/*
* Functions definitions for VCLBD WordPress theme
*/
?>

<?php

if(! isset($content_width){
    $content_width = 660;
})

function vclbdwp_setup(){
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','vclbdwp_setup')

?>