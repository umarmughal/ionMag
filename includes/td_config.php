<?php
/*
 * This is the config file for the theme.
 */

define("TD_THEME_NAME", "Shop");
define("TD_THEME_VERSION", "__td_deploy_version__");
define("TD_THEME_DOC_URL", "http://forum.tagdiv.com/whats-included/");
define("TD_THEME_DEMO_URL", "http://demo.tagdiv.com/" . strtolower(TD_THEME_NAME));
define("TD_THEME_DEMO_DOC_URL", 'http://forum.tagdiv.com/introduction/');  //the url to the demo documentation
define("TD_THEME_VIDEO_TUTORIALS_URL", "https://www.youtube.com/watch?v=8hAwUt8-G34&list=PL6CsDkMaejhrfEuAth6JVYLPmFwFzNFwY");
define("TD_FEATURED_CAT", "Featured"); //featured cat name
define("TD_FEATURED_CAT_SLUG", "featured"); //featured cat slug
define("TD_THEME_OPTIONS_NAME", "td_012"); //where to store our options

define("TD_AURORA_VERSION", "__td_aurora_deploy_version__");

define("TD_THEME_WP_BOOSTER", "3.0"); //prevents multiple instances of the framework

//if no deploy mode is selected, we use the final deploy built
if (!defined('TD_DEPLOY_MODE')) {
    define("TD_DEPLOY_MODE", 'deploy');
}






switch (TD_DEPLOY_MODE) {
    default:
        //deploy version - this is the version that we ship!
        define("TD_DEBUG_LIVE_THEME_STYLE", false);
        define("TD_DEBUG_IOS_REDIRECT", false);
        define("TD_DEBUG_USE_LESS", false);
        break;

    case 'dev':
        //dev version
        define("TD_DEBUG_LIVE_THEME_STYLE", true);
        define("TD_DEBUG_IOS_REDIRECT", true);
        define("TD_DEBUG_USE_LESS", true); //use less on dev
        break;

    case 'demo':
        //demo version
        define("TD_DEBUG_LIVE_THEME_STYLE", true);
        define("TD_DEBUG_IOS_REDIRECT", true); // remove themeforest iframe from ios devices on demo only!
        define("TD_DEBUG_USE_LESS", false);
        break;
}



/**
 * speed booster v 3.0 hooks - prepare the framework for the theme
 * is also used by td_deploy - that's why it's a static class
 * Class td_wp_booster_hooks
 */
class td_wp_booster_config {


    /**
     * setup the global theme specific variables
     * @depends td_global
     */
    static function td_global_after() {



        /**
         * js files list
         */
        td_global::$js_files = array(


	        'td_external' =>            '/includes/wp_booster/js_dev/td_external.js',
            'tdDetect' =>               '/includes/wp_booster/js_dev/tdDetect.js',

	        'td_viewport' =>            '/includes/wp_booster/js_dev/td_viewport.js',

            'td_menu' =>                '/includes/wp_booster/js_dev/td_menu.js',
            //'tdLocalCache' =>         '/includes/wp_booster/js_dev/tdLocalCache.js',
            'tdUtil' =>                 '/includes/wp_booster/js_dev/tdUtil.js',
            'td_affix' =>               '/includes/wp_booster/js_dev/td_affix.js',
            //'td_scroll_animation' =>  '/includes/wp_booster/js_dev/td_scroll_animation.js',
            'td_site' =>                '/includes/wp_booster/js_dev/td_site.js',

            'tdLoadingBox' =>           '/includes/wp_booster/js_dev/tdLoadingBox.js',
            'td_ajax_search' =>         '/includes/wp_booster/js_dev/td_ajax_search.js',
            'td_post_images' =>         '/includes/wp_booster/js_dev/td_post_images.js',
            'tdBlocks' =>               '/includes/wp_booster/js_dev/tdBlocks.js',
            'td_login' =>               '/includes/wp_booster/js_dev/td_login.js',
            'td_style_customizer' =>    '/includes/wp_booster/js_dev/td_style_customizer.js',
            'td_trending_now' =>        '/includes/wp_booster/js_dev/td_trending_now.js',
            'td_history' =>             '/includes/wp_booster/js_dev/td_history.js',
            'td_smart_sidebar' =>       '/includes/wp_booster/js_dev/td_smart_sidebar.js',
            'tdInfiniteLoader' =>       '/includes/wp_booster/js_dev/tdInfiniteLoader.js',
	        'td_smooth_scroll' =>       '/includes/wp_booster/js_dev/td_smooth_scroll.js',
	        'vimeo_froogaloop' =>       '/includes/wp_booster/js_dev/vimeo_froogaloop.js',

	        'td_custom_events' =>       '/includes/js_files/td_custom_events.js',
	        'td_events' =>              '/includes/wp_booster/js_dev/td_events.js',

	        'td_ajax_count' =>          '/includes/wp_booster/js_dev/td_ajax_count.js',
            'td_video_playlist' =>      '/includes/wp_booster/js_dev/td_video_playlist.js',
	        'td_slide' =>               '/includes/wp_booster/js_dev/td_slide.js',
            'td_pulldown' =>            '/includes/wp_booster/js_dev/td_pulldown.js',

            //'td_main' =>              '/includes/js_files/td_main.js',
            'td_fps' =>                 '/includes/js_files/td_fps.js',
	        'td_animation_scroll' =>    '/includes/wp_booster/js_dev/td_animation_scroll.js',
	        'td_backstr' =>             '/includes/wp_booster/js_dev/td_backstr.js',

            //'td_scroll_effects.js' => '/includes/js_files/td_scroll_effects.js',

	        'td_animation_stack' =>     '/includes/wp_booster/js_dev/td_animation_stack.js',
	        'td_main' =>                '/includes/js_files/td_main.js',

            'td_loop_ajax' =>           '/includes/wp_booster/js_dev/tdLoopAjax.js',

	        'tdWeather' =>           '/includes/wp_booster/js_dev/tdWeather.js',
            'td_last_init' =>           '/includes/wp_booster/js_dev/td_last_init.js',
            'tdAnimationSprite' =>      '/includes/wp_booster/js_dev/tdAnimationSprite.js',
        );


	    /**
	     * td_viewport intervals in crescendo order
	     */
	    td_global::$td_viewport_intervals = array(
		    array(
			    "limit_bottom" => 767,
			    "sidebar_width" => 228,
		    ),
		    array(
			    "limit_bottom" => 1018,
			    "sidebar_width" => 300,
		    ),
		    array(
			    "limit_bottom" => 1140,
			    "sidebar_width" => 324,
		    ),
	    );


	    /**
	     * - td animation stack effects used in the 'loading animation image' theme panel section
	     * - the first element is a special case, it representing the default type 'type0' @see animation-stack.less
	     * - the 'val' parameter is the type effect
	     * - the 'specific_selectors' parameter is the css selector used to look for new elements inside of some specific sections [ex. at ajax req]
	     * - the 'general_selectors' parameter is the css selector used to look for elements on extended sections [ex. entire page]
	     * - Important! the 'general_selectors' is not used by the default 'type0'
	     */
	    td_global::$td_animation_stack_effects = array(
		    array(
			    'text' => 'Fade [full]',
			    'val' => '', // empty, as a default value
			    'specific_selectors' => '.entry-thumb, img',
			    'general_selectors' => '.td-animation-stack img, .post img',
		    ),

            array(
                'text' => 'Fade & Scale',
                'val' => 'type1',
                'specific_selectors' => '.entry-thumb, img[class*="wp-image-"], a.td-sml-link-to-image > img',
                'general_selectors' => '.td-animation-stack .entry-thumb, .post .entry-thumb, .post img[class*="wp-image-"], .post a.td-sml-link-to-image > img',
            ),


            array(
                'text' => 'Up fade',
                'val' => 'type2',
                'specific_selectors' => '.entry-thumb, img[class*="wp-image-"], a.td-sml-link-to-image > img',
                'general_selectors' => '.td-animation-stack .entry-thumb, .post .entry-thumb, .post img[class*="wp-image-"], a.td-sml-link-to-image > img',
            ),


        );



        /**
         * single template list
         */
	    td_api_single_template::add('single_template',
		    array(
			    'file' => td_global::$get_template_directory . '/single.php',
			    'text' => 'Single template',
			    'img' => td_global::$get_template_directory_uri . '/images/panel/single_templates/single_template_0.png',
			    'show_featured_image_on_all_pages' => false,
			    'bg_disable_background' => false,          // disable the featured image
			    'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
			    'bg_use_featured_image_as_background' => false   // uses the featured image as a background

		    )
	    );


        /**
         * modules list
         */
        td_api_module::add('td_module_1',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_1.php',
                'text' => 'Module 1',
                'img' => td_global::$get_template_directory_uri . '/images/panel/modules/td_module_1.png',
                'used_on_blocks' => array('td_block_3'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack'
            )
        );

        td_api_module::add('td_module_mx_empty',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_mx_empty.php',
                'text' => 'Module MX Empty',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_1'),
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => false,
                'class' => 'td-animation-stack'
            )
        );

