<?php
/**
 * Created by PhpStorm.
 * User: r_wha
 * Date: 11/19/2018
 * Time: 10:39 AM
 */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
//    parent style
    $parent_style = 'parent-style'; //
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );


}

?>