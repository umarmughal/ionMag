<?php

class td_module_mega_menu extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render($get_block_sub_cats) {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes(); ?>">
            <div class="td-module-image">
                <?php
                if($get_block_sub_cats !== false) {
                    echo $this->get_image('td_260x195');
                } else {
                    echo $this->get_image('td_245x184');
                } ?>
                <div class="td-post-category-wrap"><?php if (td_util::get_option('tds_category_module_mega_menu') == 'yes') { echo $this->get_category(); }?></div>
            </div>

            <div class="td-item-details">
                <?php echo $this->get_title();?>
                <?php echo $this->get_date();?>
            </div>
        </div>
        <?php return ob_get_clean();
    }
}