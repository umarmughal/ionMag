<?php
/*
    Our portfolio:  http://themeforest.net/user/tagDiv/portfolio
    Thanks for using our theme !
    tagDiv - 2015
*/

/**
 * Load the speed booster framework + theme specific files
 */

// load the deploy mode
require_once('td_deploy_mode.php');

// load the config
require_once('includes/td_config.php');
add_action('td_global_after', array('td_config', 'on_td_global_after_config'), 9); //we run on 9 priority to allow plugins to updage_key our apis while using the default priority of 10


// load the wp booster
require_once('includes/wp_booster/td_wp_booster_functions.php');


require_once('includes/td_css_generator.php');
//require_once('includes/shortcodes/td_misc_shortcodes.php');
require_once('includes/widgets/td_page_builder_widgets.php'); // widgets





/* ----------------------------------------------------------------------------
 * Woo Commerce
 */

// breadcrumb
add_filter('woocommerce_breadcrumb_defaults', 'td_woocommerce_breadcrumbs');
function td_woocommerce_breadcrumbs() {
	return array(
		'delimiter' => ' <i class="td-icon-right td-bread-sep"></i> ',
		'wrap_before' => '<div class="entry-crumbs" itemprop="breadcrumb">',
		'wrap_after' => '</div>',
		'before' => '',
		'after' => '',
		'home' => _x('Home', 'breadcrumb', 'woocommerce'),
	);
}

// use own pagination
if (!function_exists('woocommerce_pagination')) {
	// pagination
	function woocommerce_pagination() {
		echo td_page_generator::get_pagination();
	}
}

// Override theme default specification for product 3 per row


// Number of product per page 8
add_filter('loop_shop_per_page', create_function('$cols', 'return 4;'));

if (!function_exists('woocommerce_output_related_products')) {
	// Number of related products
	function woocommerce_output_related_products() {
		woocommerce_related_products(array(
			'posts_per_page' => 4,
			'columns' => 4,
			'orderby' => 'rand',
		)); // Display 4 products in rows of 1
	}
}




/* ----------------------------------------------------------------------------
 * bbPress
 */
// change avatar size to 40px
function td_bbp_change_avatar_size($author_avatar, $topic_id, $size) {
	$author_avatar = '';
	if ($size == 14) {
		$size = 40;
	}
	$topic_id = bbp_get_topic_id( $topic_id );
	if ( !empty( $topic_id ) ) {
		if ( !bbp_is_topic_anonymous( $topic_id ) ) {
			$author_avatar = get_avatar( bbp_get_topic_author_id( $topic_id ), $size );
		} else {
			$author_avatar = get_avatar( get_post_meta( $topic_id, '_bbp_anonymous_email', true ), $size );
		}
	}
	return $author_avatar;
}
add_filter('bbp_get_topic_author_avatar', 'td_bbp_change_avatar_size', 20, 3);
add_filter('bbp_get_reply_author_avatar', 'td_bbp_change_avatar_size', 20, 3);
add_filter('bbp_get_current_user_avatar', 'td_bbp_change_avatar_size', 20, 3);



//add_action('shutdown', 'test_td');

function test_td () {
    if (!is_admin()){
        td_api_base::_debug_get_used_on_page_components();
    }
}


/* ----------------------------------------------------------------------------
 * css for wp-admin / backend
 */
add_action('admin_enqueue_scripts', 'load_wp_admin_css2');
function load_wp_admin_css2() {
	wp_enqueue_style('td-wp-admin-td-panel-3', td_global::$get_template_directory_uri . '/wp-admin-theme.css', false, TD_THEME_VERSION, 'all' );
}
