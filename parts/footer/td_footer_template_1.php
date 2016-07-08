<div class="td-footer-wrapper td-container-wrap">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12">
                <?php
                // ad spot
                echo td_global_blocks::get_instance('td_block_ad_box')->render(array('spot_id' => 'footer_top'));
                ?>
            </div>
        </div>

        <div class="td-pb-row">
            <?php locate_template('parts/footer/td_footer_extra_bottom.php', true); ?>
        </div>
    </div>
</div>