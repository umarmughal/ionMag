<?php
/*
 * This is the config file for the theme.
 */

define("TD_THEME_NAME", "Ionmag");
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
class td_config {


    /**
     * setup the global theme specific variables
     * @depends td_global
     */
    static function on_td_global_after_config() {



        /**
         * js files list
         */
        td_global::$js_files = array(


            'tdExternal' =>             '/includes/wp_booster/js_dev/tdExternal.js',
            'tdDetect' =>               '/includes/wp_booster/js_dev/tdDetect.js',

            'tdViewport' =>             '/includes/wp_booster/js_dev/tdViewport.js',

            'tdMenu' =>                 '/includes/wp_booster/js_dev/tdMenu.js',
            //'tdLocalCache' =>         '/includes/wp_booster/js_dev/tdLocalCache.js',
            'tdUtil' =>                 '/includes/wp_booster/js_dev/tdUtil.js',
            'tdAffix' =>                '/includes/wp_booster/js_dev/tdAffix.js',
            //'td_scroll_animation' =>  '/includes/wp_booster/js_dev/td_scroll_animation.js',
            'td_site' =>                '/includes/wp_booster/js_dev/td_site.js',

            'tdLoadingBox' =>           '/includes/wp_booster/js_dev/tdLoadingBox.js',
            'tdAjaxSearch' =>           '/includes/wp_booster/js_dev/tdAjaxSearch.js',
            'tdPostImages' =>           '/includes/wp_booster/js_dev/tdPostImages.js',
            'tdBlocks' =>               '/includes/wp_booster/js_dev/tdBlocks.js',
            'tdLogin' =>                '/includes/wp_booster/js_dev/tdLogin.js',
            'tdLoginMobile' =>          '/includes/wp_booster/js_dev/tdLoginMobile.js',
            'tdStyleCustomizer' =>      '/includes/wp_booster/js_dev/tdStyleCustomizer.js',
            'tdTrendingNow' =>          '/includes/wp_booster/js_dev/tdTrendingNow.js',
            'td_history' =>             '/includes/wp_booster/js_dev/td_history.js',
            'tdSmartSidebar' =>         '/includes/wp_booster/js_dev/tdSmartSidebar.js',
            'tdInfiniteLoader' =>       '/includes/wp_booster/js_dev/tdInfiniteLoader.js',
            'vimeo_froogaloop' =>       '/includes/wp_booster/js_dev/vimeo_froogaloop.js',

            'tdCustomEvents' =>         '/includes/js_files/tdCustomEvents.js',
            'tdEvents' =>               '/includes/wp_booster/js_dev/tdEvents.js',

            'tdAjaxCount' =>            '/includes/wp_booster/js_dev/tdAjaxCount.js',
            'tdVideoPlaylist' =>        '/includes/wp_booster/js_dev/tdVideoPlaylist.js',
            'td_slide' =>               '/includes/wp_booster/js_dev/td_slide.js',
            'tdPullDown' =>             '/includes/wp_booster/js_dev/tdPullDown.js',

            //'td_main' =>              '/includes/js_files/td_main.js',
            'td_fps' =>                 '/includes/js_files/td_fps.js',
            'tdAnimationScroll' =>      '/includes/wp_booster/js_dev/tdAnimationScroll.js',
            'tdHomepageFull' =>         '/includes/wp_booster/js_dev/tdHomepageFull.js',
            'tdBackstr' =>              '/includes/wp_booster/js_dev/tdBackstr.js',

            //'td_scroll_effects.js' => '/includes/js_files/td_scroll_effects.js',

            'tdAnimationStack' =>       '/includes/wp_booster/js_dev/tdAnimationStack.js',
            'td_main' =>                '/includes/js_files/td_main.js',

            'td_loop_ajax' =>           '/includes/wp_booster/js_dev/tdLoopAjax.js',

            'tdWeather' =>              '/includes/wp_booster/js_dev/tdWeather.js',
            'tdLastInit' =>             '/includes/wp_booster/js_dev/tdLastInit.js',
            'tdAnimationSprite' =>      '/includes/wp_booster/js_dev/tdAnimationSprite.js',
            'tdDateI18n' =>             '/includes/wp_booster/js_dev/tdDatei18n.js',
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
            )
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
         * smart lists
         */
        td_api_smart_list::add('td_smart_list_1',
            array(
                'file' => td_global::$get_template_directory . '/includes/smart_lists/td_smart_list_1.php',
                'text' => 'Smart list 1',
                'img' => td_global::$get_template_directory_uri . '/images/panel/smart_lists/td_smart_list_1.png',
                'extract_first_image' => true,
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
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
                'used_on_blocks' => array('td_block_1', 'td_block_4', 'td_block_7', 'td_block_8'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_2',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_2.php',
                'text' => 'Module 2',
                'img' => td_global::$get_template_directory_uri . '/images/panel/modules/td_module_2.png',
                'used_on_blocks' => array('td_block_2', 'td_block_7'),
                'excerpt_title' => 12,
                'excerpt_content' => '25',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_3',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_3.php',
                'text' => 'Module 3',
                'img' => td_global::$get_template_directory_uri . '/images/panel/modules/td_module_3.png',
                'used_on_blocks' => array('td_block_3', 'td_block_5', 'td_block_7', 'td_block_8'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_4',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_4.php',
                'text' => 'Module 4',
                'img' => td_global::$get_template_directory_uri . '/images/panel/modules/td_module_4.png',
                'used_on_blocks' => array('td_block_4', 'td_block_7', 'td_block_8'),
                'excerpt_title' => 12,
                'excerpt_content' => '0',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_5',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_5.php',
                'text' => 'Module 5',
                'img' => td_global::$get_template_directory_uri . '/images/panel/modules/td_module_5.png',
                'used_on_blocks' => array('td_block_5', 'td_block_8'),
                'excerpt_title' => 12,
                'excerpt_content' => '25',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_6',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_6.php',
                'text' => 'Module 6',
                'img' => td_global::$get_template_directory_uri . '/images/panel/modules/td_module_6.png',
                'used_on_blocks' => array('td_block_6'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_empty',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_mx_empty.php',
                'text' => 'Module MX Empty',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_1', 'td_block_big_grid_2', 'td_block_big_grid_3'),
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => false,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
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
                'class' => '',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_module::add('td_module_mega_menu',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_mega_menu.php',
                'text' => 'Mega menu module',
                'img' => '',
                'used_on_blocks' => array('td_block_mega_menu'),
                'excerpt_title' => '12',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => '',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx1',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_mx1.php',
                'text' => 'Module MX1',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_1'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx2',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_mx2.php',
                'text' => 'Module MX2',
                'img' => '',
                'used_on_blocks' => array('Search live'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx3',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_mx3.php',
                'text' => 'Module MX3',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_1'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx4',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_mx4.php',
                'text' => 'Module MX4',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_2', 'td_block_big_grid_3'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_related_posts',
            array(
                'file' => td_global::$get_template_directory . '/includes/modules/td_module_related_posts.php',
                'text' => 'Related posts module',
                'img' => '',
                'used_on_blocks' => array('td_block_related_posts'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );



        /**
         * the thumbs used by the  theme
         * Thumb id => array parameters. Wp booster only cuts if the option is set from theme panel
         */

        td_api_thumb::add('td_300x220',
            array(
                'name' => 'td_300x220',
                'width' => 300,
                'height' => 220,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module 1', 'Module 2'
                )
            )
        );

        td_api_thumb::add('td_100x70',
            array(
                'name' => 'td_100x70',
                'width' => 100,
                'height' => 70,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module 3'
                )
            )
        );

        td_api_thumb::add('td_640x400',
            array(
                'name' => 'td_640x400',
                'width' => 640,
                'height' => 400,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module 4', 'Module MX3'
                )
            )
        );

        td_api_thumb::add('td_80x60',
            array(
                'name' => 'td_80x60',
                'width' => 80,
                'height' => 60,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'small',
                'used_on' => array(
                    'Live search'
                )
            )
        );

        td_api_thumb::add('td_260x195',
            array(
                'name' => 'td_260x195',
                'width' => 260,
                'height' => 195,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module 5', 'Mega menu'
                )
            )
        );

        td_api_thumb::add('td_245x184',
            array(
                'name' => 'td_245x184',
                'width' => 245,
                'height' => 184,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Mega menu'
                )
            )
        );

        td_api_thumb::add('td_198x145',
            array(
                'name' => 'td_198x145',
                'width' => 198,
                'height' => 145,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Related posts'
                )
            )
        );

        td_api_thumb::add('td_485x360',
            array(
                'name' => 'td_485x360',
                'width' => 485,
                'height' => 360,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module MX1', 'Module MX4'
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
                'text' => '<strong>Style 2 - </strong> Center menu and logo',
                'file' => td_global::$get_template_directory . '/parts/header/header-style-2.php'
            )
        );


        /**
         * the styles for big grids. This styles will show up in the panel @see td_panel_categories.php and on each big grid block
         * This has to be before the blocks are added! The grids blocks are made with this
         */
        td_global::$big_grid_styles_list = array(
            'td-grid-style-1' => array(  // td-grid-style-1 - THIS HAS TO BE THE DEFAULT
                'text' => 'Grid style 1'
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
                    ),
                    array (
                        'param_name' => 'css',
                        'value' => '',
                        'type' => 'css_editor',
                        'heading' => 'Css',
                        'group' => 'Design options',
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
                        "value" => 'Block title',
                        "heading" => "Block title",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array (
                        "param_name" => "roles",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "User roles",
                        "description" => "Optional - Filter by role, add one or more <a target=\"_blank\" href=\"https://codex.wordpress.org/Roles_and_Capabilities\">user roles</a> , separate them with a comma (ex. Administrator, Editor, Author, Contributor, Subscriber)",
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
                    ),
                    array (
                        'param_name' => 'css',
                        'value' => '',
                        'type' => 'css_editor',
                        'heading' => 'Css',
                        'group' => 'Design options',
                    )
                )
            )
        );

        td_api_block::add('td_block_author',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Author box',
                "base" => "td_block_author",
                "class" => "",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_author',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_author.php',
                "params" => array(
                    array(
                        "param_name" => "custom_title",
                        "type" => "textfield",
                        "value" => 'Block title',
                        "heading" => "Block title",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "author_id",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Author id",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "author_url_text",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Author page link text",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "author_url",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Author page link url",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "open_in_new_window",
                        "type" => "dropdown",
                        "value" => array('- Same window -' => '', 'New window' => 'y'),
                        "heading" => __("Open in:", TD_THEME_NAME),
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
                    ),
                    array (
                        'param_name' => 'css',
                        'value' => '',
                        'type' => 'css_editor',
                        'heading' => 'Css',
                        'group' => 'Design options',
                    )
                )
            )
        );

        td_api_block::add('td_block_custom',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Custom block',
                "base" => "td_block_custom",
                "class" => "",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_custom',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_custom.php',
                "params" => array(
                    array(
                        "param_name" => "custom_title",
                        "type" => "textfield",
                        "value" => 'Block title',
                        "heading" => "Block title",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "image_title_item0",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Image title",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "custom_url_item0",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Custom url",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
	                array(
		                "param_name" => "image_item0",
		                "type" => "image",
		                "value" => '',
		                "heading" => "Image",
		                "description" => "",
		                "holder" => "div",
		                "class" => ""
	                ),
	                array(
                        "param_name" => "open_in_new_window_item0",
                        "type" => "checkbox",
                        "value" => '',
                        "heading" => __("Open in new window:", TD_THEME_NAME),
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "image_title_item1",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Image title",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "custom_url_item1",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Custom url",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
	                array(
		                "param_name" => "image_item1",
		                "type" => "image",
		                "value" => '',
		                "heading" => "Image",
		                "description" => "",
		                "holder" => "div",
		                "class" => ""
	                ),
	                array(
                        "param_name" => "open_in_new_window_item1",
                        "type" => "checkbox",
                        "value" => '',
                        "heading" => __("Open in new window:", TD_THEME_NAME),
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "image_title_item2",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Image title",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "custom_url_item2",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Custom url",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
	                array(
		                "param_name" => "image_item2",
		                "type" => "image",
		                "value" => '',
		                "heading" => "Image",
		                "description" => "",
		                "holder" => "div",
		                "class" => ""
	                ),
	                array(
                        "param_name" => "open_in_new_window_item2",
                        "type" => "checkbox",
                        "value" => '',
                        "heading" => __("Open in new window:", TD_THEME_NAME),
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "image_title_item3",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Image title",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
                    array(
                        "param_name" => "custom_url_item3",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Custom url",
                        "description" => "",
                        "holder" => "div",
                        "class" => ""
                    ),
	                array(
		                "param_name" => "image_item3",
		                "type" => "image",
		                "value" => '',
		                "heading" => "Image",
		                "description" => "",
		                "holder" => "div",
		                "class" => ""
	                ),
	                array(
                        "param_name" => "open_in_new_window_item4",
                        "type" => "checkbox",
                        "value" => '',
                        "heading" => __("Open in new window:", TD_THEME_NAME),
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
                    ),
                    array (
                        'param_name' => 'css',
                        'value' => '',
                        'type' => 'css_editor',
                        'heading' => 'Css',
                        'group' => 'Design options',
                    )
                )
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
                        "value" => "Block title",
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
                    ),
                    array (
                        'param_name' => 'css',
                        'value' => '',
                        'type' => 'css_editor',
                        'heading' => 'Css',
                        'group' => 'Design options',
                    )
                )
            )
        );


        td_api_block::add('td_block_instagram',
            array(
                'map_in_visual_composer' => true,
                "name" => 'Instagram',
                "base" => "td_block_instagram",
                "class" => "",
                "controls" => "full",
                "category" => 'Blocks',
                'icon' => 'icon-pagebuilder-td-instagram',
                'file' => td_global::$get_template_directory . '/includes/shortcodes/td_block_instagram.php',
                "params" => array(

                    array(
                        "param_name" => "instagram_id",
                        "type" => "textfield",
                        "value" => '',
                        "heading" => "Instagram ID",
                        "description" => 'Enter the ID as it appears after the instagram url (ex. http://www.instagram.com/myID)',
                        "holder" => "div",
                        "class" => "",
                        'group' => 'Instagram'
                    ),

                    array(
                        "param_name" => "instagram_header",
                        "type" => "dropdown",
                        "value" => array (
                            'On' => '',
                            'Off' => 'off'
                        ),
                        "heading" => "Instagram Header",
                        "description" => 'Display or hide the Instagram header section (default: On)',
                        "holder" => "div",
                        "class" => "",
                        'group' => 'Instagram'
                    ),

                    array(
                        "param_name" => "instagram_images_per_row",
                        "type" => "dropdown",
                        "value" => array (
                            '- Default -' => '',
                            '1' => 1,
                            '2' => 2,
                            '3' => 3,
                            '4' => 4,
                            '5' => 5,
                            '6' => 6,
                            '7' => 7,
                            '8' => 8
                        ),
                        "heading" => 'Number of images per row:',
                        "description" => 'Set the number of images displayed on each row (default is 3).',
                        "holder" => "div",
                        "class" => "",
                        'group' => 'Instagram'
                    ),

                    array(
                        "param_name" => "instagram_number_of_rows",
                        "type" => "dropdown",
                        "value" => array (
                            '- Default -' => '',
                            '1' => 1,
                            '2' => 2,
                            '3' => 3,
                            '4' => 4,
                            '5' => 5
                        ),
                        "heading" => 'Number of rows:',
                        "description" => 'Set on how many rows to display the images (default is 1)',
                        "holder" => "div",
                        "class" => "",
                        'group' => 'Instagram'
                    ),

                    array(
                        "param_name" => "instagram_margin",
                        "type" => "dropdown",
                        "value" => array (
                            'No gap' => '',
                            '2 px' => 2,
                            '5 px' => 5
                        ),
                        "heading" => "Image gap",
                        "description" => 'Set a gap between images (default: No gap)',
                        "holder" => "div",
                        "class" => "",
                        'group' => 'Instagram'
                    ),

                    array(
                        "param_name" => "custom_title",
                        "type" => "textfield",
                        "value" => 'Block title',
                        "heading" => "Custom title for this block:",
                        "description" => "Optional - a title for this block, if you leave it blank the block will not have a title",
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
                    array (
                        'param_name' => 'css',
                        'value' => '',
                        'type' => 'css_editor',
                        'heading' => 'Css',
                        'group' => 'Design options',
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




        /**
         * category top posts styles
         */
        td_api_category_top_posts_style::add('td_category_top_posts_style_1',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_1.php',
                'posts_shown_in_the_loop' => 3,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-1.png',
                'text' => 'Grid 1',
                'td_block_name' => 'td_block_big_grid_1'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_2',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_2.php',
                'posts_shown_in_the_loop' => 3,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-2.png',
                'text' => 'Grid 2',
                'td_block_name' => 'td_block_big_grid_2'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_3',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_3.php',
                'posts_shown_in_the_loop' => 2,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-3.png',
                'text' => 'Grid 3',
                'td_block_name' => 'td_block_big_grid_3'
            )
        );

        td_api_category_top_posts_style::add('td_category_top_posts_style_disable',
            array (
                'file' => td_global::$get_template_directory . '/includes/category_top_posts_styles/td_category_top_posts_style_disable.php',
                'posts_shown_in_the_loop' => 0,
                'img' => td_global::$get_template_directory_uri . '/images/panel/category_templates/icon-category-top-disable.png',
                'text' => 'Disable',
                'td_block_name' => '',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
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
                )
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
                )
            ),
            'Modules MX and Other Blocks - Article Title' => array (
                'other_modules_general' => array(
                    'text' => 'General font',
                    'type' => 'general_setting',
                ),
                'module_mx2' =>  array(
                    'text' => 'Module MX2',
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
                )
            ),
            'Mobile menu' => array (
                'mobile_general' => array(
                    'text' => 'General font',
                    'type' => 'general_setting',
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
            'Post title' => array (
                'post_general' => array(
                    'text' => 'General font',
                    'type' => 'general_setting',
                ),
                'post_title' =>  array(
                    'text' => 'Default template',
                    'type' => 'default',
                )
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
                'post_share' =>  array(
                    'text' => 'Share Text',
                    'type' => 'default',
                ),
                'post_image_caption' =>  array(
                    'text' => 'Image caption',
                    'type' => 'default',
                ),
                'post_subtitle_small' =>  array(
                    'text' => 'Subtitle post style Default',
                    'type' => 'default',
                )
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
                )
            ),
            'Body' => array (
                'body_text' =>  array(
                    'text' => 'Body - General font',
                    'type' => 'default',
                ),
            )
        ); // end td_global::$typography_settings_list



        /**
         * the default fonts used by the theme. For a list of fonts ids @see td_fonts::$font_names_google_list
         */
        td_global::$default_google_fonts_list = array (
            '438' => array(
                'css_style_id' => 'google_font_work_sans',
                'url' => td_global::$http_or_https . '://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700'
            ),
            '521' => array(
                'css_style_id' => 'google_font_source_sans_pro',
                'url' => td_global::$http_or_https . '://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700'
            ),
            '525' => array(
                'css_style_id' => 'google_font_droid_serif',
                'url' => td_global::$http_or_https . '://fonts.googleapis.com/css?family=Droid+Serif:400,700'
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
                        'td-panel-custom-code' => array(
                            'text' => 'CUSTOM CODE',
                            'ico_class' => 'td-ico-code',
                            'file' => td_global::$get_template_directory . '/includes/wp_booster/wp-admin/panel/views/td_panel_custom_code.php',
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
	                    </ul>
	                </div>',

	            // admin panel - header
		        'text_header_logo' => '',

		        'text_header_logo_description' => '',

		        'text_header_logo_mobile' => '-',

		        'text_header_logo_mobile_image' => '160x40px',

		        'text_header_logo_mobile_image_retina' => '320x80px',

                // what widgets do not work on the smart sidebar
                'text_smart_sidebar_widget_support' => '
                <ul>
                    <li>[tagDiv] Trending now</li>
                </ul>
                '
	        );


            td_global::$theme_plugins_list = array(
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
                )
            );

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


//	        td_api_tinymce_formats::add('td_tinymce_item_2',
//		        array(
//			        'title' => 'Text scroll effects'
//		        ));
//
//		        td_api_tinymce_formats::add('td_tinymce_item_2_1',
//			        array(
//				        'parent_id' => 'td_tinymce_item_2',
//				        'title' => 'Fade in gray background',
//				        'selector' => 'p, h3, blockquote',
//				        'classes' => 'td-scroll-e-text-1 td-scroll-effect',
//				        'icon' => 'td-test-icons'
//			        ));
//
//		        td_api_tinymce_formats::add('td_tinymce_item_2_2',
//			        array(
//				        'parent_id' => 'td_tinymce_item_2',
//				        'title' => 'Fade in text color border',
//				        'selector' => 'p, h3, blockquote',
//				        'classes' => 'td-scroll-e-text-2 td-scroll-effect',
//				        'icon' => 'td-test-icons'
//			        ));

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


        }
    }



    /**
     * the filter array (used by blocks and by the loop filters)
     * @return array
     */
    static function get_map_filter_array ($group = 'Filter') {
        return array(
            array(
                "param_name" => "post_ids",
                "type" => "textfield",
                "value" => '',
                "heading" => 'Post ID filter:',
                "description" => "Filter multiple posts by ID. Enter here the post IDs separated by commas (ex: 10,27,233). To exclude posts from this block add them with '-' (ex: -7, -16)",
                "holder" => "div",
                "class" => "",
                'group' => $group
            ),
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
                    'Oldest posts' => 'oldest_posts',
                    'Alphabetical A -> Z' => 'alphabetical_order',
                    'Popular (all time)' => 'popular',
                    'Popular (jetpack + stats module requiered) Does not work with other settings/pagination' => 'jetpack_popular_2',
                    'Popular (last 7 days) - theme counter (enable from panel)' => 'popular7',
                    'Featured' => 'featured',
                    'Highest rated (reviews)' => 'review_high',
                    'Random Posts' => 'random_posts',
                    'Random posts Today' => 'random_today' ,
                    'Random posts from last 7 Day' => 'random_7_day' ,
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
            ),
            array (
                'param_name' => 'css',
                'value' => '',
                'type' => 'css_editor',
                'heading' => 'Css',
                'group' => 'Design options',
            )
        );
    }


    static function get_map_block_ajax_filter_array() {
        return array(
            //custom filter types
            array(
                "param_name" => "td_ajax_filter_type", //this is used to build the filter list (for example a list of categories from the id-s bellow)
                "type" => "dropdown",
                "value" => array('- No drop down ajax filter -' => '', 'Filter by categories' => 'td_category_ids_filter', 'Filter by authors' => 'td_author_ids_filter', 'Filter by tag IDs' => 'td_tag_slug_filter', 'Filter by popularity (Featured | All time popular)' => 'td_popularity_filter_fa'),
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
                "description" => "The ajax drop down shows only the (author ids, categories ids OR tag IDs) that you enter here separated by comas",
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
        array_unshift($map_filter_array,
            array(
                "param_name" => "td_grid_style",
                "type" => "dropdown",
                "value" => array(
                    'Grid style 1 - Default' => 'td-grid-style-1'
                ),
                "heading" => "Big grid style:",
                "description" => "Each big grid comes in different styles. This option will change the appearance of the grid (including the hover effect).",
                "holder" => "div",
                "class" => ""
            )

        );

        // add the design options
        $map_filter_array = array_merge(
            $map_filter_array,
            array(
                array (
                    'param_name' => 'css',
                    'value' => '',
                    'type' => 'css_editor',
                    'heading' => 'Css',
                    'group' => 'Design options',
                )
            )
        );


        $map_filter_array = td_util::vc_array_remove_params($map_filter_array, array(
            'limit'
        ));

        return $map_filter_array;
    }
}