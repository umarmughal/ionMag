<?php
class td_block_custom extends td_block {


    function render($atts, $content = null) {
        parent::render($atts);

        extract(shortcode_atts(
            array(
                'image_title_item1' => '',
                'custom_url_item1' => '',
                'open_in_new_window_item1' => '',
                'image_title_item2' => '',
                'custom_url_item2' => '',
                'open_in_new_window_item2' => '',
                'image_title_item3' => '',
                'custom_url_item3' => '',
                'open_in_new_window_item3' => '',
                'image_title_item4' => '',
                'custom_url_item4' => '',
                'open_in_new_window_item4' => ''
            ), $atts));

        $items = array(
            array(
                $image_title_item1, $custom_url_item1, $open_in_new_window_item1
            ),
            array(
                $image_title_item2, $custom_url_item2, $open_in_new_window_item2
            ),
            array(
                $image_title_item3, $custom_url_item3, $open_in_new_window_item3
            ),
            array(
                $image_title_item4, $custom_url_item4, $open_in_new_window_item4
            )
        );

        $items2 = array();

        $td_item_count = 0;
        foreach($items as $item)
            if(!empty($item[0])) {
                $td_item_count++;
                $items2[]=$item;
            }


        $buffy = '';
        $buffy .= '<div class="' . $this->get_block_classes(array('td_block_custom')) . '" ' . $this->get_block_html_atts() . '>';

        //get the block js
        $buffy .= $this->get_block_css();

        $buffy .= $this->get_block_title();


        $td_block_layout = new td_block_layout();

        switch($td_item_count) {
            case '1':
                $buffy .= $td_block_layout->open12();
                foreach($items2 as $item) {
                    $buffy .= '<div class="td-custom td-big-image">';

                    $buffy .= '<div class="td-custom-image">';
                    $buffy .= '<a href="' . $item[1] . '" rel="bookmark" title="' . $item[0] . '">';
                    $buffy .= '<img src="http://192.168.0.178/wp_012/wp-content/themes/012/images/no-thumb/td_640x400.png">';
                    $buffy .= '</a>';
                    $buffy .= '</div>';

                    $buffy .= '<div class="td-custom-title">';
                    $buffy .= '<h3 class="entry-title"><a href="' . $item[1] . '">' . $item[0] . '</a></h3>';
                    $buffy .= '</div>';

                    $buffy .= '</div>';
                }
                $buffy .= $td_block_layout->close12();
                break;
            case '2':
                $buffy .= $td_block_layout->open_row();
                foreach($items2 as $item) {
                    $buffy .= $td_block_layout->open6();

                    $buffy .= '<div class="td-custom td-medium-image">';

                    $buffy .= '<div class="td-custom-image">';
                    $buffy .= '<a href="' . $item[1] . '" rel="bookmark" title="' . $item[0] . '">';
                    $buffy .= '<img src="http://192.168.0.178/wp_012/wp-content/themes/012/images/no-thumb/td_640x400.png">';
                    $buffy .= '</a>';
                    $buffy .= '</div>';

                    $buffy .= '<div class="td-custom-title">';
                    $buffy .= '<h3 class="entry-title"><a href="' . $item[1] . '">' . $item[0] . '</a></h3>';
                    $buffy .= '</div>';

                    $buffy .= '</div>';

                    $buffy .= $td_block_layout->close6();
                }
                $buffy .= $td_block_layout->close_row();
                break;
            case '3':
                $buffy .= $td_block_layout->open_row();
                foreach($items2 as $item) {
                    $buffy .= $td_block_layout->open4();

                    $buffy .= '<div class="td-custom td-medium-image">';

                    $buffy .= '<div class="td-custom-image">';
                    $buffy .= '<a href="' . $item[1] . '" rel="bookmark" title="' . $item[0] . '">';
                    $buffy .= '<img src="http://192.168.0.178/wp_012/wp-content/themes/012/images/no-thumb/td_300x220.png">';
                    $buffy .= '</a>';
                    $buffy .= '</div>';

                    $buffy .= '<div class="td-custom-title">';
                    $buffy .= '<h3 class="entry-title"><a href="' . $item[1] . '">' . $item[0] . '</a></h3>';
                    $buffy .= '</div>';

                    $buffy .= '</div>';

                    $buffy .= $td_block_layout->close4();
                }
                $buffy .= $td_block_layout->close_row();
                break;
            case '4':
                $buffy .= $td_block_layout->open_row();
                foreach($items2 as $item) {
                    $buffy .= '<div class="td-pb-span3">';

                    $buffy .= '<div class="td-custom td-tiny-image">';

                    $buffy .= '<div class="td-custom-image">';
                    $buffy .= '<a href="' . $item[1] . '" rel="bookmark" title="' . $item[0] . '">';
                    $buffy .= '<img src="http://192.168.0.178/wp_012/wp-content/themes/012/images/no-thumb/td_300x220.png">';
                    $buffy .= '</a>';
                    $buffy .= '</div>';

                    $buffy .= '<div class="td-custom-title">';
                    $buffy .= '<h3 class="entry-title"><a href="' . $item[1] . '">' . $item[0] . '</a></h3>';
                    $buffy .= '</div>';

                    $buffy .= '</div>';

                    $buffy .= '</div>';
                }
                $buffy .= $td_block_layout->close_row();
                break;
        }


        $buffy .= '</div>';


        return $buffy;
    }
}