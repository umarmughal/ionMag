/* td_custom_events.js - handles the booster td_events that require throttling
 * v 1.0 - wp_011
 */

/* global tdAnimationScroll:{} */
/* global tdAnimationStack:{} */
/* global tdPullDown:{} */
/* global tdBackstr:{} */
/* global td_backstretch_items:Array */
/* global td_compute_backstretch_item:Function */

/* global setMenuMinHeight:Function */

var tdCustomEvents = {};

(function(){

    'use strict';

    tdCustomEvents = {


        /**
         * - callback real scroll called from td_events
         * @private
         */
        _callback_scroll: function() {
            tdAnimationScroll.compute_all_items();
        },


        /**
         * - callback real resize called from td_events
         * @private
         */
        _callback_resize: function() {

        },


        /**
         * - callback lazy scroll called from td_events at 100ms
         * @private
         */
        _lazy_callback_scroll_100: function() {
            if ( true === tdAnimationStack.activated ) {
                tdAnimationStack.td_events_scroll();
            }
        },


        /**
         * - callback lazy scroll called from td_events at 500ms
         * @private
         */
        _lazy_callback_scroll_500: function() {

        },



        /**
         * - callback lazy resize called from td_events at 100ms
         * @private
         */
        _lazy_callback_resize_100: function() {
            tdPullDown.td_events_resize();
            tdBackstr.td_events_resize();
            tdAnimationScroll.td_events_resize();
        },


        /**
         * - callback lazy resize called from td_events at 500ms
         * @private
         */
        _lazy_callback_resize_500: function() {
            if ( true === tdAnimationStack.activated ) {
                tdAnimationStack.td_events_resize();
            }

            // - every tdAnimationScroll.item item of the td_backstretch_items array must be reinitialized and repositioned for parallax effect
            for ( var i = 0; i < td_backstretch_items.length; i++ ) {
                tdAnimationScroll.reinitialize_item( td_backstretch_items[ i ], true );
                td_compute_backstretch_item( td_backstretch_items[ i ] );

                // compute_all_items is used instead, for requestAnimationFrame
                //tdAnimationScroll.compute_item(td_backstretch_items[i]);
            }

            // for better performance it's used tdAnimationScroll.compute_all_items, because it uses requestAnimationFrame
            tdAnimationScroll.compute_all_items();

            // @todo It will be refactorized when td_site will be
            setMenuMinHeight();
        }
    };
})();
