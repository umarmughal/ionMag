<?php
/**
 * Created by ra on 5/14/2015.
 */



/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

//homepage
/*  ----------------------------------------------------------------------------
    menu
 */
//top menu
$td_demo_top_menu_id = td_demo_menus::create_menu('td-demo-top-menu', 'top-menu');
td_demo_menus::add_link(array(
    'title' => 'About',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_link(array(
    'title' => 'Contact',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => '#',
    'parent_id' => ''
));

//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');


//footer menu
$td_demo_footer_menu = td_demo_menus::create_menu('td-demo-footer-menu', 'footer-menu');
td_demo_menus::add_link(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'About',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'contact',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));



/*  ----------------------------------------------------------------------------
    background - leave empty if you want to make sure that there is NO background on the demo - td_demo_misc::update_background('');
 */
td_demo_misc::update_background('');

// mobile menu background
td_demo_misc::update_background_mobile('td_pic_10');


/*  ----------------------------------------------------------------------------
    logo
 */
td_demo_misc::update_logo(array(
    'normal' => 'td_pic_logo_header',
    'retina' => 'td_pic_logo_header',
    'mobile' => 'td_pic_logo_footer'
));


//footer
td_demo_misc::update_footer_logo(array(
    'normal' => 'td_pic_logo_footer',
    'retina' => 'td_pic_logo_footer'
));


/*  ----------------------------------------------------------------------------
    footer text
 */



/*  ----------------------------------------------------------------------------
    socials
 */
td_demo_misc::add_social_buttons(array(
    'facebook' => '#',
    'twitter' => '#',
    'instagram' => '#',
    'youtube' => '#'
));


/*  ----------------------------------------------------------------------------
    ads
 */
td_demo_misc::clear_all_ads();
td_demo_misc::add_ad_image('header', 'td_header_ad');
td_demo_misc::add_ad_image('sidebar', 'td_big_ad');
td_demo_misc::add_ad_image('custom_ad_1', 'td_sidebar_ad');
td_demo_misc::add_ad_image('custom_ad_2', 'td_content_ad');


/*  ----------------------------------------------------------------------------
    sidebars
 */

//default sidebar
td_demo_widgets::remove_widgets_from_sidebar('default');

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_ad_box_widget',
    array (
        'spot_title' => '- Advertisement -',
        'spot_id' => 'custom_ad_1'
    )
);

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_popular_categories_widget',
    array (
        'custom_title' => 'POPULAR CATEGORIES',
        'limit' => '6'
    )
);

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_6_widget',
    array (
        'sort' => 'random_posts',
        'custom_title' => 'Most Recent',
        'limit' => '5',
        'header_color' => ''
    )
);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Lifestyle',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => ''
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Beauty',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Culture',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'Dining',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Fitness',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'Health',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_7_id =td_demo_category::add_category(array(
        'category_name' => 'Parties',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

    $demo_cat_8_id =td_demo_category::add_category(array(
        'category_name' => 'Social',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Fashion',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$demo_cat_10_id =td_demo_category::add_category(array(
    'category_name' => 'Travel',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$demo_cat_11_id =td_demo_category::add_category(array(
    'category_name' => 'Gadgets',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$demo_cat_12_id =td_demo_category::add_category(array(
    'category_name' => 'Sports',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$demo_cat_13_id =td_demo_category::add_category(array(
    'category_name' => 'Video',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'On each category you can set a Category template style, a Top post style (grids) and a module type for article listing.',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));



/*  ----------------------------------------------------------------------------
    pages
 */
//homepage
$td_homepage_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/homepage.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php
    'td_layout' => '1',
    'homepage' => true
));

//menu dropdown homepages
$td_homepage_blog_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Blog',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/homepage_blog.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php
    'td_layout' => '4',
    'homepage' => false,
    'list_custom_title_show' => 'hide_title',
    'limit' => '5',
    'sidebar_id' => ''
));

//menu dropdown homepages
$td_homepage_fashion_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Fashion',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/homepage_fashion.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php
    'td_layout' => '1',
    'homepage' => false,
    'list_custom_title_show' => 'hide_title',
    'limit' => '8',
    'sidebar_id' => ''
));

//menu dropdown homepages
$td_homepage_infinite_scroll_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Infinite Scroll',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/homepage_infinite_scroll.txt',
    'template' => 'page.php',   // the page template full file name with .php
    'td_layout' => '',
    'homepage' => false
));

//menu dropdown homepages
$td_homepage_sport_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Sport',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/homepage_sport.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php
    'td_layout' => '2',
    'homepage' => false,
    'list_custom_title_show' => 'hide_title',
    'limit' => '10',
    'sidebar_id' => ''
));

//menu dropdown homepages
$td_homepage_tech_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Tech',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/homepage_tech.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php
    'td_layout' => '1',
    'homepage' => false,
    'list_custom_title_show' => 'hide_title',
    'limit' => '10',
    'sidebar_id' => ''
));

//menu dropdown homepages
$td_homepage_travel_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Travel',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/homepage_travel.txt',
    'template' => 'page.php',   // the page template full file name with .php
    'td_layout' => '',
    'homepage' => false
));

