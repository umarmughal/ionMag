<!--
Header style 2
-->

<div class="td-header-wrap td-header-style-2">
    
    <div class="td-header-top-menu">
        <div class="td-container">
            <?php td_api_top_bar_template::_helper_show_top_bar() ?>
        </div>
    </div>

    <div class="td-banner-wrap">
        <div class="td-container td-header-row">
            <div class="td-header-sp-logo">
                <?php locate_template('parts/header/logo-h1.php', true);?>
            </div>
<!--            <div class="td-header-sp-recs">-->
<!--                --><?php //locate_template('parts/header/ads.php', true); ?>
<!--            </div>-->
        </div>
    </div>

    <div class="td-header-menu-wrap">
        <div class="td-container td-header-row td-header-main-menu">
            <?php locate_template('parts/header/header-menu.php', true);?>
        </div>
    </div>

</div>