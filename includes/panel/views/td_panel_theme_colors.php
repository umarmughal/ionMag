<!-- THEME COLORS -->
<?php
    echo td_panel_generator::ajax_box('GENERAL theme colors', array(
        'td_ajax_calling_file' => basename(__FILE__),
        'td_ajax_box_id' => 'td_general_theme_colors'
        )
    );
?>



<hr>
<div class="td-section-separator">Header</div>




<!-- TOP MENU -->
<?php
echo td_panel_generator::ajax_box('Top menu', array(
        'td_ajax_calling_file' => basename(__FILE__),
        'td_ajax_box_id' => 'td_top_menu'
    )
);
?>


<!-- MAIN MENU -->
<?php
echo td_panel_generator::ajax_box('Main menu', array(
        'td_ajax_calling_file' => basename(__FILE__),
        'td_ajax_box_id' => 'td_main_menu'
    )
);
?>


<!-- MOBILE MENU -->
<?php
echo td_panel_generator::ajax_box('Mobile menu', array(
        'td_ajax_calling_file' => basename(__FILE__),
        'td_ajax_box_id' => 'td_mobile_menu'
    )
);
?>



<!-- HEADER COLOR -->
<?php echo td_panel_generator::box_start('Header', false); ?>

<!-- Header color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">HEADER BACKGROUND COLOR</span>
        <p>This refers to Logo and Ad background color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_header_wrap_color',
            'default_color' => ''
        ));
        ?>
    </div>
</div>

<?php echo td_panel_generator::box_end();?>


<hr>
<div class="td-section-separator">Footer</div>


<!-- FOOTER -->
<?php echo td_panel_generator::box_start('Footer', false); ?>

<!-- FOOTER color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">BACKGROUND COLOR</span>
        <p>Select footer background color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_footer_color',
            'default_color' => '#222222'
        ));
        ?>
    </div>
</div>

<!-- FOOTER text color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">TEXT COLOR</span>
        <p>Select footer text color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_footer_text_color',
            'default_color' => '#ffffff'
        ));
        ?>
    </div>
</div>

<?php echo td_panel_generator::box_end();?>



<!-- SUB FOOTER -->
<?php echo td_panel_generator::box_start('Sub-footer', false); ?>

<!-- FOOTER bottom color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">BACKGROUND COLOR</span>
        <p>Select sub footer bottom background color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_footer_bottom_color',
            'default_color' => '#0d0d0d'
        ));
        ?>
    </div>
</div>


<!-- FOOTER bottom text color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">TEXT COLOR</span>
        <p>Select sub footer bottom text color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_footer_bottom_text_color',
            'default_color' => '#cccccc'
        ));
        ?>
    </div>
</div>

<?php echo td_panel_generator::box_end();?>


<hr>
<div class="td-section-separator">Content</div>


<!-- POSTS PAGE -->
<?php
echo td_panel_generator::ajax_box('Posts', array(
        'td_ajax_calling_file' => basename(__FILE__),
        'td_ajax_box_id' => 'td_posts'
    )
);
?>




<!-- PAGES COLORS -->
<?php
echo td_panel_generator::ajax_box('Pages', array(
        'td_ajax_calling_file' => basename(__FILE__),
        'td_ajax_box_id' => 'td_pages'
    )
);
?>