/*  ----------------------------------------------------------------------------
    menu
 */

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));

// mega menu multiple subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Fashion',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Travel',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_10_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Videos',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_13_id
));

// add a subcategory to the sub-menu
$parent_submenu_id_1 = td_demo_menus::add_link(array(
    'title' => 'More',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_link(array(
    'title' => 'Gadgets',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => $parent_submenu_id_1
));
td_demo_menus::add_link(array(
    'title' => 'Sports',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => $parent_submenu_id_1
));


// add a subcategory to the sub-menu
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'Homepages',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_page(array(
    'title' => 'Homepage - Blog',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_blog_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_page(array(
    'title' => 'Homepage - Fashion',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_fashion_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_page(array(
    'title' => 'Homepage - Infinite Scroll',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_infinite_scroll_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_page(array(
    'title' => 'Homepage - Sport',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_sport_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_page(array(
    'title' => 'Homepage - Tech',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_tech_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_page(array(
    'title' => 'Homepage - Travel',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_travel_id,
    'parent_id' => $parent_submenu_id
));



/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category


/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'The 5 Most Influential People In The World',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Africa: Five Star Luxury and Wildlife Encounters',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Polo Can’t Be Allowed to Go on in its Current Situation',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Review of the Best Wireless Headphones',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Celebrating Body Empowerment with Real Women',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Facebook Gives Emerging Markets Free Sales Platform',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'After the Party: How to Fake a Good Night’s Sleep',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Why Growing Old Is Better Than You Think',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'The Top 5 Benefits of Endurance Outdoor Exercise',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'The Dubai Food Festival Experience',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Rituals and Traditions to Bring Good Fortune',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Social Media is Changing the Face of the Beauty Industry',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id,$demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_4'
));

/* ------------------------------------------------------------------ */
// posts in one category

td_demo_content::add_post(array(
    'title' => 'Witness Technological History in the Making',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Top 10 Incredible Technologies You Can Use',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Watch Really Funny Animals Do Crazy Things',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Best Upcoming Horror Movies 2016 – 2017 Trailers',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'The 5 Most Incredible Body Transformations',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Chris Froome All-But Secures Third Le Tour Title',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Dopped Athletes will Not Be Playing in the Rio Olympics',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Footballers Can Win Any Game with the Right Lider',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Top 20 Greatest European Snowboard Trails Ever',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Winning Trophies with Mates Means so Much More',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_10'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Best Karaoke Gadgets for Singing Superstars',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'How Should You Edit Your Holiday Photos?',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Summer 2016: Which Smartphone Has the Best Camera?',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'The Best Tools for Finding New Music and Movies',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'New Mobile Games You Don’t Want to Miss',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Discovering Sydney’s Must-See Attractions',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Get Lost in Italy and Get Ready for Relaxation',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'How to Travel Cheap: Finding a Cheap Flight',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Russia: Exploring the Giant Lakes of Syberia',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Swimming the Crystal Waters of the Great Alps',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Best Tips on How to Wear Sneakers to Work',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'How to Travel Fashionably on a Long Flight',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Looking Shady: Essential Sunglasses for the Summer',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Official Designers for the Industry Giants',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Why the Pajama Top Should Be Your Summer Uniform',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'How America Can Stop Wasting $161B of Food a Year',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Longboards Are Gaining Popularity – See Why',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Say Goodbye to Pebble Beaches, Say Hello to Sand',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'The Top 5 Biggest Filatropists in the World',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'This Man Speaks 11 Languages – See How He Does It',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '5 Advices for Throwing the Perfect Bachelor Party',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Best Tips for a Perfect Birthday Party',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Summer 2016: The 5 Biggest Jaw-Droppers',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The Perfect Music for the Perfect Party Mood',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'See All the Stars Arriving at Cannes 2016',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_8'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '5 Essential Rules to a Healthy and Happy Life',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'How Often Do You Need to See Eat Vegetables?',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'How to Prevent and Treat Knee and Ankle Pain',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Top 5 Ways to Stay Healthy This Summer',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Why Do Women Cope With Stress A Lot Better than Men',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '10 Summer Sports That Can Burn Serious Calories',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => '3 Big Reasons Runners Should Strength Train',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => '6 Yoga Poses You Can Do in Your Home Garden',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Discover The Ultimate Upper-Body Workout',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'How Many Calories Does Hiking Really Burn?',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Discover the Birth Place of Pizza',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'NY Best Summer Dessert Destinations',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'The Best Dining in the Hamptons',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'The Dubai Food Festival Experience',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Plan Check: Modern American Cuisine',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'A Greeting Is More Valuable Than A Well Served Dish',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'All Things Lost and Forgotten Must Be Found',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Different New Year Celebrations Around the World',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Experience The Great Wall of China on a Layover',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Getting Back to the Basics of Pure Education',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Beauties You Should Follow for Great Inspiration',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Discover Affordable Ways to Hide Fatigue',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Must Have Beauty Kits & Palettes',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Social Media is Changing the Face of the Beauty Industry',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'The Coolest Vanity Apps for You and Your Girls',
    'file' => td_global::$get_template_directory . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_3'
));