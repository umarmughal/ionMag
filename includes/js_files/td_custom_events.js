/* td_custom_events.js - handles the booster td_events that require throttling
 * v 1.0 - wp_011
 */

"use strict";

var td_custom_events = {


    /**
     * - callback real scroll called from td_events
     * @private
     */
    _callback_scroll: function _callback_scroll() {
        td_animation_scroll.compute_all_items();
    },


    /**
     * - callback real resize called from td_events
     * @private
     */
    _callback_resize: function _callback_resize() {

    },


    /**
     * - callback lazy scroll called from td_events at 100ms
     * @private
     */
    _lazy_callback_scroll_100: function _lazy_callback_scroll_100() {
        if (td_animation_stack.activated === true) {
            td_animation_stack.td_events_scroll();
        }
    },


    /**
     * - callback lazy scroll called from td_events at 500ms
     * @private
     */
    _lazy_callback_scroll_500: function _lazy_callback_scroll_500() {

    },



    /**
     * - callback lazy resize called from td_events at 100ms
     * @private
     */
    _lazy_callback_resize_100: function _lazy_callback_resize_100() {
        td_pulldown.td_events_resize();
        td_backstr.td_events_resize();
        td_animation_scroll.td_events_resize();
    },


    /**
     * - callback lazy resize called from td_events at 500ms
     * @private
     */
    _lazy_callback_resize_500: function _lazy_callback_resize_500() {
        if (td_animation_stack.activated === true) {
            td_animation_stack.td_events_resize();
        }

        // - every td_animation_scroll.item item of the td_backstretch_items array must be reinitialized and repositioned for parallax effect
        for (var i = 0; i < td_backstretch_items.length; i++) {
            td_animation_scroll.reinitialize_item(td_backstretch_items[i], true);
            td_compute_backstretch_item(td_backstretch_items[i]);

            // compute_all_items is used instead, for requestAnimationFrame
            //td_animation_scroll.compute_item(td_backstretch_items[i]);
        }

        // for better performance it's used td_animation_scroll.compute_all_items, because it uses requestAnimationFrame
        td_animation_scroll.compute_all_items();
    }
};
