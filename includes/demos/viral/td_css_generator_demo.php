<?php
/**
 * Created by ra.
 * Date: 9/2/2015
 * CSS generator for this specific demo
 */


function td_css_demo_gen() {
	$td_demo_custom_css = "
	<style>

		/* @theme_color */
		.td-viral .td-main-content .block-title span {
			background-color: @theme_color;
		}
		.td-viral .td_ajax_load_more:hover {
		    -webkit-box-shadow: inset 0 0 0 3px @theme_color;
            -moz-box-shadow: inset 0 0 0 3px @theme_color;
            box-shadow: inset 0 0 0 3px @theme_color;
		}
		
	</style>
	";

	$td_demo_css_compiler = new td_css_compiler($td_demo_custom_css);

	$td_demo_css_compiler->load_setting('theme_color');
	$td_demo_css_compiler->load_setting('submenu_hover_color');

	return $td_demo_css_compiler->compile_css();
}
