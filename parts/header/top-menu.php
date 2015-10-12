
<div class="td-header-sp-top-menu">


	<?php
	// show the weather if needed
	if (td_util::get_option('tds_weather_top_menu') == 'show') {
		$atts['w_location'] = td_util::get_option('tds_weather_location_top_menu');
		$atts['w_units'] = td_util::get_option('tds_weather_units_top_menu');
		// render the weather
		echo td_weather::render_generic($atts, 'td_top_weather_uid', 'top_bar_template');
	}



	// show the date and time if needed
    if (td_util::get_option('tds_data_top_menu') == 'show') {
        $tds_data_time = td_util::get_option('tds_data_time_format');
        if ($tds_data_time == '') {
            $tds_data_time = 'l, F j, Y';
        }
        echo '<div class="td_data_time">';
        echo date_i18n(stripslashes($tds_data_time));
        echo '</div>';
    }




    //show login widget
    if (td_util::get_option('tds_login_sign_in_widget') == 'show') {
        //test if user is logd in or not
        if ( is_user_logged_in() ) {
            //get current logd in user data
            global $current_user;

            //<span class="td-sp-ico-logout"></span>
            echo '<ul class="top-header-menu td_ul_logout">
                        <li class="menu-item">' .
                            get_avatar($current_user->ID, 20) . '<a href="' . get_author_posts_url($current_user->ID) . '" class="td_user_logd_in">' . $current_user->display_name . '</a><i class="td-icon-logout"></i>' .
                        '</li>
                        <li class="menu-item">
                            <a href="' . wp_logout_url(home_url( '/' )) . '">' . __td('Logout', TD_THEME_NAME) . '</a>
                        </li>
                 </ul>';
        } else {
            //check if admin allow registration
            $users_can_register = get_option('users_can_register');

            //if admin permits registration
            $users_can_register_tab = '';
            $users_can_register_form = '';
            $td_user_join = '';

            if($users_can_register == 1){

                //add the Register tab to the modal window if `Anyone can register` chec
                $users_can_register_tab = '<li><a id="register-link">' . __td('REGISTER', TD_THEME_NAME) . '</a></li>';

                //add the Join text
                //$td_user_join = ' / ' . __td("JOIN");

                $users_can_register_form = '
                        <div id="td-register-div" class="td-dispaly-none">
                            <div class="td-login-panel-title">' . __td('Register for an account', TD_THEME_NAME) .'</div>
                            <input class="td-login-input" type="text" name="register_email" id="register_email" placeholder="' . __td('your email', TD_THEME_NAME) .'" value="" required>
                            <input class="td-login-input" type="text" name="register_user" id="register_user" placeholder="' . __td('your username', TD_THEME_NAME) .'" value="" required>
                            <input type="button" name="register_button" id="register_button" class="wpb_button btn td-login-button" value="' . __td('Register', TD_THEME_NAME) . '">
                             <div class="td-login-info-text">' . __td('A password will be e-mailed to you.', TD_THEME_NAME) . '</div>
                        </div>';
            }

            echo '
                <ul class="top-header-menu td_ul_login"><li class="menu-item"><a class="td-login-modal-js menu-item" href="#login-form" data-effect="mpf-td-login-effect">' . __td('Sign in / Join', TD_THEME_NAME) . $td_user_join . '</a><span class="td-sp-ico-login td_sp_login_ico_style"></span></li></ul>
                <div  id="login-form" class="white-popup-block mfp-hide mfp-with-anim">
                    <ul class="td-login-tabs">
                        <li><a id="login-link" class="td_login_tab_focus">' . __td('LOG IN', TD_THEME_NAME) . '</a></li>' . $users_can_register_tab . '
                    </ul>



                    <div class="td-login-wrap">
                        <div class="td_display_err"></div>

                        <div id="td-login-div" class="">
                            <div class="td-login-panel-title">' . __td('Welcome! Log into your account', TD_THEME_NAME) .'</div>
                            <input class="td-login-input" type="text" name="login_email" id="login_email" placeholder="' . __td('your username', TD_THEME_NAME) .'" value="" required>
                            <input class="td-login-input" type="password" name="login_pass" id="login_pass" value="" placeholder="' . __td('your password', TD_THEME_NAME) .'" required>
                            <input type="button" name="login_button" id="login_button" class="wpb_button btn td-login-button" value="' . __td('Log In', TD_THEME_NAME) . '">


                            <div class="td-login-info-text"><a href="#" id="forgot-pass-link">' . __td('Forgot your password?', TD_THEME_NAME) . '</a></div>


                        </div>

                        ' . $users_can_register_form . '

                         <div id="td-forgot-pass-div" class="td-dispaly-none">
                            <div class="td-login-panel-title">' . __td('Recover your password', TD_THEME_NAME) .'</div>
                            <input class="td-login-input" type="text" name="forgot_email" id="forgot_email" placeholder="' . __td('your email', TD_THEME_NAME) .'" value="" required>
                            <input type="button" name="forgot_button" id="forgot_button" class="wpb_button btn td-login-button" value="' . __td('Send My Pass', TD_THEME_NAME) . '">
                        </div>




                    </div>
                </div>
                ';
        }
    }//end login window



if (td_util::get_option('tds_top_menu') != 'hide') {
    //shows top menu
    wp_nav_menu(array(
        'theme_location' => 'top-menu',
        'menu_class' => 'top-header-menu',
        'fallback_cb' => 'td_wp_top_menu',
        'container_class' => 'menu-top-container'
    ));

    //if no top menu is set show link to create new menu
    function td_wp_top_menu()
    {
        echo '<ul class="top-header-menu">';
        echo '<li class="menu-item-first"><a href="' . esc_url(home_url('/')) . 'wp-admin/nav-menus.php?action=locations">Click here - to select or create a menu</a></li>';
        echo '</ul>';
    }
}

?>
</div>
