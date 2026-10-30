<?php
/**
 * Funções do tema filho Michael DEV.
 *
 * @package MichaelDevChild
 */

function michael_dev_child_enqueue_styles() {
    wp_enqueue_style(
        'michael-dev-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'astra-theme-css' ),
        wp_get_theme()->get( 'Version' )
    );
}

add_action( 'wp_enqueue_scripts', 'michael_dev_child_enqueue_styles', 15 );
