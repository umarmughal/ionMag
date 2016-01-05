<?php
/**
 * Used only on dev! - it is removed from the package by our deploy ;)
 * V2.1
 */

/**
 * STOP!
 * WARNING!!!   This file is also used by the deploy system of the theme and it's not included with the deployed theme
 */

// this array is used by td_deploy to compile all the files
// it is also used by the live compiler
global $td_less_files;
$td_less_files = array (
	'style.css_v2' => array (
		'source' => 'includes/less_files/main.less',
		'destination' => 'style.css'
	),
	'editor-style' => array (
		'source' => 'includes/less_files/editor-style.less',
		'destination' => 'editor-style.css'
	),
	'woocommerce' => array (
		'source' => 'includes/less_files/woocommerce/main.less',
		'destination' => 'style-woocommerce.css'
	)
);



require_once 'includes/wp_booster/external/td_node_less/td_less_compiler.php';

