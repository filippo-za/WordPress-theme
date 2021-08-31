<?php

function simple_setup(){

    add_theme_support( "title-tag" ); // enable title in header

    add_theme_support( "post-thumbnails" ); // enable featured img
    
    register_nav_menus( array(
        "header" => esc_html__( "Header", "slug-theme" )
    )); // enable menu 

    add_theme_support( "custom-header" ); // enable custom header
}

add_action( "after_setup_theme", "simple_setup" );




/* ENQUEUE */

function simple_styles() {
    wp_enqueue_style( "simple-style", get_template_directory_uri()."/style.css");
}

add_action("wp_enqueue_scripts", "simple_styles" );



/* CHANGE WIDTH GUTENBERG */

function gb_gutenberg_admin_styles() {
    echo '
        <style>
            /* Main column width */
            .wp-block {
                max-width: 1400px;
            }
 
            /* Width of "wide" blocks */
            .wp-block[data-align="wide"] {
                max-width: 1480px;
            }
 
            /* Width of "full-wide" blocks */
            .wp-block[data-align="full"] {
                max-width: none;
            }	
        </style>
    ';
}

add_action('admin_head', 'gb_gutenberg_admin_styles');
?>