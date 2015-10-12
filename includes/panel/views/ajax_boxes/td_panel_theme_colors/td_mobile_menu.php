<!-- Background color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">MOBILE MENU - BACKGROUND COLOR</span>
        <p>Select menu background color</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_mobile_menu_color',
            'default_color' => '#222222'
        ));
        ?>
    </div>
</div>

<!-- Icons color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">MOBILE MENU - ICONS COLOR</span>
        <p>Select the icons color for the menu</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_mobile_icons_color',
            'default_color' => '#ffffff'
        ));
        ?>
    </div>
</div>

<!-- Open menu background color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">OPENED MENU - BACKGROUND COLOR</span>
        <p>Select a background color for the opened menu</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_open_background_color',
            'default_color' => '#F5F5F5'
        ));
        ?>
    </div>
</div>

<!-- Open menu borders color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">OPENED MENU - BORDERS COLOR</span>
        <p>Select a border color for the opened menu</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_open_border_color',
            'default_color' => '#E8E8E8'
        ));
        ?>
    </div>
</div>

<!-- Open menu text color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">OPENED MENU - TEXT COLOR</span>
        <p>Select a text color for the opened menu</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_open_text_color',
            'default_color' => '#1E1E1E'
        ));
        ?>
    </div>
</div>

<!-- Open menu text active and hover color -->
<div class="td-box-row">
    <div class="td-box-description">
        <span class="td-box-title">OPENED MENU - ACTIVE/HOVER TEXT COLOR</span>
        <p>Select a text hover/active color for the opened menu</p>
    </div>
    <div class="td-box-control-full">
        <?php
        echo td_panel_generator::color_picker(array(
            'ds' => 'td_option',
            'option_id' => 'tds_open_text_hover_color',
            'default_color' => ''
        ));
        ?>
    </div>
</div>