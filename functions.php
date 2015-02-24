<?php

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
//Soporte para menu
	register_nav_menus(array(
		'menu-top'=>'Menu header',
		));