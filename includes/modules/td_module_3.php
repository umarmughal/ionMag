<?php

class td_module_3 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>" <?php echo $this->get_item_scope();?>>
            <div class="td-module-image td-module-image-float">
                <?php echo $this->get_image('td_100x70');?>
            </div>

            <div class="td-item-details td-no-comment td-category-small">
                <?php echo $this->get_title();?>

                <div class="td-module-meta-info">
                    <?php if (td_util::get_option('tds_category_module_3') == 'yes') { echo $this->get_category(); }?>
                    <?php echo $this->get_date();?>
                </div>
            </div>

            <?php echo $this->get_quotes_on_blocks();?>
            <div class="clearfix"></div>
        </div>

        <?php return ob_get_clean();
    }
}