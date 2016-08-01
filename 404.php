<?php

//set the template id, used to get the template specific settings
$template_id = '404';

td_global::$current_template = $template_id;

td_global::$load_featured_img_from_template = 'full';

//prepare the loop variables
global $loop_module_id, $loop_sidebar_position;
$loop_sidebar_position = 'no_sidebar';
$loop_module_id = td_util::get_option('tds_' . $template_id . '_page_layout', 1); //module 1 is default




get_header();

?>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-span12">
                <div class="td-404-head">
                    <div class="td-404-title">
                        <?php _etd('404', TD_THEME_NAME); ?>
                    </div>

                    <div class="td-404-sub-title">
                        <?php _etd('Oops!', TD_THEME_NAME); ?>
                    </div>

                    <div class="td-404-sub-sub-title">
                        <?php _etd('Sorry, but the page you are looking for doesn’t exist. Please use search for help', ''); ?>
                    </div>

                    <div class="search-page-wrap">
                        <form method="get" class="td-search-form-widget" action="<?php echo esc_url(home_url( '/' )); ?>">
                            <div role="search">
                                <input class="td-widget-search-input" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                                <input class="wpb_button wpb_btn-inverse btn" type="submit" id="searchsubmit" value="<?php _etd('Search', TD_THEME_NAME)?>" />
                            </div>
                        </form>
                    </div>
                </div>

                <?php


                $args = array(
                    'post_type'=> 'post',
                    'showposts' => 3
                );
                query_posts($args);


                $td_loop_block_module = td_util::get_option('tds_404_page_layout');
                //$td_loop_block_module


                locate_template('loop.php', true);
                //get_template_part('category', 'slider');
                wp_reset_query();

                ?>
            </div>
        </div> <!-- /.td-container -->
    </div> <!-- /.td-main-content-wrap -->

<?php
get_footer();
?>