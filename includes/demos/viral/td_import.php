<?php
/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');

//top menu

//footer menu


/*  ----------------------------------------------------------------------------
    background - leave empty if you want to make sure that there is NO background on the demo - td_demo_misc::update_background('');
 */

/*  ----------------------------------------------------------------------------
    logo
*/
td_demo_misc::update_logo(array(
    'normal' => 'td_logo_header',
    'retina' => 'td_logo_header_retina',
    'mobile' => 'td_logo_header'
));

//footer
td_demo_misc::update_footer_logo(array(
    'normal' => 'td_logo_header',
    'retina' => 'td_logo_header_retina'
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
    'vimeo' => '#',
    'youtube' => '#'
));


/*  ----------------------------------------------------------------------------
    ads
 */
td_demo_misc::clear_all_ads();
td_demo_misc::add_ad_image('custom_ad_1', 'td_what_post_ad');
td_demo_misc::add_ad_image('sidebar', 'td_what_sidebar_ad');


/*  ----------------------------------------------------------------------------
    sidebars
 */
//default sidebar
td_demo_widgets::remove_widgets_from_sidebar('default');

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_popular_categories_widget',
    array (
        'custom_title' => 'POPULAR CATEGORIES',
        'limit' => '6'
    )
);

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_6_widget',
    array (
        'custom_title' => 'MUST READ',
        'limit' => '5'
    )
);

td_demo_widgets::add_widget_to_sidebar('default', 'td_block_ad_box_widget',
    array (
        'spot_title' => '',
        'spot_id' => 'sidebar'
    )
);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Funny',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Animals',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Moments',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'Accidents',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'GIFs',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'People',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));

$demo_cat_7_id =td_demo_category::add_category(array(
    'category_name' => 'Entertainment',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Fails',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_category_td_grid_style' => '2'
));
$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Hot',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_category_td_grid_style' => ''
));
$demo_cat_10_id =td_demo_category::add_category(array(
    'category_name' => 'Geeky',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_11_id =td_demo_category::add_category(array(
    'category_name' => 'Buzz',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
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
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/homepage.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php
    'td_layout' => 'td_module_rd_6',
    'homepage' => true,
    'limit' => '5'
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
    'title' => 'Funny',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
	'title' => 'Entertainment',
	'add_to_menu_id' => $td_demo_header_menu_id,
	'category_id' => $demo_cat_7_id
));

td_demo_menus::add_mega_menu(array(
    'title' => 'Fails',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));

// add a subcategory to the sub-menu
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'More',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_category(array(
    'title' => 'Hot',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_category(array(
    'title' => 'Geeky',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_10_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_category(array(
    'title' => 'Buzz',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_11_id,
    'parent_id' => $parent_submenu_id
));

/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

td_demo_content::add_post(array(
    'title' => '7 More Reasons Why A Cat Is The Perfect Best Friend',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT)),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Things You Think About Your Friends But Never Say',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT)),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'People Whose Selfie Addiction Knows No Bounds',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT)),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'Obama\'s Presidential To-Do List Still Has a Lot Left',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'When the Dishes Finally Get Done',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'If 6 Disney Movies Were 50% More Realistic',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'The 5 Stages of Someone Holding Your Phone',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'When You Have to Smile for the Customer',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'The Secret Truth Every Dog Knows',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Insanely Stupid Movie Ideas That Somehow Still Got Made',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Acts of Petty Rebellion We All Commit On the Internet',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'If Disney Couples Met Online',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Donald Trump Marketing Cohen’s New Movie',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_10'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'The Weirdest Places Ashes have been Scattered',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'The Next Wave of Superheroes Has Arrived',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Watch Awesome Kate Middleton Go Skiing',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Silicon Valley Stunned by Slashed Investments',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_4'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Samsung thinks foldable phones are the new flip phones',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Facebook buys black market passwords to keep your account safe',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'How AI could help save the humble sea cow',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => '#Calexit secession movement trends on Twitter',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Dreaming About Mandarin Oriental’s Moroccan Magic',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Discover Oscar’s 2016 Best Beauty Looks',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'How Nancy Reagan Gave Glamour to the White House',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Find Out What Makes a Style Disrupter',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Merry-go-round. Heavy on the ROUND',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Somebody actually made a Butter Bot',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Alternate Side Parking in Effect',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'There’s No Escape Now',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'What If DC Let Marvel Help Develop Their Movies',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Westworld Has Gone From Mostly Intriguing To Mostly Frustrating',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Four Doctor Who Stories You Should Watch During The Break',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Fantastic Beasts and Where to Find Them',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Aged To Perfection',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'A Place Where Grandkids Belong',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Three Dumb ER Stories You’re Allowed To Laugh At',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Military Lesson: Never Volunteer',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'FOD\'s Guide to GIFs: The Clapping GIFS',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => '21 Best GIFs Of The Week',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Adding Unnecessary Explosions to GIFs is the Only Meme Ever Worth Caring About',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => '15 Viral GIFs Right Now',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_1'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Car Crashed On Church Roof',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => '4 Weird Car Crash Stories You Would Wonder If It Really Happened',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Texting While Walking Isn\'t Funny Anymore',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Top 100 Funny Insurance Claims',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '28 Hilarious Real-Life Teacher Stories',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => '9 Weird, But Funny Moments Every Couple Has In A Relationship',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'The Five Funniest Moments in Australian History',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => '15 Legit Funny Moments From An Otherwise Boring Super Bowl',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Top Ten Funniest Animal Stories Of The Year',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Cat Or Dog? This Wild-eyed Cutie Has Us All Confused',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Meet Willie The Yorkie, The Dog With The Best Hair On The Internet',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => '12 Baby Animal Pictures That Will Make You Go ‘Aww’',
    'file' => td_global::$get_template_directory . '/includes/demos/viral/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_3'
));