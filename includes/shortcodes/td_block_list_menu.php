<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 19.08.2016
 * Time: 13:54
 */

class td_block_list_menu extends td_block {

	private $atts = array();

	function render($atts, $content = null){

		self::disable_loop_block_features();

		parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

		$this->atts = shortcode_atts(
			array(
				'menu_id' => ''
			), $atts);

		$buffy = ''; //output buffer


		$buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';

		//get the block js
		$buffy .= $this->get_block_css();

		//get the js for this block
		$buffy .= $this->get_block_js();

		// block title wrap
		$buffy .= '<div class="td-block-title-wrap">';
		$buffy .= $this->get_block_title(); //get the block title
		$buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
		$buffy .= '</div>';

		$buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
		$buffy .= $this->inner(wp_get_nav_menu_items($atts['menu_id']));  //inner content of the block
		$buffy .= '</div>';

		//get the ajax pagination for this block
		$buffy .= $this->get_block_pagination();
		$buffy .= '</div> <!-- ./block -->';
		return $buffy;
	}

	function inner($posts, $td_column_number = '') {
		$buffy = '';

		$td_block_layout = new td_block_layout();
//		if (empty($td_column_number)) {
//			$td_column_number = td_util::vc_get_column_number(); // get the column width of the block from the page builder API
//		}
//
//		$td_post_count = 1; // the number of items rendered

		if (!empty($posts)) {
			$buffy .= '<ul>';

			foreach ($posts as $post) {
				$buffy .= '<li>' . $post->title . '</li>';
			}

			$buffy .= '</ul>';
		}
		$buffy .= $td_block_layout->close_all_tags();
		return $buffy;
	}
}