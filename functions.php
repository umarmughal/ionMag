<?php
/*
	Load the speed booster framework + theme specific files
*/

// load the deploy mode
require_once('td_deploy_mode.php');

// load the config
require_once('includes/td_config.php');
add_action('td_global_after', array('td_config', 'on_td_global_after_config'), 9); //we run on 9 priority to allow plugins to updage_key our apis while using the default priority of 10

// load the wp booster
require_once('includes/wp_booster/td_wp_booster_functions.php');

require_once('includes/td_css_generator.php');
require_once('includes/widgets/td_page_builder_widgets.php'); // widgets