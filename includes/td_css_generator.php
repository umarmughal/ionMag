<?php
function td_css_generator() {

    $raw_css = "
    <style>
    /* ------------------------------------------------------ */
    /* tagDiv Free Theme */

    /* ------------------------------------------------------ */
    /* GENERAL Theme Colors */

    /* THEME ACCENT COLOR */
    /* @theme_color */
    .td-icon-search,
    .td-drop-down-search .btn:hover,
    .td-drop-down-search .result-msg a,
    .top-header-menu > li a:hover,
    .top-header-menu .current-menu-item > a,
    .top-header-menu .current-menu-ancestor > a,
    .top-header-menu .current-category-ancestor > a,
    .sf-menu > .current-menu-item > a,
    .sf-menu > .current-menu-ancestor > a,
    .sf-menu > .current-category-ancestor > a,
    .sf-menu > li > a:hover,
    .sf-menu > .sfHover > a,
    .sf-menu ul .menu-item > a:hover,
    .sf-menu ul .menu-item > a:hover,
    .sf-menu ul .sfHover > a,
    .sf-menu ul .current-menu-ancestor > a,
    .sf-menu ul .current-category-ancestor > a,
    .sf-menu ul .current-menu-item > a {
      color: @theme_color;
    }
    
    .td-mega-menu-page .wpb_content_element ul li a :hover {
      color: @theme_color !important;
    }
    
    .td_mega_menu_sub_cats .cur-sub-cat,
    .td-mega-span .entry-title a:hover,
    .td_mod_mega_menu:hover .entry-title a,
    .td-header-main-menu .td-search-btns-wrap:hover .td-icon-search,
    a,
    cite a:hover {
      color: @theme_color;
    }
    
    input[type=submit]:hover {
      background-color: @theme_color;
    }
    
    .td-page-content blockquote p,
    .td-post-content blockquote p,
    .wpb_text_column blockquote p,
    .td_block_text_with_title blockquote p,
    .bbpress blockquote p,
    .woocommerce #tab-description blockquote p,
    .mce-content-body blockquote p,
    .comment-content blockquote p {
      color: @theme_color;
    }
    
    .td-page-content .td_quote_box,
    .td-post-content .td_quote_box,
    .wpb_text_column .td_quote_box,
    .td_block_text_with_title .td_quote_box,
    .bbpress .td_quote_box,
    .woocommerce #tab-description .td_quote_box,
    .mce-content-body .td_quote_box,
    .comment-content .td_quote_box {
      border-color: @theme_color;
    }
    
    .td-page-content .dropcap,
    .td-post-content .dropcap,
    .wpb_text_column .dropcap,
    .td_block_text_with_title .dropcap,
    .bbpress .dropcap,
    .woocommerce #tab-description .dropcap,
    .mce-content-body .dropcap,
    .comment-content .dropcap {
      background-color: @theme_color;
    }
    
    .td_module_wrap:hover .entry-title a {
      color: @theme_color;
    }
    
    .entry-title:after,
    .td-post-category:hover {
      background-color: @theme_color;
    }
    
    .entry-review-stars a:hover,
    .td-module-comments a:hover,
    .td-post-comments a:hover {
      color: @theme_color;
    }
    
    .block-title:after {
      background-color: @theme_color;
    }
    
    .td-next-prev-wrap a:hover,
    .td_ajax_load_more:hover,
    .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover {
      color: @theme_color;
    }
    
    .td-wrapper-pulldown-filter .td-pulldown-filter-list:before {
      background-color: @theme_color;
    }
    
    .td-wrapper-pulldown-filter .td-pulldown-filter-item .td-cur-simple-item,
    .td-wrapper-pulldown-filter .td-pulldown-filter-link:hover,
    .td-wrapper-pulldown-filter .td-pulldown-category-filter-link:hover,
    .td_quote_on_blocks {
      color: @theme_color;
    }
    
    .td_author .td-author-name:after {
      background-color: @theme_color;
    }
    
    .td_author .td-author-page a:hover {
      color: @theme_color;
    }
    
    @media (min-width: 1019px) {
      .td-grid-style-1.td-hover-1 .td-big-grid-post:hover .td-post-category {
        background-color: @theme_color;
      }
    }
    
    .td-a-rec-id-sidebar .td-adspot-title:after,
    .single-post .page-nav > div,
    .td-category a:hover {
      background-color: @theme_color;
    }
    
    .td-social-sharing-buttons:hover .td-social-but-text {
      color: @theme_color;
    }
    
    .td-post-source-via:before {
      background-color: @theme_color;
    }
    
    .td-post-small-box a:hover,
    .td-post-next-prev-content span,
    .td-post-next-prev-conten a:hover,
    .author-box-wrap .td-author-social a:hover,
    .td-author-name a:hover,
    .td-author-url a:hover {
      color: @theme_color;
     }
     
    .td-author-name:after {
      background-color: @theme_color;
    }
    
    .td-related-title .td-related-left:hover,
    .td-related-title .td-related-right:hover,
    .td-related-title .td-cur-simple-item {
      color: @theme_color;
    }
    
    .td-related-title .td-cur-simple-item:after,
    .td-comments-title-wrap h4:after,
    .comment-reply-title:after {
      background-color: @theme_color;
    }
    
    .logged-in-as a:hover,
    .comment-reply-link,
    #cancel-comment-reply-link:hover {
      color: @theme_color;
    }
    
    .page-nav .current {
      background-color: @theme_color;
    }
    
    #searchsubmit:hover,
    .search-submit:hover,
    .td-search-header .td-search-query {
      color: @theme_color;
    }
    
    .td-404-title:after,
    .td-rating-bar-wrap div {
      background-color: @theme_color;
    }
    
    .td-review-overall .td-icon-star,
    .td-review-overall .td-icon-star-empty,
    .td-review-overall .td-icon-star-half,
    .td-review-final-score,
    .td-category-siblings .td-subcat-dropdown a:hover,
    .td-category-siblings .td-subcat-dropdown a.td-current-sub-category,
    .widget a:hover {
      color: @theme_color;
    }
    
    .widget_calendar #today {
      background-color: @theme_color;
    }
    
    .widget_calendar tfoot a:hover {
      color: @theme_color;
    }
    
    .td_social_type:hover .td-sp:before {
      background-color: @theme_color;
    }
    
    .td_social_type .td_social_button a:hover {
      color: @theme_color;
    }
    
    .td-smart-list-button:hover {
      background-color: @theme_color;
    }
    
    .td-smart-list-dropdown-wrap .td-smart-list-button:hover,
    .td-instagram-user a,
    .td-footer-outer-wrapper a:hover {
      color: @theme_color !important;
    }
    
    .td-subfooter-menu li.menu-item > a:hover,
    .td-subfooter-menu li.sfHover > a,
    .td-subfooter-menu li.current-menu-ancestor > a,
    .td-subfooter-menu li.current-category-ancestor > a,
    .td-subfooter-menu li.current-menu-item > a,
    .td-sub-footer-copy i {
      color: @theme_color;
    }
    
    /* @site_background_color */
    body {
      background-color: @site_background_color;
    }
    
    /* @header_color */
    .block-title span,
    .block-title a {
        background-color: @header_color;
        margin: 0;
        padding: 8px 10px;
        color: #fff;
    }
    
    .block-title:after {
        display: none;
    }
    
    .td-block-title-wrap {
        margin-bottom: 22px;
    }
    
    .td-wrapper-pulldown-filter .td-pulldown-filter-list {
        margin-top: -2px;
    }
    
    .block-title {
        font-size: 13px;
        font-weight: 500;
    }

    .td_module_wrap:hover .entry-title a,
    .td-load-more-wrap a:hover,
    .td_quote_on_blocks,
    .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-wrapper-pulldown-filter a.td-pulldown-filter-link:hover,
    .td-wrapper-pulldown-filter a.td-cur-simple-item,
    .td-module-comments a:hover,
    .td-next-prev-wrap a:hover {
        color: @header_color;
    }

    .td_module_wrap .td-post-category:hover,
    .block-title:after,
    .entry-title:after,
    .td-wrapper-pulldown-filter .td-pulldown-filter-list:before {
        background-color: @header_color;
    }
    
    /* @text_header_color */
    .td_module_wrap:hover .entry-title a,
    .td-load-more-wrap a:hover,
    .td_quote_on_blocks,
    .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-wrapper-pulldown-filter a.td-pulldown-filter-link:hover,
    .td-wrapper-pulldown-filter a.td-cur-simple-item,
    div .block-title span,
    div .block-title a,
    .td-module-comments a:hover,
    .td-next-prev-wrap a:hover {
        color: @text_header_color;
    }

    .td_module_wrap .td-post-category:hover,
    .block-title:after,
    .entry-title:after,
    .td-wrapper-pulldown-filter .td-pulldown-filter-list:before {
        background-color: @text_header_color;
    }
    
    /* @top_menu_color */
    .td-header-top-menu {
      background-color: @top_menu_color;
    }
    
    /* @top_menu_text_color */
    .td-header-top-menu,
    .td-header-top-menu a,
    .top-header-menu .current-menu-item > a,
    .top-header-menu .current-menu-ancestor > a,
    .top-header-menu .current-category-ancestor > a {
        color: @top_menu_text_color;
    }
    
    /* @top_menu_text_hover_color */
    .top-header-menu > li a:hover {
      color: @top_menu_text_hover_color;
    }
    
    /* @top_social_icons_color */
    .td-header-sp-top-widget .td-social-icon-wrap > a {
      color: @top_social_icons_color;
    }
    
    /* @top_social_icons_hover_color */
    .td-social-icon-wrap:hover i.td-icon-font,
    .td-social-icon-wrap:hover i.td-icon-behance,
    .td-social-icon-wrap:hover i.td-icon-blogger,
    .td-social-icon-wrap:hover i.td-icon-delicious,
    .td-social-icon-wrap:hover i.td-icon-deviantart,
    .td-social-icon-wrap:hover i.td-icon-digg,
    .td-social-icon-wrap:hover i.td-icon-dribbble,
    .td-social-icon-wrap:hover i.td-icon-evernote,
    .td-social-icon-wrap:hover i.td-icon-facebook,
    .td-social-icon-wrap:hover i.td-icon-flickr,
    .td-social-icon-wrap:hover i.td-icon-forrst ,
    .td-social-icon-wrap:hover i.td-icon-googleplus,
    .td-social-icon-wrap:hover i.td-icon-grooveshark,
    .td-social-icon-wrap:hover i.td-icon-html5,
    .td-social-icon-wrap:hover i.td-icon-instagram,
    .td-social-icon-wrap:hover i.td-icon-lastfm,
    .td-social-icon-wrap:hover i.td-icon-linkedin,
    .td-social-icon-wrap:hover i.td-icon-mail,
    .td-social-icon-wrap:hover i.td-icon-myspace,
    .td-social-icon-wrap:hover i.td-icon-path,
    .td-social-icon-wrap:hover i.td-icon-paypal,
    .td-social-icon-wrap:hover i.td-icon-picasa,
    .td-social-icon-wrap:hover i.td-icon-pinterest,
    .td-social-icon-wrap:hover i.td-icon-posterous,
    .td-social-icon-wrap:hover i.td-icon-reddit,
    .td-social-icon-wrap:hover i.td-icon-rss,
    .td-social-icon-wrap:hover i.td-icon-share,
    .td-social-icon-wrap:hover i.td-icon-skype,
    .td-social-icon-wrap:hover i.td-icon-soundcloud,
    .td-social-icon-wrap:hover i.td-icon-spotify,
    .td-social-icon-wrap:hover i.td-icon-stackoverflow,
    .td-social-icon-wrap:hover i.td-icon-steam,
    .td-social-icon-wrap:hover i.td-icon-stumbleupon,
    .td-social-icon-wrap:hover i.td-icon-tumblr,
    .td-social-icon-wrap:hover i.td-icon-twitter,
    .td-social-icon-wrap:hover i.td-icon-vimeo,
    .td-social-icon-wrap:hover i.td-icon-vk,
    .td-social-icon-wrap:hover i.td-icon-windows,
    .td-social-icon-wrap:hover i.td-icon-wordpress,
    .td-social-icon-wrap:hover i.td-icon-yahoo,
    .td-social-icon-wrap:hover i.td-icon-youtube {
      color: @top_social_icons_hover_color;
    }
    
    /* @menu_color */
    .td-header-menu-wrap {
      background-color: @menu_color;
      border: none;


    /* @menu_text_color */
    .td-header-wrap .td-header-menu-wrap .sf-menu > li > a,
    .td-header-wrap .header-search-wrap .td-icon-search {
        color: @menu_text_color;
    }
    
    /* @submenu_hover_color */
    .sf-menu ul .menu-item > a:hover,
    .sf-menu > .current-menu-item > a,
    .sf-menu > .current-menu-ancestor > a,
    .sf-menu > .current-category-ancestor > a,
    .sf-menu > li > a:hover,
    .sf-menu > .sfHover > a,
    .sf-menu ul .menu-item > a:hover,
    .sf-menu ul .sfHover > a,
    .sf-menu ul .current-menu-ancestor > a,
    .sf-menu ul .current-category-ancestor > a,
    .sf-menu ul .current-menu-item > a,
    .td_mega_menu_sub_cats .cur-sub-cat {
      color: @submenu_hover_color;
    }
    
    .td-mega-menu-page .wpb_content_element ul li a:hover {
      color: @submenu_hover_color !important;
    }
    
    .td-mega-span .entry-title a:hover,
    .td_mod_mega_menu:hover .entry-title a,
    .td-header-main-menu .td-search-btns-wrap:hover .td-icon-search {
      color: @submenu_hover_color;
    }
    
    .td-header-main-menu .td-post-category:hover {
      background-color: @submenu_hover_color;
    }
    
    /* @mobile_menu_color */
    @media (max-width: 767px) {
        body .td-header-wrap .td-header-main-menu {
            background-color: @mobile_menu_color !important;
        }
    }

    /* @mobile_icons_color */
    @media (max-width: 767px) {
        body #td-top-mobile-toggle i,
        .td-header-wrap .header-search-wrap .td-icon-search {
            color: @mobile_icons_color !important;
        }
    }

    /* @mobile_gradient_one_mob */
    .td-menu-background:before,
    .td-search-background:before {
        background: @mobile_gradient_one_mob;
        background: -moz-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, @mobile_gradient_one_mob), color-stop(100%, @mobile_gradient_two_mob));
        background: -webkit-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: -o-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobileu_gradient_two_mob 100%);
        background: -ms-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: linear-gradient(to bottom, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='@mobile_gradient_one_mob', endColorstr='@mobile_gradient_two_mob', GradientType=0 );
    }

    /* @mobile_text_active_color */
    .td-mobile-content .current-menu-item > a,
    .td-mobile-content .current-menu-ancestor > a,
    .td-mobile-content .current-category-ancestor > a,
    #td-mobile-nav .td-menu-login-section a:hover,
    #td-mobile-nav .td-register-section a:hover,
    #td-mobile-nav .td-menu-socials-wrap a:hover i,
    .td-search-close a:hover i {
        color: @mobile_text_active_color;
    }

    /* @mobile_button_background_mob */
    #td-mobile-nav .td-register-section .td-login-button,
    .td-search-wrap-mob .result-msg a {
        background-color: @mobile_button_background_mob;
    }

    /* @mobile_button_color_mob */
    #td-mobile-nav .td-register-section .td-login-button,
    .td-search-wrap-mob .result-msg a {
        color: @mobile_button_color_mob;
    }

    /* @mobile_text_color */
    .td-mobile-content li a,
    .td-mobile-content .td-icon-menu-right,
    .td-mobile-content .sub-menu .td-icon-menu-right,
    #td-mobile-nav .td-menu-login-section a,
    #td-mobile-nav .td-menu-logout a,
    #td-mobile-nav .td-menu-socials-wrap .td-icon-font,
    .td-mobile-close .td-icon-close-mobile,
    .td-search-close .td-icon-close-mobile,
    .td-search-wrap-mob,
    .td-search-wrap-mob #td-header-search-mob,
    #td-mobile-nav .td-register-section,
    #td-mobile-nav .td-register-section .td-login-input,
    #td-mobile-nav label,
    #td-mobile-nav .td-register-section i,
    #td-mobile-nav .td-register-section a,
    #td-mobile-nav .td_display_err,
    .td-search-wrap-mob .td_module_wrap .entry-title a,
    .td-search-wrap-mob .td_module_wrap:hover .entry-title a,
    .td-search-wrap-mob .td-post-date {
        color: @mobile_text_color;
    }
    .td-search-wrap-mob .td-search-input:before,
    .td-search-wrap-mob .td-search-input:after,
    #td-mobile-nav .td-menu-login-section .td-menu-login span {
        background-color: @mobile_text_color;
    }

    #td-mobile-nav .td-register-section .td-login-input {
        border-bottom-color: @mobile_text_color !important;
    }

    /* @header_wrap_color */
    
    
    
    
    
    
    /* @text_logo_color */
    .td-header-wrap .td-logo-text-container .td-logo-text {
        color: @text_logo_color;
    }

    /* @text_logo_tagline_color */
    .td-header-wrap .td-logo-text-container .td-tagline-text {
        color: @text_logo_tagline_color;
    }
    
    /* @post_title_color */
    .td-post-header .entry-title {
      color: @post_title_color;
    }
    
    /* @post_author_name_color */
    .td-post-author-name a {
      color: @post_author_name_color;
    }
    
    /* @post_content_color */
    .td-post-content,
    .td-post-content p {
    	color: @post_content_color;
    }

    /* @post_h_color */
    .td-post-content h1,
    .td-post-content h2,
    .td-post-content h3,
    .td-post-content h4,
    .td-post-content h5,
    .td-post-content h6 {
    	color: @post_h_color;
    }

    /* @post_blockquote_color */
    .post blockquote p,
    .page blockquote p {
    	color: @post_blockquote_color;
    }
    .post .td_quote_box,
    .page .td_quote_box {
        border-color: @post_blockquote_color;
    }
    
    /* @page_title_color */
    .td-page-title,
    .woocommerce-page .page-title {
    	color: @page_title_color;
    }

    /* @page_content_color */
    .td-page-content p,
    .td-page-content .td_block_text_with_title,
    .woocommerce-page .page-description > p {
    	color: @page_content_color;
    }

    /* @page_h_color */
    .td-page-content h1,
    .td-page-content h2,
    .td-page-content h3,
    .td-page-content h4,
    .td-page-content h5,
    .td-page-content h6 {
    	color: @page_h_color;
    }

    .td-page-content .widgettitle {
        color: #fff;
    }
    
    /* @footer_color */
    .td-footer-wrapper {
      background-color: @footer_color;
    }
    
    /* @footer_text_color */
    .td-footer-wrapper,
    .td-footer-wrapper a,
    .td-footer-wrapper .td-pulldown-filter-display-option span,
    .td-footer-wrapper .block-title a,
    .td-footer-wrapper .block-title span,
    .td-footer-wrapper .block-title label,
    .td-footer-wrapper .rss-date,
    .td-footer-wrapper cite,
    .footer-social-wrap a {
      color: @footer_text_color;
    }
    
    /* @footer_widget_text_color */
    .td-footer-wrapper .block-title a,
    .td-footer-wrapper .block-title span,
    .td-footer-wrapper .block-title label {
      color: @footer_widget_text_color;
    }
    
    .td-footer-wrapper .block-title:after{
      background-color: @footer_widget_text_color;
    }
    
    /* @footer_bottom_color */
    .td-sub-footer-container {
      background-color: @footer_bottom_color;
    }
    
    /* @footer_bottom_text_color */
    .td-sub-footer-container,
    .td-subfooter-menu li a,
    .td-sub-footer-copy {
      color: @footer_bottom_text_color;
    }
    
    .td-subfooter-menu li:after {
      background-color: @footer_bottom_text_color;
    }
    
    /* @footer_bottom_hover_color */
    .td-subfooter-menu .menu-item > a:hover,
    .td-subfooter-menu .sfHover > a,
    .td-subfooter-menu .current-menu-ancestor > a,
    .td-subfooter-menu .current-category-ancestor > a,
    .td-subfooter-menu .current-menu-item > a {
      color: @footer_bottom_hover_color;
    }
    
    
    
    
    /* @footer_background_image */
    .td-footer-outer-wrapper:before {
        background-image: url('@footer_background_image');
    }

    /* @footer_background_repeat */
    .td-footer-outer-wrapper:before {
        background-repeat: @footer_background_repeat;
    }

    /* @footer_background_size */
    .td-footer-outer-wrapper:before {
        background-size: @footer_background_size;
    }

    /* @footer_background_position */
    .td-footer-outer-wrapper:before {
        background-position: @footer_background_position;
    }

    /* @footer_background_opacity */
    .td-footer-outer-wrapper:before {
        opacity: @footer_background_opacity;
    }

    /* @login_background_image */
    .white-popup-block:before {
        background-image: url('@login_background_image');
    }

    /* @login_background_repeat */
    .white-popup-block:before {
        background-repeat: @login_background_repeat;
    }

    /* @login_background_size */
    .white-popup-block:before {
        background-size: @login_background_size;
    }

    /* @login_background_position */
    .white-popup-block:before {
        background-position: @login_background_position;
    }

    /* @login_background_opacity */
    .white-popup-block:before {
        opacity: @login_background_opacity;
    }

    </style>
    ";



    $td_css_compiler = new td_css_compiler($raw_css);
    // the template directory uri
    $td_css_compiler->load_setting_raw('get_template_directory_uri', get_template_directory_uri());


    // get $typography array from db and added to generated css
    $td_typography_array = td_fonts::td_get_typography_sections_from_db();
    if(is_array($td_typography_array) and !empty($td_typography_array)) {

        foreach ($td_typography_array as $section_id => $section_css_array) {
            $td_css_compiler->load_setting_array(array($section_id => $section_css_array));
        }
    }


    // load the user settings

    // general
    $td_css_compiler->load_setting('theme_color');
    $td_css_compiler->load_setting('site_background_color');
    $td_css_compiler->load_setting('header_color');
    $td_css_compiler->load_setting('text_header_color');

    // header
    $td_css_compiler->load_setting('top_menu_color');
    $td_css_compiler->load_setting('top_menu_text_color');
    $td_css_compiler->load_setting('top_menu_text_hover_color');
    $td_css_compiler->load_setting('top_social_icons_color');
    $td_css_compiler->load_setting('top_social_icons_hover_color');

    // main menu
    $td_css_compiler->load_setting('menu_color');
    $td_css_compiler->load_setting('submenu_hover_color');
    $td_css_compiler->load_setting('menu_text_color');

    // mobile menu
    $td_css_compiler->load_setting('mobile_menu_color');
    $td_css_compiler->load_setting('mobile_icons_color');
    $td_css_compiler->load_setting('mobile_text_color');
    $td_css_compiler->load_setting('mobile_text_active_color');
    // menu gradient color
    $td_css_compiler->load_setting('mobile_gradient_one_mob');
    $td_css_compiler->load_setting('mobile_gradient_two_mob');
    //color one is empty
    if (empty($td_css_compiler->settings['mobile_gradient_one_mob']) && !empty($td_css_compiler->settings['mobile_gradient_two_mob'])) {
        $td_css_compiler->load_setting_raw('mobile_gradient_one_mob', '#333145');
    }
    //color two is empty
    if (!empty($td_css_compiler->settings['mobile_gradient_one_mob']) && empty($td_css_compiler->settings['mobile_gradient_two_mob'])) {
        $td_css_compiler->load_setting_raw('mobile_gradient_two_mob', '#b8333e');
    }

    // header colors
    $td_css_compiler->load_setting('header_wrap_color');
    $td_css_compiler->load_setting('text_logo_color');
    $td_css_compiler->load_setting('text_logo_tagline_color');

    // footer colors
    $td_css_compiler->load_setting('footer_color');
    $td_css_compiler->load_setting('footer_text_color');
    $td_css_compiler->load_setting('footer_widget_text_color');

    // subfooter colors
    $td_css_compiler->load_setting('footer_bottom_color');
    $td_css_compiler->load_setting('footer_bottom_text_color');
    $td_css_compiler->load_setting('footer_bottom_hover_color');
    
    // Posts colors
    $td_css_compiler->load_setting('post_title_color');
    $td_css_compiler->load_setting('post_author_name_color');
    $td_css_compiler->load_setting('post_content_color');
    $td_css_compiler->load_setting('post_h_color');
    $td_css_compiler->load_setting('post_blockquote_color');




    // footer background
    $td_css_compiler->load_setting('footer_background_image');
    $td_css_compiler->load_setting('footer_background_repeat');
    $td_css_compiler->load_setting('footer_background_size');
    $td_css_compiler->load_setting('footer_background_position');
    $td_css_compiler->load_setting('footer_background_opacity');

    // sign in/join background
    $td_css_compiler->load_setting('login_background_image');
    $td_css_compiler->load_setting('login_background_repeat');
    $td_css_compiler->load_setting('login_background_size');
    $td_css_compiler->load_setting('login_background_position');
    $td_css_compiler->load_setting('login_background_opacity');

    //output the style
    return $td_css_compiler->compile_css();

}