        td_api_module::add('td_module_15',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_15.php',
                'text' => 'Module 15',
                'img' => td_global::$get_template_directory_uri . '/images/panel/modules/td_module_15.png',
                'used_on_blocks' => '',
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td-animation-stack'
            )
        );


        td_api_module::add('td_module_single',
            array(  // this module is for internal use only
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_single.php',
                'text' => 'Single Module',
                'img' => '',
                'used_on_blocks' => '',
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => false,
                'class' => ''
            )
        );



        /**
         * the thumbs used by the  theme
         * Thumb id => array parameters. Wp booster only cuts if the option is set from theme panel
         */

        td_api_thumb::add('td_324x160',
            array(
                'name' => 'td_324x160',
                'width' => 324,
                'height' => 160,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module 1, 2', 'Block 2, 3, 4, Big grid 2'
                )
            )
        );


        /**
         * the headers
         */

        td_api_header_style::add('1',
            array(
                'text' => '<strong>Style 1 - </strong> Default',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-1.php'
            )
        );

        td_api_header_style::add('2',
            array(
                'text' => '<strong>Style 2 - </strong> Top menus',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-2.php'
            )
        );

        td_api_header_style::add('3',
            array(
                'text' => '<strong>Style 3 - </strong> Boxed dark menu',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-3.php'
            )
        );

        td_api_header_style::add('4',
            array(
                'text' => '<strong>Style 4 - </strong> Boxed dark menu with logo',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-4.php'
            )
        );

        td_api_header_style::add('5',
            array(
                'text' => '<strong>Style 5 - </strong> Full dark menu with logo',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-5.php'
            )
        );

        td_api_header_style::add('6',
            array(
                'text' => '<strong>Style 6 - </strong> Full dark menu on right with logo',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-6.php'
            )
        );

        td_api_header_style::add('7',
            array(
                'text' => '<strong>Style 7 - </strong> Hibryd menu on right with logo',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-7.php'
            )
        );

        td_api_header_style::add('8',
            array(
                'text' => '<strong>Style 8 - </strong> Hibryd menu 2',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-8.php'
            )
        );

        td_api_header_style::add('9',
            array(
                'text' => '<strong>Style 9 - </strong> Full logo on top',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-9.php'
            )
        );

        td_api_header_style::add('10',
            array(
                'text' => '<strong>Style 10 - </strong> Full logo on top + center menu',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-10.php'
            )
        );

        td_api_header_style::add('11',
            array(
                'text' => '<strong>Style 11 - </strong> Top menus + bottom full logo',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-11.php'
            )
        );

        td_api_header_style::add('12',
            array(
                'text' => '<strong>Style 12 - </strong> Top colored menu with logo',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-12.php'
            )
        );


        /**
         * the styles for big grids. This styles will show up in the panel @see td_panel_categories.php and on each big grid block
         * This has to be before the blocks are added! The grids blocks are made with this
         */
        td_global::$big_grid_styles_list = array(
            'td-grid-style-1' => array(  // td-grid-style-1 - THIS HAS TO BE THE DEFAULT
                'text' => 'Grid style 1'
            ),
            'td-grid-style-2' => array(
                'text' => 'Grid style 2'
            ),
            'td-grid-style-3' => array(
                'text' => 'Grid style 3'
            ),
            'td-grid-style-4' => array(
                'text' => 'Grid style 4'
            ),
            'td-grid-style-5' => array(
                'text' => 'Grid style 5'
            )
        );



        /**
         * the blocks
         */
        td_api_block::add('td_block_1',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 1',
                "base" => 'td_block_1',
                "class" => 'td_block_1',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_1',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_1.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_2',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 2',
                "base" => 'td_block_2',
                "class" => 'td_block_2',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_2',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_2.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_3',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 3',
                "base" => 'td_block_3',
                "class" => 'td_block_3',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_3',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_3.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_4',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 4',
                "base" => 'td_block_4',
                "class" => 'td_block_4',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_4',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_4.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_5',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 5',
                "base" => 'td_block_5',
                "class" => 'td_block_5',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_5',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_5.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_6',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 6',
                "base" => 'td_block_6',
                "class" => 'td_block_6',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_6',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_6.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_7',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 7',
                "base" => 'td_block_7',
                "class" => 'td_block_7',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_7',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_7.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_8',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 8',
                "base" => 'td_block_8',
                "class" => 'td_block_8',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_8',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_8.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_9',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 9',
                "base" => 'td_block_9',
                "class" => 'td_block_9',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_9',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_9.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_10',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 10',
                "base" => 'td_block_10',
                "class" => 'td_block_10',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_10',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_10.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_11',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 11',
                "base" => 'td_block_11',
                "class" => 'td_block_11',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_11',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_11.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_12',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 12',
                "base" => 'td_block_12',
                "class" => 'td_block_12',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_12',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_12.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_13',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 13',
                "base" => 'td_block_13',
                "class" => 'td_block_13',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_13',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_13.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_14',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 14',
                "base" => 'td_block_14',
                "class" => 'td_block_14',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_14',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_14.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_15',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 15',
                "base" => 'td_block_15',
                "class" => 'td_block_15',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_15',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_15.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_16',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 16',
                "base" => 'td_block_16',
                "class" => 'td_block_16',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_16',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_16.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_17',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 17',
                "base" => 'td_block_17',
                "class" => 'td_block_17',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_17',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_17.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_18',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 18',
                "base" => 'td_block_18',
                "class" => 'td_block_18',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_18',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_18.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_19',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 19',
                "base" => 'td_block_19',
                "class" => 'td_block_19',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_19',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_19.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_20',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 20',
                "base" => 'td_block_20',
                "class" => 'td_block_20',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_20',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_20.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_21',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Block 21',
                "base" => 'td_block_21',
                "class" => 'td_block_21',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_21',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_21.php',
                "params" => array_merge(
                    self::get_map_block_general_array(),
                    self::get_map_filter_array(),
                    self::get_map_block_ajax_filter_array(),
                    self::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_big_grid_1',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Big Grid 1',
                "base" => 'td_block_big_grid_1',
                "class" => 'td_block_big_grid_1',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_big_grid_1',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_big_grid_1.php',
                "params" => self::td_block_big_grid_params(),
            )
        );

        td_api_block::add('td_block_big_grid_2',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Big Grid 2',
                "base" => 'td_block_big_grid_2',
                "class" => 'td_block_big_grid_2',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_big_grid_2',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_big_grid_2.php',
                "params" => self::td_block_big_grid_params(),
            )
        );

        td_api_block::add('td_block_big_grid_3',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Big Grid 3',
                "base" => 'td_block_big_grid_3',
                "class" => 'td_block_big_grid_3',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_big_grid_3',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_big_grid_3.php',
                "params" => self::td_block_big_grid_params(),
            )
        );

        td_api_block::add('td_block_big_grid_4',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Big Grid 4',
                "base" => 'td_block_big_grid_4',
                "class" => 'td_block_big_grid_4',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_big_grid_4',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_big_grid_4.php',
                "params" => self::td_block_big_grid_params(),
            )
        );

        td_api_block::add('td_block_big_grid_5',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Big Grid 5',
                "base" => 'td_block_big_grid_5',
                "class" => 'td_block_big_grid_5',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_big_grid_5',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_big_grid_5.php',
                "params" => self::td_block_big_grid_params(),
            )
        );

        td_api_block::add('td_block_big_grid_6',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Big Grid 6',
                "base" => 'td_block_big_grid_6',
                "class" => 'td_block_big_grid_6',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_big_grid_6',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_big_grid_6.php',
                "params" => self::td_block_big_grid_params(),
            )
        );

        td_api_block::add('td_block_big_grid_7',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Big Grid 7',
                "base" => 'td_block_big_grid_7',
                "class" => 'td_block_big_grid_7',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_big_grid_7',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_big_grid_7.php',
                "params" => self::td_block_big_grid_params(),
            )
        );

        td_api_block::add('td_block_big_grid_8',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Big Grid 8',
                "base" => 'td_block_big_grid_8',
                "class" => 'td_block_big_grid_8',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_big_grid_8',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_big_grid_8.php',
                "params" => self::td_block_big_grid_params(),
            )
        );

	    td_api_block::add('td_block_big_grid_slide',
		    array(
			    'map_in_visual_composer' => true,
			    "name" => 'Big Grid Slide',
			    "base" => 'td_block_big_grid_slide',
			    "class" => 'td_block_big_grid_slide',
			    "controls" => "full",
			    "category" => 'Blocks',
			    'icon' => 'icon-pagebuilder-td_block_big_grid_slide',
			    'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_big_grid_slide.php',
			    "params" => self::td_block_big_grid_slide_params(),
		    )
	    );



        td_api_block::add('td_block_trending_now',
            array(
                'map_in_visual_composer' => true,
                "name" => 'News ticker',
                "base" => 'td_block_trending_now',
                "class" => 'td_block_trending_now',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_trending_now',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_trending_now.php',
                "params" => self::td_block_trending_now_params(),
            )
        );

        td_api_block::add('td_block_video_youtube',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Video Playlist',
                "base" => "td_block_video_youtube",
                "class" => "td_block_video_playlist_youtube",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td-youtube',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_video_youtube.php',
                "params" => array(
                    array(
                        "param_name" => "playlist_title",
                        "type" => "textfield",
                        "value" => "",
                        //"heading" => __("Optional - custom title for this block:", TD_THEME_NAME),
                        "heading" => "Optional - custom title for this block:",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "playlist_yt",
                        "type" => "textfield",
                        "value" => "",
                        //"heading" => __("Optional - custom title for this block:", TD_THEME_NAME),
                        "heading" => "List of youtube id's separated by comma (ex: NRuE38Bl5Mo, 1ZgoluYjuZM, 0K-0vkFfUmY):",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "playlist_auto_play",
                        "type" => "dropdown",
                        "value" => array('OFF' => '0', 'ON' => '1'),
                        //"heading" => __("Select playlist type:", TD_THEME_NAME),
                        "heading" => "Autoplay ON / OFF:",
                        "description" => "Autoplay does not work on mobile devices (android, windows phone, iOS)",
                        "holder" => "div",
                        "class" => ""
                    )
                )
            )
        );

        td_api_block::add('td_block_video_vimeo',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Video Playlist',
                "base" => "td_block_video_vimeo",
                "class" => "td_block_video_playlist_vimeo",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td-vimeo',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_video_vimeo.php',
                "params" => array(
                    array(
                        "param_name" => "playlist_title",
                        "type" => "textfield",
                        "value" => "",
                        //"heading" => __("Optional - custom title for this block:", TD_THEME_NAME),
                        "heading" => "Optional - custom title for this block:",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "playlist_v",
                        "type" => "textfield",
                        "value" => "",
                        //"heading" => __("Optional - custom title for this block:", TD_THEME_NAME),
                        "heading" => "List of vimeo id's separated by comma (ex: 100888579,  84062802, 57863017):",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "playlist_auto_play",
                        "type" => "dropdown",
                        "value" => array('OFF' => '0', 'ON' => '1'),
                        //"heading" => __("Select playlist type:", TD_THEME_NAME),
                        "heading" => "Autoplay ON / OFF:",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    )
                )
            )
        );

        td_api_block::add('td_block_ad_box',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Ad box',
                "base" => 'td_block_ad_box',
                "class" => "",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-ads',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_ad_box.php',
                "params" => array(
                    array(
                        "param_name" => "spot_id",
                        "type" => "dropdown",
                        "value" => array(
                            '-- Select an ad spot --' => '',
                            'sidebar' => 'sidebar',
                            'content_inline' => 'content_inline',
                            'content_top' => 'content_top',
                            'content_bottom' => 'content_bottom',
                            'header' => 'header',
                            'custom_ad_1' => 'custom_ad_1',
                            'custom_ad_2' => 'custom_ad_2',
                            'custom_ad_3' => 'custom_ad_3',
                            'custom_ad_4' => 'custom_ad_4',
                            'custom_ad_5' => 'custom_ad_5'
                        ),
                        "heading" => 'Use adspot :',
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),

                    array(
                        "param_name" => "spot_title",
                        "type" => "textfield",
                        "value" => "",
                        "heading" => 'Ad title:',
                        "description" => "Optional - a title for the Ad, like - Advertisement - if you leave it blank the block will not have a title",
                        "holder" => "div",
                        "class" => ""
                    )
                )
            )
        );

        td_api_block::add('td_block_authors',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Authors box',
                "base" => "td_block_authors",
                "class" => "",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_authors',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_authors.php',
                "params" => array(
                    array(
                        "param_name" => "custom_title",
                        "type" => "textfield",
                        "value" => 'OUR AUTHORS',
                        "heading" => "Block title",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "custom_url",
                        "type" => "textfield",
                        "value" => "",
                        "heading" => 'Block title - custom url',
                        "description" => "Optional - (when the module title is clicked)",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "sort",
                        "type" => "dropdown",
                        "value" => array('- Sort by name -' => '', 'Sort by post count' => 'post_count'),
                        "heading" => 'Sort authors by:',
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "exclude",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Exclude authors id (, separated)",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "include",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Include authors id (, separated) - do not use with exclude",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => 'Title text color',
                        "param_name" => "header_text_color",
                        "value" => '', //Default Red color
                        "description" => 'Optional - Choose a custom title text color for this block'
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => 'Title background color',
                        "param_name" => "header_color",
                        "value" => '', //Default Red color
                        "description" => 'Optional - Choose a custom title background color for this block'
                    )
                )
            )
        );

        td_api_block::add('td_block_homepage_full_1',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Homepage post',
                "base" => 'td_block_homepage_full_1',
                "class" => 'td_block_homepage_full_1',
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_homepage_full_1',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_homepage_full_1.php',
                "params" => self::td_homepage_full_1_params()
            )
        );

        td_api_block::add('td_block_popular_categories',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Popular category',
                "base" => "td_block_popular_categories",
                "class" => "td_block_popular_categories",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-popular_categories',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_popular_categories.php',
                "params" => array(
                    array(
                        "param_name" => "custom_title",
                        "type" => "textfield",
                        "value" => "POPULAR CATEGORIES",
                        "heading" => 'Optional - custom title for this block:',
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "custom_url",
                        "type" => "textfield",
                        "value" => "",
                        "heading" => 'Optional - custom url for this block (when the module title is clicked):',
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => 'Title text color',
                        "param_name" => "header_text_color",
                        "value" => '',
                        "description" => 'Optional - Choose a custom title text color for this block'
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => 'Title background color',
                        "param_name" => "header_color",
                        "value" => '',
                        "description" => 'Optional - Choose a custom title background color for this block'
                    ),
                    array(
                        "param_name" => "limit",
                        "type" => "textfield",
                        "value" => "6",
                        "heading" => 'Limit the number of categories shown:',
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    )
                )
            )
        );

        td_api_block::add('td_block_slide',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Slide',
                "base" => "td_block_slide",
                "class" => "td_block_slide",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-slide',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_slide.php',
                "params" => array_merge(
	                self::td_slide_params(),
	                self::get_map_block_ajax_filter_array()
                )
            )
        );

        td_api_block::add('td_block_text_with_title',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Text with title',
                "base" => "td_block_text_with_title",
                "class" => "",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-title',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_text_with_title.php',
                "params" => array(
                    array(
                        "param_name" => "custom_title",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Block title",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "content",
                        "type" => "textarea_html",
                        "holder" => "div",
                        "class" => "",
                        "heading" => 'Text',
                        "value" => "",
                        "description" => 'Enter your content.'
                    ),

                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => 'Title text color',
                        "param_name" => "header_text_color",
                        "value" => '',
                        "description" => 'Optional - Choose a custom title text color for this block'
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => 'Title background color',
                        "param_name" => "header_color",
                        "value" => '',
                        "description" => 'Optional - Choose a custom title background color for this block'
                    )
                )
            )
        );


	    td_api_block::add('td_block_weather',
		    array(
			    'map_in_visual_composer' => true,
			    "name" => 'Weather',
			    "base" => "td_block_weather",
			    "class" => "",
			    "controls" => "full",
			    "category" => 'Blocks',
			    'icon' => 'icon-pagebuilder-td-weather',
			    'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_weather.php',
			    "params" => array(


				    array(
					    "param_name" => "w_location",
					    "type" => "textfield",
					    "value" => '',
					    "heading" => "Location",
					    "description" => '<a href="http://openweathermap.org/find" target="_blank">Find your location</a> - You can use "city name" or "city name,country code" (ex: London,uk). Note that the widget will autotranslate itself to the language from the theme panel only if a translation is available. <a href="http://bugs.openweathermap.org/projects/api/wiki/Api_2_5_weather" target="_blank">The available languages</a> (section 4.2)',
					    "holder" => "div",
					    "class" => "",
					    'group' => 'Weather'
				    ),


				    array(
					    "param_name" => "w_units",
					    "type" => "dropdown",
					    "value" => array (
						    '- Celsius -' => '',
						    'Fahrenheit' => 'imperial' ,
				        ),
					    "heading" => 'Units:',
					    "holder" => "div",
					    "class" => "",
					    'group' => 'Weather'
				    ),

				    array(
					    "param_name" => "custom_title",
					    "type" => "textfield",
					    "value" => '',
					    "heading" => "Block title",
					    "description" => "",
					    "holder" => "div",
					    "class" => ""
				    ),
				    array(
					    "type" => "colorpicker",
					    "holder" => "div",
					    "class" => "",
					    "heading" => 'Title text color',
					    "param_name" => "header_text_color",
					    "value" => '',
					    "description" => 'Optional - Choose a custom title text color for this block'
				    ),
				    array(
					    "type" => "colorpicker",
					    "holder" => "div",
					    "class" => "",
					    "heading" => 'Title background color',
					    "param_name" => "header_color",
					    "value" => '',
					    "description" => 'Optional - Choose a custom title background color for this block'
				    )

			    )
		    )
	    );


	    td_api_block::add('td_block_related_posts',
            array(
                'map_in_visual_composer' => false,
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_related_posts.php',
            )
        );

        td_api_block::add('td_block_mega_menu',
            array(
                'map_in_visual_composer' => false,
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_mega_menu.php',

                // key added to supply 'show_child_cat' differently for each theme
                'render_atts' => array(
                    'show_child_cat' => 30,
                )
            )
        );



        /**
         * block templates
         */
        td_api_block_template::add('td_block_template_1',
            array (
                'file' => td_global::$get_template_directory . '/includes/block_templates/td_block_template_1.php',
            )
        );



        /**
         * category templates
         */
        td_api_category_template::add('td_category_template_1',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_templates/td_category_template_1.php',
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-1.png',
                'text' => 'Style 1'
            )
        );

        td_api_category_template::add('td_category_template_2',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_templates/td_category_template_2.php',
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-2.png',
                'text' => 'Style 2'
            )
        );

        td_api_category_template::add('td_category_template_3',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_templates/td_category_template_3.php',
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-3.png',
                'text' => 'Style 3'
            )
        );

        td_api_category_template::add('td_category_template_4',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_templates/td_category_template_4.php',
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-4.png',
                'text' => 'Style 4'
            )
        );

        td_api_category_template::add('td_category_template_5',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_templates/td_category_template_5.php',
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-5.png',
                'text' => 'Style 5'
            )
        );

        td_api_category_template::add('td_category_template_6',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_templates/td_category_template_6.php',
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-6.png',
                'text' => 'Style 6'
            )
        );

        td_api_category_template::add('td_category_template_7',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_templates/td_category_template_7.php',
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-7.png',
                'text' => 'Style 7'
            )
        );

        td_api_category_template::add('td_category_template_8',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_templates/td_category_template_8.php',
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-8.png',
                'text' => 'Style 8'
            )
        );





        /**
         * category top posts styles
         */
        td_api_category_top_posts_style::add('td_category_top_posts_style_1',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_1.php',
                'posts_shown_in_the_loop' => 5,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-1.png',
                'text' => 'Grid 1',
                'td_block_name' => 'td_block_big_grid_1'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_2',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_2.php',
                'posts_shown_in_the_loop' => 4,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-2.png',
                'text' => 'Grid 2',
                'td_block_name' => 'td_block_big_grid_2'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_3',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_3.php',
                'posts_shown_in_the_loop' => 4,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-3.png',
                'text' => 'Grid 3',
                'td_block_name' => 'td_block_big_grid_3'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_4',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_4.php',
                'posts_shown_in_the_loop' => 2,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-4.png',
                'text' => 'Grid 4',
                'td_block_name' => 'td_block_big_grid_4'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_5',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_5.php',
                'posts_shown_in_the_loop' => 3,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-5.png',
                'text' => 'Grid 5',
                'td_block_name' => 'td_block_big_grid_5'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_6',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_6.php',
                'posts_shown_in_the_loop' => 7,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-6.png',
                'text' => 'Grid 6',
                'td_block_name' => 'td_block_big_grid_6'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_7',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_7.php',
                'posts_shown_in_the_loop' => 7,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-7.png',
                'text' => 'Grid 7',
                'td_block_name' => 'td_block_big_grid_7'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_8',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_8.php',
                'posts_shown_in_the_loop' => 7,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-8.png',
                'text' => 'Grid 8',
                'td_block_name' => 'td_block_big_grid_8'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_disable',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_disable.php',
                'posts_shown_in_the_loop' => 0,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-disable.png',
                'text' => 'Disable',
                'td_block_name' => ''
            )
        );



        /**
         * the td_api_top_bar_template
         */
        td_api_top_bar_template::add('td_top_bar_template_1',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/top_bar_templates/icon-top-bar-1.png',
                'file' => td_global::$get_template_directory . '/parts/header/td_top_bar_template_1.php'
            )
        );

        td_api_top_bar_template::add('td_top_bar_template_2',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/top_bar_templates/icon-top-bar-2.png',
                'file' => td_global::$get_template_directory . '/parts/header/td_top_bar_template_2.php'
            )
        );

        td_api_top_bar_template::add('td_top_bar_template_3',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/top_bar_templates/icon-top-bar-3.png',
                'file' => td_global::$get_template_directory . '/parts/header/td_top_bar_template_3.php'
            )
        );

        td_api_top_bar_template::add('td_top_bar_template_4',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/top_bar_templates/icon-top-bar-4.png',
                'file' => td_global::$get_template_directory . '/parts/header/td_top_bar_template_4.php'
            )
        );




        /**
         * the td_api_footer
         */
        td_api_footer_template::add('td_footer_template_1',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-1.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_1.php',
                'text' => 'Style 1'

            )
        );

        td_api_footer_template::add('td_footer_template_2',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-2.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_2.php',
                'text' => 'Style 2'

            )
        );

        td_api_footer_template::add('td_footer_template_3',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-3.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_3.php',
                'text' => 'Style 3'

            )
        );

        td_api_footer_template::add('td_footer_template_4',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-4.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_4.php',
                'text' => 'Style 4'

            )
        );

        td_api_footer_template::add('td_footer_template_5',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-5.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_5.php',
                'text' => 'Style 5'

            )
        );

        td_api_footer_template::add('td_footer_template_6',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-6.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_6.php',
                'text' => 'Style 6'

            )
        );


        td_api_footer_template::add('td_footer_template_7',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-7.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_7.php',
                'text' => 'Style 7'

            )
        );

        td_api_footer_template::add('td_footer_template_8',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-8.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_8.php',
                'text' => 'Style 8'

            )
        );

        td_api_footer_template::add('td_footer_template_9',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-9.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_9.php',
                'text' => 'Style 9'

            )
        );

        td_api_footer_template::add('td_footer_template_10',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-10.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_10.php',
                'text' => 'Style 10'

            )
        );

        td_api_footer_template::add('td_footer_template_11',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-11.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_11.php',
                'text' => 'Style 11'

            )
        );

        td_api_footer_template::add('td_footer_template_12',
            array(
                'img' => td_global::$get_template_directory_uri . '/images/panel/footer_templates/icon-footer-12.png',
                'file' => td_global::$get_template_directory . '/parts/footer/td_footer_template_12.php',
                'text' => 'Style 12'
            )
        );


        /**
         * set the custom css fields for the panel @see td_panel_custom_css.php
         * and also for the wp_footer hook @see td_bottom_code()
         */
        td_global::$theme_panel_custom_css_fields_list = array(
            'tds_responsive_css_desktop' => array(
                'text' => 'DESKTOP',
                'description' => '1141px +',
                'media_query' => '@media (min-width: 1141px)',
                'img' => td_global::$get_template_directory_uri . '/includes/wp_booster/wp-admin/images/panel/resp-desktop.png'
            ),
            'tds_responsive_css_ipad_landscape' => array(
                'text' => 'IPAD LANDSCAPE',
                'description' => '1019px - 1140px',
                'media_query' => '@media (min-width: 1019px) and (max-width: 1140px)',
                'img' => td_global::$get_template_directory_uri . '/includes/wp_booster/wp-admin/images/panel/resp-ipado.png'
            ),
            'tds_responsive_css_ipad_portrait' => array(
                'text' => 'IPAD PORTRAIT',
                'description' => '768px - 1018px',
                'media_query' => '@media (min-width: 768px) and (max-width: 1018px)',
                'img' => td_global::$get_template_directory_uri . '/includes/wp_booster/wp-admin/images/panel/resp-ipadv.png'
            ),
            'tds_responsive_css_phone' => array(
                'text' => 'PHONES',
                'description' => '0 - 767px',
                'media_query' => '@media (max-width: 767px)',
                'img' => td_global::$get_template_directory_uri . '/includes/wp_booster/wp-admin/images/panel/resp-phone.png'
            )
        );


	    /**
         * The typography settings for the panel and css compiler
         */
        td_global::$typography_settings_list = array (
            'Header' => array (
                'top_menu' => array(
	                'text' => 'Top Menu',
	                'type' => 'default',
                ),
                'top_sub_menu' => array(
	                'text' => 'Top Sub-Menu',
	                'type' => 'default',
                ),
                'main_menu' => array(
	                'text' => 'Main Menu',
	                'type' => 'default',
                ),
                'main_sub_menu' => array(
	                'text' => 'Main Sub-Menu',
	                'type' => 'default',
                ),
                'mega_menu' => array(
	                'text' => 'Mega Menu',
	                'type' => 'default',
                ),
                'mega_menu_categ' => array(
	                'text' => 'Mega Menu Sub-Categories',
	                'type' => 'default',
                ),
                'mobile_menu' => array(
	                'text' => 'Mobile Menu',
	                'type' => 'default',
                ),
                'mobile_sub_menu' => array(
	                'text' => 'Mobile Sub-Menu',
	                'type' => 'default',
                )
            ),
            'Modules and Blocks General' => array (
                'blocks_title' => array(
	                'text' => 'Blocks/Widgets Title',
	                'type' => 'default',
                ),
                'blocks_author' => array(
	                'text' => 'Author',
	                'type' => 'default',
                ),
                'blocks_date' => array(
	                'text' => 'Date',
	                'type' => 'default',
                ),
                'blocks_comment' =>  array(
	                'text' => 'Comment',
	                'type' => 'default',
                ),
                'blocks_category' =>  array(
	                'text' => 'Category tag',
	                'type' => 'default',
                ),
                'blocks_filter' =>  array(
	                'text' => 'Filter dropdown',
	                'type' => 'default',
                ),
                'blocks_excerpt' =>  array(
	                'text' => 'Excerpt',
	                'type' => 'default',
                ),
            ),
            'Modules and Blocks - Article Title' => array (
	            'modules_general' => array(
		            'text' => 'General font',
		            'type' => 'general_setting',
	            ),
                'module_1' =>  array(
	                'text' => 'Module 1',
	                'type' => 'default',
                ),
                'module_2' =>  array(
	                'text' => 'Module 2',
	                'type' => 'default',
                ),
                'module_3' =>  array(
	                'text' => 'Module 3',
	                'type' => 'default',
                ),
                'module_4' =>  array(
	                'text' => 'Module 4',
	                'type' => 'default',
                ),
                'module_5' =>  array(
	                'text' => 'Module 5',
	                'type' => 'default',
                ),
                'module_6' =>  array(
	                'text' => 'Module 6',
	                'type' => 'default',
                ),
                'module_7' =>  array(
	                'text' => 'Module 7',
	                'type' => 'default',
                ),
                'module_8' =>  array(
	                'text' => 'Module 8',
	                'type' => 'default',
                ),
                'module_9' =>  array(
	                'text' => 'Module 9',
	                'type' => 'default',
                ),
                'module_10' =>  array(
	                'text' => 'Module 10',
	                'type' => 'default',
                ),
                'module_11' =>  array(
	                'text' => 'Module 11',
	                'type' => 'default',
                ),
                'module_12' =>  array(
	                'text' => 'Module 12',
	                'type' => 'default',
                ),
                'module_13' =>  array(
	                'text' => 'Module 13',
	                'type' => 'default',
                ),
                'module_14' =>  array(
	                'text' => 'Module 14',
	                'type' => 'default',
                ),
                'module_15' =>  array(
	                'text' => 'Module 15',
	                'type' => 'default',
                ),
                'module_16' =>  array(
	                'text' => 'Module 16',
	                'type' => 'default',
                ),
            ),
            'Modules MX and Other Blocks - Article Title' => array (
	            'other_modules_general' => array(
		            'text' => 'General font',
		            'type' => 'general_setting',
	            ),
                'module_mx1' =>  array(
	                'text' => 'Module MX1',
	                'type' => 'default',
                ),
                'module_mx2' =>  array(
	                'text' => 'Module MX2',
	                'type' => 'default',
                ),
	            'module_mx3' =>  array(
	                'text' => 'Module MX3',
	                'type' => 'default',
                ),
                'module_mx4' =>  array(
	                'text' => 'Module MX4',
	                'type' => 'default',
                ),
                'module_mx7' =>  array(
	                'text' => 'Module MX7',
	                'type' => 'default',
                ),
                'module_mx8' =>  array(
	                'text' => 'Module MX8',
	                'type' => 'default',
                ),
                'news_ticker' =>  array(
	                'text' => 'News Ticker',
	                'type' => 'default',
                ),
                'slider_1columns' =>  array(
	                'text' => 'Slider on 1 column',
	                'type' => 'default',
                ),
                'slider_2columns' =>  array(
	                'text' => 'Slider on 2 columns',
	                'type' => 'default',
                ),
                'slider_3columns' =>  array(
	                'text' => 'Slider on 3 columns',
	                'type' => 'default',
                ),
                'big_grid_tiny' =>  array(
	                'text' => 'Big grid - Tiny img',
	                'type' => 'default',
                ),
                'big_grid_small' =>  array(
	                'text' => 'Big grid - Small img',
	                'type' => 'default',
                ),
                'big_grid_medium' =>  array(
	                'text' => 'Big grid - Medium img',
	                'type' => 'default',
                ),
                'big_grid_big' =>  array(
	                'text' => 'Big grid - Big img',
	                'type' => 'default',
                ),
                'homepage_post' =>  array(
	                'text' => 'Homepage post',
	                'type' => 'default',
                ),
            ),
            'Post title' => array (
	            'post_general' => array(
		            'text' => 'General font',
		            'type' => 'general_setting',
	            ),
	            'post_title' =>  array(
	                'text' => 'Default template',
	                'type' => 'default',
                ),
                'post_title_style1' =>  array(
	                'text' => 'Style 1 template',
	                'type' => 'default',
                ),
                'post_title_style2' =>  array(
	                'text' => 'Style 2 template',
	                'type' => 'default',
                ),
                'post_title_style3' =>  array(
	                'text' => 'Style 3 template',
	                'type' => 'default',
                ),
                'post_title_style4' =>  array(
	                'text' => 'Style 4 template',
	                'type' => 'default',
                ),
                'post_title_style5' =>  array(
	                'text' => 'Style 5 template',
	                'type' => 'default',
                ),
                'post_title_style6' =>  array(
	                'text' => 'Style 6 template',
	                'type' => 'default',
                ),
                'post_title_style7' =>  array(
	                'text' => 'Style 7 template',
	                'type' => 'default',
                ),
                'post_title_style8' => array(
	                'text' => 'Style 8 template',
	                'type' => 'default',
                ),
                'post_title_style9' =>  array(
	                'text' => 'Style 9 template',
	                'type' => 'default',
                ),
                'post_title_style10' =>  array(
	                'text' => 'Style 10 template',
	                'type' => 'default',
                ),
                'post_title_style11' =>  array(
	                'text' => 'Style 11 template',
	                'type' => 'default',
                ),
                'post_title_style12' =>  array(
                    'text' => 'Style 12 template',
                    'type' => 'default',
                ),
                'post_title_style13' =>  array(
                    'text' => 'Style 13 template',
                    'type' => 'default',
                ),
            ),
            'Post content' => array (
	            'post_content' =>  array(
	                'text' => 'Post Content',
	                'type' => 'default',
                ),
                'post_blockquote' =>  array(
	                'text' => 'Default Blockquote',
	                'type' => 'default',
                ),
                'post_box_quote' =>  array(
	                'text' => 'Box Quote',
	                'type' => 'default',
                ),
                'post_pull_quote' =>  array(
	                'text' => 'Pull Quote',
	                'type' => 'default',
                ),
	            'post_lists' =>  array(
		            'text' => 'Lists',
		            'type' => 'default',
	            ),
                'post_h1' =>  array(
	                'text' => 'H1',
	                'type' => 'default',
                ),
                'post_h2' =>  array(
	                'text' => 'H2',
	                'type' => 'default',
                ),
                'post_h3' =>  array(
	                'text' => 'H3',
	                'type' => 'default',
                ),
                'post_h4' =>  array(
	                'text' => 'H4',
	                'type' => 'default',
                ),
                'post_h5' =>  array(
	                'text' => 'H5',
	                'type' => 'default',
                ),
                'post_h6' =>  array(
	                'text' => 'H6',
	                'type' => 'default',
                ),
            ),
            'Post elements' => array (
	            'post_category' =>  array(
	                'text' => 'Category tag',
	                'type' => 'default',
                ),
                'post_author' =>  array(
	                'text' => 'Author',
	                'type' => 'default',
                ),
                'post_date' =>  array(
	                'text' => 'Date',
	                'type' => 'default',
                ),
                'post_comment' =>  array(
	                'text' => 'Views and Comments',
	                'type' => 'default',
                ),
                'via_source_tag' =>  array(
	                'text' => 'Via/Source/Tags',
	                'type' => 'default',
                ),
                'post_next_prev_text' =>  array(
	                'text' => 'Next/Prev Text',
	                'type' => 'default',
                ),
                'post_next_prev' =>  array(
	                'text' => 'Next/Prev Post Title',
	                'type' => 'default',
                ),
                'box_author_name' =>  array(
	                'text' => 'Box Author Name',
	                'type' => 'default',
                ),
                'box_author_url' =>  array(
	                'text' => 'Box Author URL',
	                'type' => 'default',
                ),
                'box_author_description' =>  array(
	                'text' => 'Box Author Description',
	                'type' => 'default',
                ),
                'post_related' =>  array(
	                'text' => 'Related Article Title',
	                'type' => 'default',
                ),
                'post_share' =>  array(
	                'text' => 'Share Text',
	                'type' => 'default',
                ),
                'post_image_caption' =>  array(
	                'text' => 'Image caption',
	                'type' => 'default',
                ),
                'post_subtitle_small' =>  array(
	                'text' => 'Subtitle post style Default, 1, 4, 5, 9, 10, 11',
	                'type' => 'default',
                ),
                'post_subtitle_large' =>  array(
	                'text' => 'Subtitle post style 2, 3, 6, 7, 8',
	                'type' => 'default',
                ),
            ),
            'Pages' => array (
	            'page_title' =>  array(
	                'text' => 'Page title',
	                'type' => 'default',
                ),
                'page_content' =>  array(
	                'text' => 'Page content',
	                'type' => 'default',
                ),
                'page_h1' =>  array(
	                'text' => 'H1',
	                'type' => 'default',
                ),
                'page_h2' =>  array(
	                'text' => 'H2',
	                'type' => 'default',
                ),
                'page_h3' =>  array(
	                'text' => 'H3',
	                'type' => 'default',
                ),
                'page_h4' =>  array(
	                'text' => 'H4',
	                'type' => 'default',
                ),
                'page_h5' =>  array(
	                'text' => 'H5',
	                'type' => 'default',
                ),
                'page_h6' =>  array(
	                'text' => 'H6',
	                'type' => 'default',
                ),
            ),
            'Footer' => array (
	            'footer_text_about' =>  array(
	                'text' => 'Text under logo',
	                'type' => 'default',
                ),
                'footer_copyright_text' =>  array(
	                'text' => 'Copyright text',
	                'type' => 'default',
                ),
                'footer_menu_text' =>  array(
	                'text' => 'Footer menu',
	                'type' => 'default',
                ),
            ),
            'Other' => array (
	            'breadcrumb' =>  array(
	                'text' => 'Breadcrumb',
	                'type' => 'default',
                ),
                'category_tag' =>  array(
	                'text' => 'Sub-Category tags from Category pages',
	                'type' => 'default',
                ),
                'news_ticker_title' =>  array(
	                'text' => 'News Ticker title',
	                'type' => 'default',
                ),
                'pagination' =>  array(
	                'text' => 'Pagination',
	                'type' => 'default',
                ),
                'dropcap' =>  array(
	                'text' => 'Dropcap',
	                'type' => 'default',
                ),
                'default_widgets' =>  array(
	                'text' => 'Default Widgets',
	                'type' => 'default',
                ),
                'default_buttons' =>  array(
	                'text' => 'Default Buttons',
	                'type' => 'default',
                ),
                'woocommerce_products' =>  array(
	                'text' => 'Woocommerce products titles',
	                'type' => 'default',
                ),
                'woocommerce_product_title' =>  array(
	                'text' => 'Woocommerce product title on product page',
	                'type' => 'default',
                ),
            ),
            'Body' => array (
	            'body_text' =>  array(
	                'text' => 'Body - General font',
	                'type' => 'default',
                ),
            ),
            'bbPress - Forum' => array (
	            'bbpress_header' =>  array(
	                'text' => 'Header',
	                'type' => 'default',
                ),
                'bbpress_titles' =>  array(
	                'text' => 'Forums and Topics Titles',
	                'type' => 'default',
                ),
                'bbpress_subcategories' =>  array(
	                'text' => 'Subcategories Titles',
	                'type' => 'default',
                ),
                'bbpress_description' =>  array(
	                'text' => 'Categories Description',
	                'type' => 'default',
                ),
                'bbpress_author' =>  array(
	                'text' => 'Author name',
	                'type' => 'default',
                ),
                'bbpress_replies' =>  array(
	                'text' => 'Replies content',
	                'type' => 'default',
                ),
                'bbpress_notices' =>  array(
	                'text' => 'Notices/Messages',
	                'type' => 'default',
                ),
                'bbpress_pagination' =>  array(
	                'text' => 'Pagination text',
	                'type' => 'default',
                ),
                'bbpress_topic' =>  array(
	                'text' => 'Topic details',
	                'type' => 'default',
                ),
            ),
        ); // end td_global::$typography_settings_list



        /**
         * the default fonts used by the theme. For a list of fonts ids @see td_fonts::$font_names_google_list
         */
        td_global::$default_google_fonts_list = array (
            '438' => array(
                'css_style_id' => 'google_font_open_sans',
                'url' => td_global::$http_or_https . '://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,700'
            ),
            '521' => array(
                'css_style_id' => 'google_font_roboto',
                'url' => td_global::$http_or_https . '://fonts.googleapis.com/css?family=Roboto:500,400italic,700,500italic,400,300'
            ),
        );




	    /**
	     * the stacks are stored in /includes/stacks
	     * stack_filename (without .txt) => stack_name
	     * @var array
	     */
	    td_global::$demo_list = array (
		    'default' => array(
			    'text' => 'Default demo',
			    'folder' => td_global::$get_template_directory . '/includes/demos/default/',
			    'img' => td_global::$get_template_directory_uri . '/includes/demos/default/screenshot.png',
			    'demo_url' => 'http://demo.tagdiv.com/newspaper/',
			    'td_css_generator_demo' => false
		    ),
            'politics' => array(
                'text' => 'Politics demo - <span style=\'color: #4db2ec;\'>NEW</span>',
                'folder' => td_global::$get_template_directory . '/includes/demos/politics/',
                'img' => td_global::$get_template_directory_uri . '/includes/demos/politics/screenshot.png',
                'demo_url' => 'http://demo.tagdiv.com/newspaper_politics/',
                'td_css_generator_demo' => true
            ),
            'magazine' => array(
                'text' => 'Magazine demo - <span style=\'color: #4db2ec;\'>NEW</span>',
                'folder' => td_global::$get_template_directory . '/includes/demos/magazine/',
                'img' => td_global::$get_template_directory_uri . '/includes/demos/magazine/screenshot.png',
                'demo_url' => 'http://demo.tagdiv.com/newspaper_magazine/',
                'td_css_generator_demo' => true
            ),
            'college' => array(
                'text' => 'College demo - <span style=\'color: #4db2ec;\'>NEW</span>',
                'folder' => td_global::$get_template_directory . '/includes/demos/college/',
                'img' => td_global::$get_template_directory_uri . '/includes/demos/college/screenshot.png',
                'demo_url' => 'http://demo.tagdiv.com/newspaper_college/',
                'td_css_generator_demo' => false
            ),
            'local_news' => array(
                'text' => 'Local News demo - <span style=\'color: #4db2ec;\'>NEW</span>',
                'folder' => td_global::$get_template_directory . '/includes/demos/local_news/',
                'img' => td_global::$get_template_directory_uri . '/includes/demos/local_news/screenshot.png',
                'demo_url' => 'http://demo.tagdiv.com/newspaper_local_news/',
                'td_css_generator_demo' => true
            ),
            'cafe' => array(
                'text' => 'Cafe demo - <span style=\'color: #4db2ec;\'>NEW</span>',
                'folder' => td_global::$get_template_directory . '/includes/demos/cafe/',
                'img' => td_global::$get_template_directory_uri . '/includes/demos/cafe/screenshot.png',
                'demo_url' => 'http://demo.tagdiv.com/newspaper_cafe/',
                'td_css_generator_demo' => true
            ),
            'cars' => array(
                'text' => 'Cars demo - <span style=\'color: #4db2ec;\'>NEW</span>',
                'folder' => td_global::$get_template_directory . '/includes/demos/cars/',
                'img' => td_global::$get_template_directory_uri . '/includes/demos/cars/screenshot.png',
                'demo_url' => 'http://demo.tagdiv.com/newspaper_cars/',
                'td_css_generator_demo' => true
            ),
		    'travel' => array(
			    'text' => 'Travel demo - <span style=\'color: #4db2ec;\'>NEW</span>',
			    'folder' => td_global::$get_template_directory . '/includes/demos/travel/',
			    'img' => td_global::$get_template_directory_uri . '/includes/demos/travel/screenshot.png',
			    'demo_url' => 'http://demo.tagdiv.com/newspaper_travel/',
			    'td_css_generator_demo' => true
		    ),
		    'health' => array(
			    'text' => 'Health & Fitness demo - <span style=\'color: #4db2ec;\'>NEW</span>',
			    'folder' => td_global::$get_template_directory . '/includes/demos/health/',
			    'img' => td_global::$get_template_directory_uri . '/includes/demos/health/screenshot.png',
			    'demo_url' => 'http://demo.tagdiv.com/newspaper_health/',
			    'td_css_generator_demo' => true
		    ),
		    'tech' => array(
			    'text' => 'Tech demo',
			    'folder' => td_global::$get_template_directory . '/includes/demos/tech/',
			    'img' => td_global::$get_template_directory_uri . '/includes/demos/tech/screenshot.png',
			    'demo_url' => 'http://demo.tagdiv.com/newspaper_tech/',
			    'td_css_generator_demo' => false
		    ),
		    'sport' => array(
			    'text' => 'Sport demo',
			    'folder' => td_global::$get_template_directory . '/includes/demos/sport/',
			    'img' => td_global::$get_template_directory_uri . '/includes/demos/sport/screenshot.png',
			    'demo_url' => 'http://demo.tagdiv.com/newspaper_sport/',
			    'td_css_generator_demo' => false
		    ),
		    'fashion' => array(
			    'text' => 'Fashion demo',
			    'folder' => td_global::$get_template_directory . '/includes/demos/fashion/',
			    'img' => td_global::$get_template_directory_uri . '/includes/demos/fashion/screenshot.png',
			    'demo_url' => 'http://demo.tagdiv.com/newspaper_fashion/',
			    'td_css_generator_demo' => false
		    ),
		    'video' => array(
			    'text' => 'Video demo',
			    'folder' => td_global::$get_template_directory . '/includes/demos/video/',
			    'img' => td_global::$get_template_directory_uri . '/includes/demos/video/screenshot.png',
			    'demo_url' => 'http://demo.tagdiv.com/newspaper_video/',
			    'td_css_generator_demo' => false
		    ),
		    'blog' => array(
			    'text' => 'Classic Blog demo',
			    'folder' => td_global::$get_template_directory . '/includes/demos/blog/',
			    'img' => td_global::$get_template_directory_uri . '/includes/demos/blog/screenshot.png',
			    'demo_url' => 'http://demo.tagdiv.com/newspaper_classic_blog/',
			    'td_css_generator_demo' => false
		    )
	    );






        if (is_admin()) {


            /**
             * generate the theme panel
             */

            td_global::$all_theme_panels_list =  array (
                'theme_panel' => array (
                    'title' => TD_THEME_NAME . ' - Theme panel',
                    'subtitle' => 'version: ' . TD_THEME_VERSION,
                    'panels' => array (
                        'td-panel-header' => array(
                            'text' => 'HEADER',
                            'ico_class' => 'td-ico-header',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_header.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-footer' => array(
                            'text' => 'FOOTER',
                            'ico_class' => 'td-ico-footer',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_footer.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-ads' => array(
                            'text' => 'ADS',
                            'ico_class' => 'td-ico-ads',
                            'file' => td_global::$get_template_directory . '/includes/panel/views/td_panel_ads.php',
                            'type' => 'in_theme'
                        ),

                        /*  ----------------------------------------------------------------------------
                            layout settings
                         */
                        'td-panel-separator-1' => array(   // LAYOUT SETTINGS Separator
                            'text' => 'LAYOUT SETTINGS',
                            'type' => 'separator'
                        ),
                        'td-panel-template-settings' => array(
                            'text' => 'TEMPLATE SETTINGS',
                            'ico_class' => 'td-ico-template',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_template_settings.php',
                            'type' => 'in_theme'
                        ),

                        'td-panel-categories' => array(
                            'text' => 'CATEGORIES',
                            'ico_class' => 'td-ico-categories',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_categories.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-post-settings' => array(
                            'text' => 'POST SETTINGS',
                            'ico_class' => 'td-ico-post',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_post_settings.php',
                            'type' => 'in_theme'
                        ),


                        /*  ----------------------------------------------------------------------------
                            misc
                         */
                        'td-panel-separator-2' => array( // MISC Separator
                            'text' => 'MISC',
                            'type' => 'separator'
                        ),
                        'td-panel-block-style' => array(
                            'text' => 'BLOCK SETTINGS',
                            'ico_class' => 'td-ico-block',
                            'file' => td_global::$get_template_directory . '/includes/panel/views/td_panel_block_settings.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-background' => array(
                            'text' => 'BACKGROUND',
                            'ico_class' => 'td-ico-background',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_background.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-excerpts' => array(
                            'text' => 'EXCERPTS',
                            'ico_class' => 'td-ico-excerpts',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_excerpts.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-translates' => array(
                            'text' => 'TRANSLATIONS',
                            'ico_class' => 'td-ico-translation',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_translations.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-theme-colors' => array(
                            'text' => 'THEME COLORS',
                            'ico_class' => 'td-ico-color',
                            'file' => td_global::$get_template_directory . '/includes/panel/views/td_panel_theme_colors.php',
                            'type' => 'in_theme'
                        ),

                        'td-panel-theme-fonts' => array(
                            'text' => 'THEME FONTS',
                            'ico_class' => 'td-ico-typography',
                            'file' => td_global::$get_template_directory . '/includes/panel/views/td_panel_theme_fonts.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-custom-css' => array(
                            'text' => 'CUSTOM CSS',
                            'ico_class' => 'td-ico-css',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_custom_css.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-custom-javascript' => array(
                            'text' => 'CUSTOM JAVASCRIPT',
                            'ico_class' => 'td-ico-js',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_custom_javascript.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-analytics' => array(
                            'text' => 'ANALYTICS',
                            'ico_class' => 'td-ico-analytics',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_analytics.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-social-networks' => array(
                            'text' => 'SOCIAL NETWORKS',
                            'ico_class' => 'td-ico-social',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_social_networks.php',
                            'type' => 'in_theme'
                        ),
                        'td-panel-cpt-taxonomy' => array(
                            'text' => 'CPT &amp; TAXONOMY',
                            'ico_class' => 'td-ico-cpt',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_cpt_taxonomy.php',
                            'type' => 'in_theme'
                        ),
                        'td-link-1' => array( // MISC Separator
                            'text' => 'Import / export',
                            'url' => '?page=td_theme_panel&td_page=td_view_import_export_settings',
                            'type' => 'link'
                        )
                    )
                )
            );



	        /*
	         * the list with custom texts of the theme
	         */
            td_global::$td_wp_admin_text_list = array(

	            // the text for wp-admin -> new post -> featured video box. Usually is the text that tells what post templates support video
	            'text_featured_video' => '
	                <div class="td-wpa-info">Paste a link from Vimeo or Youtube, it will be embedded in the post and the thumb used as the featured image of this post. <br/>You need to choose <strong>Video Format</strong> from above to use Featured Video.</div>
	                <div class="td-wpa-info"><strong>Notice:</strong> Use only with those post templates:
	                    <ul>
	                        <li>Post style default</li>
	                        <li>Post style 1</li>
	                        <li>Post style 2</li>
	                        <li>Post style 9</li>
	                        <li>Post style 10</li>
	                        <li>Post style 11</li>
	                    </ul>
	                </div>',

	            // admin panel - header
		        'text_header_logo' => 'Text logo for header Style 9, Style 10 and Style 11:',

		        'text_header_logo_description' => 'The text logo is used only by Style 9, Style 10 and Style 11 - full menu + text logo. The other header styles use only images for logos',

		        'text_header_logo_mobile' => 'Style 4, Style 5, Style 6, Style 7, Style 8 or Style 12',

		        'text_header_logo_mobile_image' => '140 x 48px',

		        'text_header_logo_mobile_image_retina' => '280 x 96px',

                // what widgets do not work on the smart sidebar
                'text_smart_sidebar_widget_support' => '
                <ul>
                    <li>[tagDiv] Trending now</li>
                </ul>
                '
	        );

            /**
             * the tiny mce image style list
             */
            td_global::$tiny_mce_image_style_list = array(
//                'td_zoom_in_image_effect' => array(
//                    'text' => 'Zoom in image effect',
//                    'class' => 'td-scroll-e-image-zoom-in'
//                ),
//                'td_zoom_out_image_effect' => array(
//                    'text' => 'Zoom out image effect',
//                    'class' => 'td-scroll-e-image-zoom-out'
//                ),
//                'td_fixed_image_effect' => array(
//                    'text' => 'Fixed image effect',
//                    'class' => 'td-scroll-e-image-fixed'
//                )
            );



            /**
             * the tiny mce styles
             */

	        td_api_tinymce_formats::add('td_tinymce_item_1',
		        array(
			        'title' => 'Text padding'
		        ));

		        td_api_tinymce_formats::add('td_tinymce_item_1_1',
			        array(
				        'parent_id' => 'td_tinymce_item_1',
				        'title' => 'text ⇠',
				        'block' => 'div',
				        'classes' => 'td-paragraph-padding-0',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_tinymce_item_1_2',
			        array(
				        'parent_id' => 'td_tinymce_item_1',
				        'title' => '⇢ text',
				        'block' => 'div',
				        'classes' => 'td-paragraph-padding-4',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_tinymce_item_1_3',
			        array(
				        'parent_id' => 'td_tinymce_item_1',
				        'title' => '⇢ text ⇠',
				        'block' => 'div',
				        'classes' => 'td-paragraph-padding-1',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_tinymce_item_1_4',
			        array(
				        'parent_id' => 'td_tinymce_item_1',
				        'title' => '⇢ text ⇠⇠',
				        'block' => 'div',
				        'classes' => 'td-paragraph-padding-3',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_tinymce_item_1_5',
			        array(
				        'parent_id' => 'td_tinymce_item_1',
				        'title' => '⇢⇢ text ⇠',
				        'block' => 'div',
				        'classes' => 'td-paragraph-padding-6',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_tinymce_item_1_6',
			        array(
				        'parent_id' => 'td_tinymce_item_1',
				        'title' => '⇢⇢ text ⇠⇠',
				        'block' => 'div',
				        'classes' => 'td-paragraph-padding-2',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_tinymce_item_1_7',
			        array(
				        'parent_id' => 'td_tinymce_item_1',
				        'title' => '⇢⇢⇢ text ⇠⇠⇠',
				        'block' => 'div',
				        'classes' => 'td-paragraph-padding-5',
				        'wrapper' => true,
		            ));


	        td_api_tinymce_formats::add('td_tinymce_item_2',
		        array(
			        'title' => 'Text scroll effects'
		        ));

		        td_api_tinymce_formats::add('td_tinymce_item_2_1',
			        array(
				        'parent_id' => 'td_tinymce_item_2',
				        'title' => 'Fade in gray background',
				        'selector' => 'p, h3, blockquote',
				        'classes' => 'td-scroll-e-text-1 td-scroll-effect',
				        'icon' => 'td-test-icons'
			        ));

		        td_api_tinymce_formats::add('td_tinymce_item_2_2',
			        array(
				        'parent_id' => 'td_tinymce_item_2',
				        'title' => 'Fade in text color border',
				        'selector' => 'p, h3, blockquote',
				        'classes' => 'td-scroll-e-text-2 td-scroll-effect',
				        'icon' => 'td-test-icons'
			        ));

	        td_api_tinymce_formats::add('td_tinymce_item_3',
		        array(
			        'title' => 'Arrow list',
			        'selector' => 'ul',
			        'classes' => 'td-arrow-list'
		        ));


	        td_api_tinymce_formats::add('td_blockquote',
		        array(
			        'title' => 'Quotes'
		        ));

		        td_api_tinymce_formats::add('td_blockquote_1',
			        array(
				        'parent_id' => 'td_blockquote',
				        'title' => 'Quote left',
				        'block' => 'blockquote',
				        'classes' => 'td_quote td_quote_left',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_blockquote_2',
			        array(
				        'parent_id' => 'td_blockquote',
				        'title' => 'Quote right',
				        'block' => 'blockquote',
				        'classes' => 'td_quote td_quote_right',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_blockquote_3',
			        array(
				        'parent_id' => 'td_blockquote',
				        'title' => 'Quote box center',
				        'block' => 'blockquote',
				        'classes' => 'td_quote_box td_box_center',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_blockquote_4',
			        array(
				        'parent_id' => 'td_blockquote',
				        'title' => 'Quote box left',
				        'block' => 'blockquote',
				        'classes' => 'td_quote_box td_box_left',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_blockquote_5',
			        array(
				        'parent_id' => 'td_blockquote',
				        'title' => 'Quote box right',
				        'block' => 'blockquote',
				        'classes' => 'td_quote_box td_box_right',
				        'wrapper' => true,
			        ));


		        td_api_tinymce_formats::add('td_blockquote_6',
			        array(
				        'parent_id' => 'td_blockquote',
				        'title' => 'Pull quote center',
				        'block' => 'blockquote',
				        'classes' => 'td_pull_quote td_pull_center',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_blockquote_7',
			        array(
				        'parent_id' => 'td_blockquote',
				        'title' => 'Pull quote left',
				        'block' => 'blockquote',
				        'classes' => 'td_pull_quote td_pull_left',
				        'wrapper' => true,
			        ));

		        td_api_tinymce_formats::add('td_blockquote_8',
			        array(
				        'parent_id' => 'td_blockquote',
				        'title' => 'Pull quote right',
				        'block' => 'blockquote',
				        'classes' => 'td_pull_quote td_pull_right',
				        'wrapper' => true,
			        ));


            // two columns text
            td_api_tinymce_formats::add('td_text_columns',
                array(
                    'title' => 'Text columns'
                ));
                td_api_tinymce_formats::add('td_text_columns_0',
                    array(
                        'parent_id' => 'td_text_columns',
                        'title' => 'two columns',
                        'block' => 'div',
                        'classes' => 'td_text_columns_two_cols',
                        'wrapper' => true,
                    ));

	        // dropcap
	        td_api_tinymce_formats::add('td_dropcap',
		        array(
			        'title' => 'Dropcaps'
		        ));
		        td_api_tinymce_formats::add('td_dropcap_0',
			        array(
				        'parent_id' => 'td_dropcap',
				        'title' => 'Box',
				        'classes' => 'dropcap',
				        'inline' => 'span'
			        ));
		        td_api_tinymce_formats::add('td_dropcap_1',
			        array(
				        'parent_id' => 'td_dropcap',
				        'title' => 'Circle',
				        'classes' => 'dropcap dropcap1',
				        'inline' => 'span'
			        ));
		        td_api_tinymce_formats::add('td_dropcap_2',
			        array(
				        'parent_id' => 'td_dropcap',
				        'title' => 'Regular',
				        'classes' => 'dropcap dropcap2',
				        'inline' => 'span'
			        ));
		        td_api_tinymce_formats::add('td_dropcap_3',
			        array(
				        'parent_id' => 'td_dropcap',
				        'title' => 'Bold',
				        'classes' => 'dropcap dropcap3',
				        'inline' => 'span'
			        ));


            // highlighter
            td_api_tinymce_formats::add('td_text_highlight',
                array(
                    'title' => 'Text highlighting'
                ));
                td_api_tinymce_formats::add('td_text_highlight_0',
                    array(
                        'parent_id' => 'td_text_highlight',
                        'title' => 'Black censured',
                        'classes' => 'td_text_highlight_0',
                        'inline' => 'span'
                    ));
                td_api_tinymce_formats::add('td_text_highlight_red',
                    array(
                        'parent_id' => 'td_text_highlight',
                        'title' => 'Red marker',
                        'classes' => 'td_text_highlight_marker_red td_text_highlight_marker',
                        'inline' => 'span'
                    ));
                td_api_tinymce_formats::add('td_text_highlight_blue',
                    array(
                        'parent_id' => 'td_text_highlight',
                        'title' => 'Blue marker',
                        'classes' => 'td_text_highlight_marker_blue td_text_highlight_marker',
                        'inline' => 'span'
                    ));
            td_api_tinymce_formats::add('td_text_highlight_green',
                array(
                    'parent_id' => 'td_text_highlight',
                    'title' => 'Green marker',
                    'classes' => 'td_text_highlight_marker_green td_text_highlight_marker',
                    'inline' => 'span'
                ));
            td_api_tinymce_formats::add('td_text_highlight_yellow',
                array(
                    'parent_id' => 'td_text_highlight',
                    'title' => 'Yellow marker',
                    'classes' => 'td_text_highlight_marker_yellow td_text_highlight_marker',
                    'inline' => 'span'
                ));
            td_api_tinymce_formats::add('td_text_highlight_pink',
                array(
                    'parent_id' => 'td_text_highlight',
                    'title' => 'Pink marker',
                    'classes' => 'td_text_highlight_marker_pink td_text_highlight_marker',
                    'inline' => 'span'
                ));

			// clear elements
	        td_api_tinymce_formats::add('td_clear_elements',
		        array(
			        'title' => 'Clear element',
			        'selector' => 'a,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,code,blockquote',
			        'styles' => array(
				        'clear' => 'both'
			        )
		        ));



            td_global::$theme_plugins_list = array(
                array(
                    'name' => 'Visual Composer', // The plugin name
                    'slug' => 'js_composer', // The plugin slug (typically the folder name)
                    'source' => td_global::$get_template_directory_uri . '/includes/plugins/js_composer.zip', // The plugin source
                    'required' => true, // If false, the plugin is only 'recommended' instead of required
                    'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                    'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                    'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                    'external_url' => '', // If set, overrides default API URL and points to an external URL
                    'img' => td_global::$get_template_directory_uri . '/includes/wp_booster/wp-admin/images/plugins/visual-composer.png',
                    'text' => 'Required plugin',
                    'required_label' => 'required' //the text for required/recommended label - used also as a class for label bg color
                ),
                array(
                    'name' => 'tagDiv social counter', // The plugin name
                    'slug' => 'td-social-counter', // The plugin slug (typically the folder name)
                    'source' => td_global::$get_template_directory_uri . '/includes/plugins/td-social-counter.zip', // The plugin source
                    'required' => false, // If false, the plugin is only 'recommended' instead of required
                    'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                    'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                    'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                    'external_url' => '', // If set, overrides default API URL and points to an external URL
                    'img' => td_global::$get_template_directory_uri . '/includes/wp_booster/wp-admin/images/plugins/social.png',
                    'text' => '<a href="http://forum.tagdiv.com/tagdiv-social-counter-tutorial/" target="_blank">Read more</a>',
                    'required_label' => 'optional' //the text for required/recommended label - used also as a class for label bg color
                ),
                array(
                    'name' => 'Revolution slider v4.6', // The plugin name
                    'slug' => 'revslider', // The plugin slug (typically the folder name)
                    'source' => td_global::$get_template_directory_uri . '/includes/plugins/revslider.zip', // The plugin source
                    'required' => false, // If false, the plugin is only 'recommended' instead of required
                    'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                    'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                    'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                    'external_url' => '', // If set, overrides default API URL and points to an external URL
                    'img' => td_global::$get_template_directory_uri . '/includes/wp_booster/wp-admin/images/plugins/rev-slider.png',
                    'text' => '<a href="http://forum.tagdiv.com/how-to-install-revolution-slider-v5/" target="_blank">How to install v5</a>',
                    'required_label' => 'optional' //the text for required/recommended label - used also as a class for label bg color
                ),
	            array(
		            'name' => 'tagDiv Woo Invoice', // The plugin name
		            'slug' => 'td-woo-invoice', // The plugin slug (typically the folder name)
		            'source' => td_global::$get_template_directory_uri . '/includes/plugins/td-woo-invoice.zip', // The plugin source
		            'required' => false, // If false, the plugin is only 'recommended' instead of required
		            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
		            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
		            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		            'external_url' => '', // If set, overrides default API URL and points to an external URL
                    'img' => td_global::$get_template_directory_uri . '/includes/wp_booster/wp-admin/images/plugins/invoice.png',
                    'text' => '<a href="http://forum.tagdiv.com/tagdiv-woo-invoice-plugin/" target="_blank">Read more</a>',
		            'required_label' => 'optional' //the text for required/recommended label - used also as a class for label bg color
	            ),
	            array(
		            'name' => 'tagDiv Woo Label', // The plugin name
		            'slug' => 'td-woo-label', // The plugin slug (typically the folder name)
		            'source' => td_global::$get_template_directory_uri . '/includes/plugins/td-woo-label.zip', // The plugin source
		            'required' => false, // If false, the plugin is only 'recommended' instead of required
		            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
		            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
		            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		            'external_url' => '', // If set, overrides default API URL and points to an external URL
		            'img' => td_global::$get_template_directory_uri . '/includes/wp_booster/wp-admin/images/plugins/label.png',
                    'text' => '<a href="http://forum.tagdiv.com/tagdiv-woo-label-plugin/" target="_blank">Read more</a>',
		            'required_label' => 'optional' //the text for required/recommended label - used also as a class for label bg color
	            )
            );




        }
    }



	/**
	 * the filter array (used by blocks and by the loop filters)
	 * @return array
	 */
	static function get_map_filter_array ($group = 'Filter') {
		return array(
			array(
				"param_name" => "category_id",
				"type" => "dropdown",
				"value" => td_util::get_category2id_array(),
				"heading" => 'Category filter:',
				"description" => "A single category filter. If you want to filter multiple categories, use the 'Multiple categories filter' and leave this to default",
				"holder" => "div",
				"class" => "",
                'group' => $group
			),
			array(
				"param_name" => "category_ids",
				"type" => "textfield",
				"value" => '',
				"heading" => 'Multiple categories filter:',
				"description" => "Filter multiple categories by ID. Enter here the category IDs separated by commas (ex: 13,23,18). To exclude categories from this block add them with '-' (ex: -9, -10)",
				"holder" => "div",
				"class" => "",
                'group' => $group
			),
			array(
				"param_name" => "tag_slug",
				"type" => "textfield",
				"value" => '',
				"heading" => 'Filter by tag slug:',
				"description" => "To filter multiple tag slugs, enter here the tag slugs separated by commas (ex: tag1,tag2,tag3)",
				"holder" => "div",
				"class" => "",
                'group' => $group
			),
			array(
				"param_name" => "autors_id",
				"type" => "textfield",
				"value" => '',
				"heading" => "Multiple authors filter:",
				"description" => "Filter multiple authors by ID. Enter here the author IDs separated by commas (ex: 13,23,18).",
				"holder" => "div",
				"class" => "",
                'group' => $group
			),
            array(
                "param_name" => "installed_post_types",
                "type" => "textfield",
                "value" =>  '',//tdUtil::create_array_installed_post_types(),
                "heading" => 'Post Type:',
                "description" => "Filter by post types. Usage: post, page, event - Write 1 or more post types delimited by commas",
                "holder" => "div",
                "class" => "",
                'group' => $group
            ),
			array(
				"param_name" => "sort",
				"type" => "dropdown",
				"value" => array (
					'- Latest -' => '',
					'Random posts Today' => 'random_today' ,
					'Random posts from last 7 Day' => 'random_7_day' ,
					'Alphabetical A -> Z' => 'alphabetical_order',
					'Popular (all time)' => 'popular',
					'Popular (site wide) - jetpack + stats module required' => 'jetpack_popular_2',
					'Popular (last 7 days) - theme counter (enable from panel)' => 'popular7',
					'Featured' => 'featured',
					'Highest rated (reviews)' => 'review_high',
					'Random Posts' => 'random_posts',
					'Most Commented' => 'comment_count'
				),
				"heading" => 'Sort order:',
				"description" => "How to sort the posts. Notice that Popular (last 7 days) option is affected by caching plugins and CDNs. For popular posts we recommend the jetpack (24-48hrs) method",
				"holder" => "div",
				"class" => "",
                'group' => $group
			),
            array(
				"param_name" => "limit",
				"type" => "textfield",
				"value" => '5',
				"heading" => 'Limit post number:',
				"description" => "If the field is empty the limit post number will be the number from Wordpress settings -> Reading",
				"holder" => "div",
				"class" => ""
			),
			array(
				"param_name" => "offset",
				"type" => "textfield",
				"value" => '',
				"heading" => 'Offset posts:',
				"description" => "Start the count with an offset. If you have a block that shows 5 posts before this one, you can make this one start from the 6'th post (by using offset 5)",
				"holder" => "div",
				"class" => ""
			)
		);//end generic array
	}//end get_map function


    static function get_map_block_pagination_array() {
        return array (
            array(
                "param_name" => "ajax_pagination",
                "type" => "dropdown",
                "value" => array('- No pagination -' => '', 'Next Prev ajax' => 'next_prev', 'Load More button' => 'load_more', 'Infinite load' => 'infinite'),
                "heading" => 'Pagination:',
                "description" => "Our blocks support pagination.",
                "holder" => "div",
                "class" => "",
                'group' => 'Pagination'
            ),

            array(
                "param_name" => "ajax_pagination_infinite_stop",
                "type" => "textfield",
                "value" => '',
                "heading" => "Infinite load show 'Load more' after x pages:",
                "description" => "ONLY FOR INFINITE LOAD pagination: Shows 'load more' button after x number of pages. Leave this blank to load posts forever when infinite load is set for ajax pagination",
                "holder" => "div",
                "class" => "",
                'group' => 'Pagination'
            )
        );
    }


    static function get_map_block_ajax_filter_array() {
        return array(
            //custom filter types
            array(
                "param_name" => "td_ajax_filter_type", //this is used to build the filter list (for example a list of categories from the id-s bellow)
                "type" => "dropdown",
                "value" => array('- No drop down ajax filter -' => '', 'Filter by categories' => 'td_category_ids_filter', 'Filter by authors' => 'td_author_ids_filter', 'Filter by tag slug' => 'td_tag_slug_filter', 'Filter by popularity (Featured | All time popular)' => 'td_popularity_filter_fa'),
                "heading" => 'Ajax dropdown - filter type:',
                "description" => "Show the ajax drop down filter. The ajax filters (except by popularity) require an additional parameter. If no ids are provided in the input below, the filter will show all the available items (ex: all authors, all categories etc..)",
                "holder" => "div",
                "class" => "",
                "group" => "Ajax filter"
            ),

            //filter by ids
            array(
                "param_name" => "td_ajax_filter_ids", //the ids that we will show in the list
                "type" => "textfield",
                "value" => '',
                "heading" => 'Ajax dropdown - show the following IDs:',
                "description" => "The ajax drop down shows only the (author ids, categories ids OR tag slugs) that you enter here separated by comas",
                "holder" => "div",
                "class" => "",
                "group" => "Ajax filter"
            ),

            //default pull down text
            array(
                "param_name" => "td_filter_default_txt",
                "type" => "textfield",
                "value" => 'All',
                "heading" => 'Ajax dropdown - Filter default text',
                "description" => "The default text for the first item from the drop down. The first item shows the default block settings (the settings from the Filter tab)",
                "holder" => "div",
                "class" => "",
                "group" => "Ajax filter"
            ),

            array(
                "param_name" => "td_ajax_preloading",  //preloader settings
                "type" => "dropdown",
                "value" => array('- No preloading -' => '', 'Optimized preloading' => 'preload', 'Preload all' => 'preload_all'),
                "heading" => 'Ajax dropdown - content preloading:',
                "description" => "The content that is displayed when a user clicks on an ajax filter from the dropdown is preloaded on each pageview. WARNING: This feature consumes more resources on the server.",
                "holder" => "div",
                "class" => "",
                "group" => "Ajax filter"
            ),

        );
    }



	/**
	 * This array is used only by blocks that have loops + title (it is merged with the array from get_map_filter_array)
	 * @return array
	 */
	static function get_map_block_general_array() {
		return array(
			// title settings
			array(
				"param_name" => "custom_title",
				"type" => "textfield",
				"value" => "Block title",
				"heading" => 'Custom title for this block:',
				"description" => "Optional - a title for this block, if you leave it blank the block will not have a title",
				"holder" => "div",
				"class" => ""
			),
			array(
				"param_name" => "custom_url",
				"type" => "textfield",
				"value" => "",
				"heading" => 'Title url:',
				"description" => "Optional - a custom url when the block title is clicked",
				"holder" => "div",
				"class" => ""
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => 'Title text color',
				"param_name" => "header_text_color",
				"value" => '',
				"description" => 'Optional - Choose a custom title text color for this block'
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => 'Title background color',
				"param_name" => "header_color",
				"value" => '',
				"description" => 'Optional - Choose a custom title background color for this block'
			)

		);//end generic array
	}




    /**
     * modify the blocks params for big grids
     * @return array
     */
    public static function td_block_big_grid_params() {
        $map_filter_array = self::get_map_filter_array();

        // make the grid styles drop down
        $td_grid_style_drop_down = array(
            "param_name" => "td_grid_style",
            "type" => "dropdown",
            "value" => array(),
            "heading" => "Big grid style:",
            "description" => "Each big grid comes in different styles. This option will change the appearance of the grid (including the hover effect).",
            "holder" => "div",
            "class" => ""
        );
        foreach (td_global::$big_grid_styles_list as $big_grid_id => $params) {
            $td_grid_style_drop_down['value'][$big_grid_id] = $params['text'];
        }

        // add the grid styles drop down at the top
        array_unshift($map_filter_array, array(
            "param_name" => "td_grid_style",
            "type" => "dropdown",
            "value" => array(
                'Grid style 1' => 'td-grid-style-1',
                'Grid style 2' => 'td-grid-style-2',
                'Grid style 3' => 'td-grid-style-3',
                'Grid style 4' => 'td-grid-style-4',
                'Grid style 5' => 'td-grid-style-5'
            ),
            "heading" => "Big grid style:",
            "description" => "Each big grid comes in different styles. This option will change the appearance of the grid (including the hover effect).",
            "holder" => "div",
            "class" => ""
        ));

        $map_filter_array = td_util::vc_array_remove_params($map_filter_array, array(
            'limit'
        ));

        return $map_filter_array;
    }


    /**
     * Map array for trending now
     * @return array VC_MAP params
     */
    private static function td_block_trending_now_params() {
        $map_block_array = self::get_map_filter_array();

        //move on the first position the new filter array - array_unshift is used to keep the 0 1 2 index. array_marge does not do that
        array_unshift(
            $map_block_array,
            array(
                "param_name" => "navigation",
                "type" => "dropdown",
                "value" => array('Auto' => '', 'Manual' => 'manual'),
                "heading" => 'Navigation:',
                "description" => "If set on `Auto` will set the `Trending Now` block to auto start rotating posts",
                "holder" => "div",
                "class" => ""
            ),

            array(
                "param_name" => "style",
                "type" => "dropdown",
                "value" => array('Default' => '', 'Style 2' => 'style2'),
                "heading" => 'Style:',
                "description" => "Style of the `Trending Now` box",
                "holder" => "div",
                "class" => ""
            ),

	        array(
		        "type" => "colorpicker",
		        "holder" => "div",
		        "class" => "",
		        "heading" => 'Title text color',
		        "param_name" => "header_text_color",
		        "value" => '',
		        "description" => 'Optional - Choose a custom title text color for this block'
	        ),

	        array(
		        "type" => "colorpicker",
		        "holder" => "div",
		        "class" => "",
		        "heading" => 'Title background color',
		        "param_name" => "header_color",
		        "value" => '',
		        "description" => 'Optional - Choose a custom title background color for this block'
	        )
        );

        return $map_block_array;
    }


    /**
     * Map array for td_homepage_full_1_params
     * @return array VC_MAP params
     */
    private static function td_homepage_full_1_params() {
        $temp_array_filter = self::get_map_filter_array('');
        $temp_array_filter = td_util::vc_array_remove_params($temp_array_filter, array(
            'limit',
            'offset'
        ));

        return $temp_array_filter;
    }


    /**
     * Map array for sliders
     * @return array VC_MAP params
     */
    private static function td_slide_params() {
        $map_block_array = self::get_map_block_general_array();

        // remove some of the params that are not needed for the slide
        $map_block_array = td_util::vc_array_remove_params($map_block_array, array(
            'border_top',
            'ajax_pagination',
            'ajax_pagination_infinite_stop'
        ));

        // add some more
        $temp_array_merge = array_merge(
            array(
                array(
                    "param_name" => "autoplay",
                    "type" => "textfield",
                    "value" => '',
                    "heading" => 'Autoplay slider (at x seconds)',
                    "description" => "Leave empty do disable autoplay",
                    "holder" => "div",
                    "class" => ""
                )
            ),
            self::get_map_filter_array(),
            $map_block_array
        );
        return $temp_array_merge;
    }


	private static function td_block_big_grid_slide_params() {
		$params = array_merge(self::td_block_big_grid_params(),
			array(
				array(
					"param_name" => "autoplay",
					"type" => "textfield",
					"value" => '',
					"heading" => 'Autoplay slider (at x seconds)',
					"description" => "Leave empty do disable autoplay",
					"holder" => "div",
					"class" => ""
				),
				array(
					"param_name" => "limit",
					"type" => "textfield",
					"value" => 4,
					"heading" => __("Limit post number:", TD_THEME_NAME),
					"description" => "",
					"holder" => "div",
					"class" => ""
				)));

//		array_shift($params);

//		array_unshift($params, array(
//			"param_name" => "td_grid_style",
//			"type" => "dropdown",
//			"value" => array(
//				'Grid style 4' => 'td-grid-style-4',
//			),
//			"heading" => "Available big grid style for this plugin:",
//			"description" => "",
//			"holder" => "div",
//			"class" => ""
//		));

		return $params;
	}



    /**
     * hook up, is called at EOF
     */
    static function hook() {
        add_action('td_global_after', array('td_wp_booster_config', 'td_global_after'), 9); //we run on 9 priority to allow plugins to updage_key our apis while using the default priority of 10
    }
}

td_wp_booster_config::hook();