<?php
/*  ----------------------------------------------------------------------------
    footer extra bottom section FOOTER LOGO + DESCRIPTION + SOCIAL ICONS
 */

$td_footer_logo = td_util::get_option('tds_footer_logo_upload');
$td_footer_retina_logo = td_util::get_option('tds_footer_retina_logo_upload');
$td_top_logo = td_util::get_option('tds_logo_upload');
$td_top_retina_logo = td_util::get_option('tds_logo_upload_r');
$td_footer_text = td_util::get_option('tds_footer_text');
$td_footer_email = td_util::get_option('tds_footer_email');
$td_logo_alt = td_util::get_option('tds_logo_alt');
$td_footer_logo_alt = td_util::get_option('tds_footer_logo_alt');
$td_logo_title = td_util::get_option('tds_logo_title');
$td_footer_logo_title = td_util::get_option('tds_footer_logo_title');

// if there's no footer logo alt set use the alt from the header logo
if (empty($td_footer_logo_alt)) {
    $td_footer_logo_alt = $td_logo_alt;
}

// if there's no footer logo title set use the title from the header logo
if (empty($td_footer_logo_title)) {
    $td_footer_logo_title = $td_logo_title;
}

$buffy = '';

// social icons
if(td_util::get_option('tds_footer_social') != 'no') {
    $buffy .= '<div class="td-pb-span12"><aside class="footer-social-wrap">';
//	    $buffy .= '<div class="block-title"><span>' . __td('FOLLOW US', TD_THEME_NAME) . '</span></div>';
    //get the socials that are set by user
    $td_get_social_network = td_util::get_option('td_social_networks');

    if(!empty($td_get_social_network)) {
        foreach($td_get_social_network as $social_id => $social_link) {
            if(!empty($social_link) && !empty($social_id)) {
                $buffy .= td_social_icons::get_icon($social_link, $social_id, true, true);
            }
        }
    }
    $buffy .= '</aside></div>';
}

// logo
$buffy .= '<div class="td-pb-span12"><aside class="footer-logo-wrap">';
    if (!empty($td_footer_logo)) { // if have footer logo
        if (empty($td_footer_retina_logo)) { // if don't have a retina footer logo load the normal logo
            $buffy .= '<a href="' . esc_url(home_url( '/' )) . '"><img src="' . $td_footer_logo . '" alt="' . $td_footer_logo_alt . '" title="' . $td_footer_logo_title . '"/></a>';
        } else {
            $buffy .= '<a href="' . esc_url(home_url( '/' )) . '"><img class="td-retina-data" src="' . $td_footer_logo . '" data-retina="' . esc_attr($td_footer_retina_logo) . '" alt="' . $td_footer_logo_alt . '" title="' . $td_footer_logo_title . '"/></a>';
        }
    } else { // if you don't have a footer logo load the top logo
        if (empty($td_top_retina_logo)) {
            $buffy .= '<a href="' . esc_url(home_url( '/' )) . '"><img src="' . $td_top_logo . '" alt="' . $td_logo_alt . '" title="' . $td_logo_title . '"/></a>';
        } else {
            $buffy .= '<a href="' . esc_url(home_url( '/' )) . '"><img class="td-retina-data" src="' . $td_top_logo . '" data-retina="' . esc_attr($td_top_retina_logo) . '" alt="' . $td_logo_alt . '" title="' . $td_logo_title . '"/></a>';
        }
    }

$buffy .= '</aside></div>';

// description & email
if(!(empty($td_footer_text) && empty($td_footer_email))) {
    $buffy .= '<div class="td-pb-span12"><aside class="footer-text-wrap">';
    $buffy .= stripcslashes($td_footer_text);

    if (!empty($td_footer_email)) {
        $buffy .= '<div class="footer-email-wrap">';
        $buffy .= __td('Contact us', TD_THEME_NAME) . ': <a href="mailto:' . $td_footer_email . '">' . $td_footer_email . '</a>';
        $buffy .= '</div>';
    }
    $buffy .= '</aside></div>';
}

echo $buffy;