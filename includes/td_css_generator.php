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

    //output the style
    return $td_css_compiler->compile_css();

}