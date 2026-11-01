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

/**
 * Carrega os recursos do Header personalizado somente na página inicial.
 */
function michael_dev_child_enqueue_home_header_assets() {
	if ( ! is_front_page() ) {
		return;
	}

	$theme_path = get_stylesheet_directory();
	$theme_uri  = get_stylesheet_directory_uri();
	$css_path   = $theme_path . '/assets/css/header.min.css';
	$js_path    = $theme_path . '/assets/js/header.js';

	// Inter e Caveat correspondem às fontes configuradas no projeto Stitch.
	wp_enqueue_style(
		'michael-dev-header-fonts',
		'https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Inter:wght@300;400;500;600;700;800&display=swap',
		array(),
		null
	);

	// O CSS aparece após o build local do Tailwind v3.
	if ( file_exists( $css_path ) ) {
		wp_enqueue_style(
			'michael-dev-home-header',
			$theme_uri . '/assets/css/header.min.css',
			array( 'michael-dev-child-style', 'michael-dev-header-fonts' ),
			(string) filemtime( $css_path )
		);
	}

	if ( file_exists( $js_path ) ) {
		wp_enqueue_script(
			'michael-dev-home-header',
			$theme_uri . '/assets/js/header.js',
			array(),
			(string) filemtime( $js_path ),
			true
		);
	}
}

add_action( 'wp_enqueue_scripts', 'michael_dev_child_enqueue_home_header_assets', 20 );
