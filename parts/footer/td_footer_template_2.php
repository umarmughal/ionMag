<div class="td-footer-wrapper td-footer-template-2">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span4">
                <?php
                td_util::vc_set_column_number(1);

                echo td_global_blocks::get_instance('td_block_3')->render(array(
                    'custom_title' => __td('EDITOR PICKS', TD_THEME_NAME),
                    'limit' => 2,
                    'sort' => 'featured'
                ));
                ?>
                <?php dynamic_sidebar('Footer 1'); ?>
            </div>

            <div class="td-pb-span4">
                <?php
                td_util::vc_set_column_number(1);

                echo td_global_blocks::get_instance('td_block_3')->render(array(
                    'custom_title' => __td('POPULAR POSTS', TD_THEME_NAME),
                    'limit' => 2,
                    'sort' => 'popular'
                ));
                ?>
                <?php dynamic_sidebar('Footer 2'); ?>
            </div>

            <div class="td-pb-span4">
                <?php
                td_util::vc_set_column_number(1);

                echo td_global_blocks::get_instance('td_block_popular_categories')->render(array(
                    'custom_title' => __td('POPULAR CATEGORY', TD_THEME_NAME),
                    'limit' => 6
                ));
                ?>
                <?php dynamic_sidebar('Footer 3'); ?>
            </div>
        </div>

        <div class="td-pb-row">
            <?php locate_template('parts/footer/td_footer_extra_bottom.php', true); ?>
        </div>
    </div>
</div>