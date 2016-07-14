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
    body {
        background-color: @theme_color;
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