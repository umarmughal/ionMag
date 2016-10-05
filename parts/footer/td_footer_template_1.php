<div class="td-footer-wrapper">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span4">
                <?php
                    td_global::vc_set_custom_column_number(1);
                    dynamic_sidebar('Footer 1');
                ?>
            </div>

            <div class="td-pb-span4">
                <?php
                td_global::vc_set_custom_column_number(1);
                    dynamic_sidebar('Footer 2');
                ?>
            </div>

            <div class="td-pb-span4">
                <?php
                td_global::vc_set_custom_column_number(1);
                    dynamic_sidebar('Footer 3');
                ?>
            </div>
        </div>

        <div class="td-pb-row">
            <?php locate_template('parts/footer/td_footer_extra_bottom.php', true); ?>
        </div>
    </div>
</div>