
    <div class="td-footer-outer-wrapper">
        <!-- Footer -->
        <?php
        if (td_util::get_option('tds_footer') != 'no') {
            td_api_footer_template::_helper_show_footer();
        }
        ?>


        <!-- Sub Footer -->
        <?php if (td_util::get_option('tds_sub_footer') != 'no') { ?>
            <div class="td-sub-footer-container">
                <div class="td-container">
                    <div class="td-pb-row">
                        <div class="td-pb-span12 td-sub-footer-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                                'menu_class'=> 'td-subfooter-menu',
                                'fallback_cb' => 'td_wp_footer_menu'
                            ));

                            //if no menu
                            function td_wp_footer_menu() {
                                //do nothing?
                            }
                            ?>
                        </div>

                        <div class="td-pb-span12 td-sub-footer-copy">
                            <?php
                            $tds_footer_copyright = stripslashes(td_util::get_option('tds_footer_copyright'));
                            $tds_footer_copy_symbol = td_util::get_option('tds_footer_copy_symbol');

                            //show copyright symbol
                            if ($tds_footer_copy_symbol == '') {
                                echo '&copy; ';
                            }

                            echo $tds_footer_copyright;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div><!--close td-outer-wrap-->

<?php wp_footer(); ?>

</body>
</html>