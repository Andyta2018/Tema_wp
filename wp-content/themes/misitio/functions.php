<?php

//REGISTROS DE ESTILOS
function register_enqueue_style(){
	$theme_data = wp_get_theme();

	//Registrando estilos

	wp_register_style('bootstrap', get_parent_theme_file_uri('/vendor/bootstrap/css/bootstrap.css'), null, $theme_data->get('Version'), 'screen');
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css', array('bootstrap'), $theme_data->get( 'Version' ), 'screen');
	wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,700', array('fontawesome'), $theme_data->get( 'Version' ), 'screen');
	wp_register_style('portfolio', get_parent_theme_file_uri('/css/portfolio-item.css'), array('googlefonts'), $theme_data->get('Version'), 'screen');

//enqueque estilos
	wp_enqueue_style('portfolio');
}

add_action('wp_enqueue_scripts', 'register_enqueue_style');

//Registrando Scripts
function register_enqueue_scripts(){
	$theme_data = wp_get_theme();

	//Dereguster Scripts
	wp_deregister_script('jquery');
	wp_deregister_script('jquery-migrate');

	//Registrando Scripts

	wp_register_script('jQuery3', get_parent_theme_file_uri('/vendor/jquery/jquery.min.js'), null, '3.2.1', true);
	wp_register_script('bootstrap', get_parent_theme_file_uri('/vendor/bootstrap/js/bootstrap.min.js'), array('jQuery3'), true);

//enqueue Scripts
	
	wp_enqueue_scripts('jQuery3');
	wp_enqueue_scripts('bootstrap');
	wp_enqueue_scripts('bundle');
	
}

add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

?>

