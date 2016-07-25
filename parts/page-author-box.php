<?php

/*  ----------------------------------------------------------------------------
    The author box - used only on the author.php template ( ! this is not the same box as the one used in the single post template ! )
 */

global $part_cur_auth_obj;



?>
<div class="author-box-wrap td-author-page">
    <div class="td-author-title-avatar">
        <h1 class="entry-title td-page-title">
            <span><?php echo $part_cur_auth_obj->display_name; ?></span>
        </h1>

        <?php  echo get_avatar($part_cur_auth_obj->user_email, '60'); ?>
    </div>

    <div class="desc">
        <div class="td-author-counters">
            <span class="td-author-post-count">
                <?php echo '<span class="count">' . count_user_posts($part_cur_auth_obj->ID) . '</span>' . __td('posts', TD_THEME_NAME);?>
            </span>

            <span class="td-author-comments-count">
                <?php
                $comment_count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) AS total FROM $wpdb->comments WHERE comment_approved = 1 AND user_id = %d", $part_cur_auth_obj->ID));

                echo '<span class="count">' .  $comment_count . '</span>' . __td('comments', TD_THEME_NAME);
                ?>
            </span>

        </div>

        <?php
        if (!empty($part_cur_auth_obj->user_url)) {
            echo '<div class="td-author-url"><a href="' . esc_url($part_cur_auth_obj->user_url) . '">' . esc_url($part_cur_auth_obj->user_url) . '</a></div>';
        } ?>

        <div class="td-author-social">
            <?php

            foreach (td_social_icons::$td_social_icons_array as $td_social_id => $td_social_name) {
                //echo get_the_author_meta($td_social_id) . '<br>';
                $authorMeta = get_the_author_meta($td_social_id, $part_cur_auth_obj->ID);
                if (!empty($authorMeta)) {
                    echo td_social_icons::get_icon($authorMeta, $td_social_id, true );
                }
            }
            ?>
        </div>
    </div>

    <div class="td-author-description">
        <?php echo $part_cur_auth_obj->description; ?>
    </div>

    <div class="clearfix"></div>
</div>