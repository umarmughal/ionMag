<?php

class td_module_5 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope();?>>
            <div class="td-module-image td-module-image-abs">
                <?php echo $this->get_image('td_250x184');?>
            </div>

            <div class="td-item-details td-category-small">
                <?php if (td_util::get_option('tds_category_module_5') == 'yes') { echo $this->get_category(); }?>
                
                <?php echo $this->get_title();?>

                <div class="td-module-meta-info">
                    <?php echo $this->get_date();?>
                    <?php echo $this->get_comments();?>
                </div>

                <div class="td-excerpt">
                    <?php echo $this->get_excerpt();?>
                </div>
            </div>

            <?php echo $this->get_quotes_on_blocks();?>
        </div>

        <?php return ob_get_clean();
    }
}