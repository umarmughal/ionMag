<?php
/**
 * Created by PhpStorm.
 * User: ra
 * Date: 4/22/14
 * Time: 10:07 AM
 */

//check to see if we show the socials from our theme or from wordpress
if(td_util::get_option('td_social_networks_show') == 'show') { ?>
<div class="td-header-sp-top-widget">

    <div class="td-search-wrapper">
        <div id="td-top-search">
            <!-- Search -->
            <div class="header-search-wrap">
                <div class="dropdown header-search">
                    <a id="td-header-search-button" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
                    <a id="td-header-search-button-mob" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-search-wrap">
        <div class="dropdown header-search">
            <div class="td-drop-down-search" aria-labelledby="td-header-search-button">
                <form method="get" class="td-search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
                    <div role="search" class="td-head-form-search-wrap">
                        <input id="td-header-search" type="text" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" /><input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="<?php _etd('Search', TD_THEME_NAME)?>" />
                    </div>
                </form>
                <div id="td-aj-search"></div>
            </div>
        </div>
    </div>

    <?php

        //get the socials that are set by user
        $td_get_social_network = td_util::get_option('td_social_networks');

        if(!empty($td_get_social_network)) {
            foreach($td_get_social_network as $social_id => $social_link) {
                if(!empty($social_link)) {
                   echo td_social_icons::get_icon($social_link, $social_id, true);
                }
            }
        }
    ?>

</div>
<?php
}