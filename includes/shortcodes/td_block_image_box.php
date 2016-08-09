<?php
class td_block_image_box extends td_block {


	function render($atts, $content = null) {
		parent::render($atts);

		extract(shortcode_atts(
			array(
				'image_title_item0' => '',
				'custom_url_item0' => '',
				'open_in_new_window_item0' => '',
				'image_item0' => '',

				'image_title_item1' => '',
				'custom_url_item1' => '',
				'open_in_new_window_item1' => '',
				'image_item1' => '',

				'image_title_item2' => '',
				'custom_url_item2' => '',
				'open_in_new_window_item2' => '',
				'image_item2' => '',

				'image_title_item3' => '',
				'custom_url_item3' => '',
				'open_in_new_window_item3' => '',
				'image_item3' => '',

			), $atts));

		$ref_var = 'image_item';

		$items = array();
		for ($i = 0; $i < 4; $i++ ) {
			if ( ! empty( ${$ref_var . $i})) {
				$items[] = array(
					'image_title' => ${'image_title_item' . $i},
					'custom_url' => ${'custom_url_item' . $i},
					'open_in_new_window' => ${'open_in_new_window_item' . $i},
					'image' => ${'image_item' . $i}
				);
			}
		}

		$buffy = '';
		$buffy .= '<div class="' . $this->get_block_classes(array('td_block_image_box')) . '" ' . $this->get_block_html_atts() . '>';

		//get the block js
		$buffy .= $this->get_block_css();

		// block title wrap
		$buffy .= '<div class="td-block-title-wrap">';
			$buffy .= $this->get_block_title();
		$buffy .= '</div>';

		$td_block_layout = new td_block_layout();

		switch(count($items)) {
			case 1:
				$buffy .= $td_block_layout->open12();
				foreach($items as $item) {

					$target = '';

					if ( '' !== $item[ 'open_in_new_window' ] ) {
						$target = ' target="_blank" ';
					}

					$buffy .= '<div class="td-custom td-big-image">';

					$buffy .= '<div class="td-custom-image">';
					$buffy .= '<a href="' . $item[ 'custom_url' ] . '" ' . $target . ' rel="bookmark" title="' . $item[ 'image_title' ] . '">';
					$buffy .= '<img src="' . $item[ 'image' ] . '">';
					$buffy .= '</a>';
					$buffy .= '</div>';

					$buffy .= '<div class="td-custom-title">';
					$buffy .= '<h3 class="entry-title"><a href="' . $item[ 'custom_url' ] . '">' . $item[ 'image_title' ] . '</a></h3>';
					$buffy .= '</div>';

					$buffy .= '</div>';
				}
				$buffy .= $td_block_layout->close12();
				break;

			case 2:
				$buffy .= $td_block_layout->open_row();
				foreach($items as $item) {
					$buffy .= $td_block_layout->open6();

					$target = '';

					if ( '' !== $item[ 'open_in_new_window' ] ) {
						$target = ' target="_blank" ';
					}

					$buffy .= '<div class="td-custom td-medium-image">';

					$buffy .= '<div class="td-custom-image">';
					$buffy .= '<a href="' . $item[ 'custom_url' ] . '" ' . $target . ' rel="bookmark" title="' . $item[ 'image_title' ] . '">';
					$buffy .= '<img src="' . $item[ 'image' ] . '">';
					$buffy .= '</a>';
					$buffy .= '</div>';

					$buffy .= '<div class="td-custom-title">';
					$buffy .= '<h3 class="entry-title"><a href="' . $item[ 'custom_url' ] . '">' . $item[ 'image_title' ] . '</a></h3>';
					$buffy .= '</div>';

					$buffy .= '</div>';

					$buffy .= $td_block_layout->close6();
				}
				$buffy .= $td_block_layout->close_row();
				break;

			case 3:
				$buffy .= $td_block_layout->open_row();
				foreach($items as $item) {
					$buffy .= $td_block_layout->open4();

					$target = '';

					if ( '' !== $item[ 'open_in_new_window' ] ) {
						$target = ' target="_blank" ';
					}

					$buffy .= '<div class="td-custom td-medium-image">';

					$buffy .= '<div class="td-custom-image">';
					$buffy .= '<a href="' . $item[ 'custom_url' ] . '" ' . $target . ' rel="bookmark" title="' . $item[ 'image_title' ] . '">';
					$buffy .= '<img src="' . $item[ 'image' ] . '">';
					$buffy .= '</a>';
					$buffy .= '</div>';

					$buffy .= '<div class="td-custom-title">';
					$buffy .= '<h3 class="entry-title"><a href="' . $item[ 'custom_url' ] . '">' . $item[ 'image_title' ] . '</a></h3>';
					$buffy .= '</div>';

					$buffy .= '</div>';

					$buffy .= $td_block_layout->close4();
				}
				$buffy .= $td_block_layout->close_row();
				break;

			case 4:
				$buffy .= $td_block_layout->open_row();
				foreach($items as $item) {
					$buffy .= '<div class="td-pb-span3">';

					$target = '';

					if ( '' !== $item[ 'open_in_new_window' ] ) {
						$target = ' target="_blank" ';
					}

					$buffy .= '<div class="td-custom td-tiny-image">';

					$buffy .= '<div class="td-custom-image">';
					$buffy .= '<a href="' . $item[ 'custom_url' ] . '" ' . $target . ' rel="bookmark" title="' . $item[ 'image_title' ] . '">';
					$buffy .= '<img src="' . $item[ 'image' ] . '">';
					$buffy .= '</a>';
					$buffy .= '</div>';

					$buffy .= '<div class="td-custom-title">';
					$buffy .= '<h3 class="entry-title"><a href="' . $item[ 'custom_url' ] . '">' . $item[ 'image_title' ] . '</a></h3>';
					$buffy .= '</div>';

					$buffy .= '</div>';

					$buffy .= '</div>';
				}
				$buffy .= $td_block_layout->close_row();
				break;

			default:
				$buffy .= $td_block_layout->open_row();

				$index = 0;
				while($index < 2) {
					$buffy .= $td_block_layout->open6();

					$buffy .= '<div class="td-custom td-medium-image">';

					$buffy .= '<div class="td-custom-image">';
					$buffy .= '<a href="#" rel="bookmark" title="Custom title">';
					$buffy .= '<img src="' . get_template_directory_uri() . '/images/no-thumb/td_640x400.png">';
					$buffy .= '</a>';
					$buffy .= '</div>';

					$buffy .= '<div class="td-custom-title">';
					$buffy .= '<h3 class="entry-title"><a href="#">Image title</a></h3>';
					$buffy .= '</div>';

					$buffy .= '</div>';

					$buffy .= $td_block_layout->close6();

					$index++;
				}
				$buffy .= $td_block_layout->close_row();
				break;
		}


		$buffy .= '</div>';


		return $buffy;
	}
}