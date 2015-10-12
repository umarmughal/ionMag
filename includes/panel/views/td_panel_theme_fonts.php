<?php echo td_panel_generator::box_start('Documentation on how to use custom fonts');?>



    <!-- info text -->
    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <p>You can select from here what character subsets will be loaded for each google font. The character subset will be loaded only if the font supports the specific glyphs. Try to enable only the subsets that you use because the site will load slower with each additional subset.</p>
            <p><a href="?page=td_theme_panel&td_page=td_view_custom_fonts" target="_blank" class="td-big-button">Add custom fonts / Change google fonts settings</a></p>
        </div>
    </div>



<?php echo td_panel_generator::box_end();?>

<?php
foreach (td_global::$typography_settings_list as $panel_section => $font_settings_array) {
    echo td_panel_generator::ajax_box($panel_section,
        array(
            'td_ajax_calling_file' => basename(__FILE__),
            'td_ajax_box_id' => 'td_get_font_section_by_section_id',
            'section_name' => $panel_section,
            'td_ajax_view' => 'td_theme_fonts'
        )
    );
}