<?php
class td_block_author extends td_block {


    function render($atts, $content = null) {
        parent::render($atts);

        extract(shortcode_atts(
            array(
                'author_id' => '',
                'author_url' => '',
                'open_in_new_window' => ''
            ), $atts));

        $td_target = '';
        if (!empty($open_in_new_window)) {
            $td_target = ' target="_blank"';
        }

        $td_author = get_user_by( 'id', $author_id );


        $buffy = '';
        $buffy .= '<div class="' . $this->get_block_classes(array('td_author')) . '" ' . $this->get_block_html_atts() . '>';


        //get the block js
        $buffy .= $this->get_block_css();

        $buffy .= $this->get_block_title();


        $buffy .= '<div class="td_mod_wrap td-pb-padding-side">';
        $buffy .= '<a href="' . get_author_posts_url($td_author->ID) . '">' . get_avatar($td_author->user_email, '196') . '</a>';
        $buffy .= '<div class="item-details">';

        $buffy .= '<div class="td-author-name">';
        $buffy .= '<a href="' . get_author_posts_url($td_author->ID) . '">' . $td_author->display_name . '</a>';
        $buffy .= '</div>';

        $buffy .= '<div class="td-author-description">';
        $buffy .= $td_author->description;
        $buffy .= '</div>';

        $buffy .= '<div class="td-author-page">';
        $buffy .= '<a href="' . $author_url . '"' . $td_target . '>' . __td('About me', TD_THEME_NAME) . '</a>';
        $buffy .= '</div>';

        $buffy .= '</div>';

        $buffy .= '</div>';

        $buffy .= '</div>';


        return $buffy;

    }
}