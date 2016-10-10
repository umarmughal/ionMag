/* global jQuery:{} */
/* global tdSmartSidebar:{} */
/* global tdUtil:{} */
/* global tdDetect:{} */
/* global tdPullDown:{} */
/* global tdAnimationScroll:{} */
/* global tdAnimationStack:{} */
/* global tdEvents:{} */
/* global tdAffix:{} */

'use strict';

/**
 * affix menu
 */
tdAffix.init({
    menu_selector: '.td-header-menu-wrap',
    menu_wrap_selector: '.td-header-menu-wrap-full',
    tds_snap_menu: tdUtil.getBackendVar('tds_snap_menu'),
    tds_snap_menu_logo: tdUtil.getBackendVar('tds_logo_on_sticky'),
    menu_affix_height: 48,   // value must be set because it can't be computed at runtime because at the time of td_affix.init() we can have no affixed menu on page
    menu_affix_height_on_mobile: 54
});



/**
 * sidebar init
 */
if (tdUtil.getBackendVar('tds_smart_sidebar') == 'enabled' && tdDetect.isIos === false) {
    jQuery(window).load(function() {
        // find the rows and the sidebars objects and add them to the magic sidebar object array
        jQuery('.td-ss-row').each(function () {
            //@todo check to see if the sidebar + content is pressent
            var td_smart_sidebar_item = new tdSmartSidebar.item();
            td_smart_sidebar_item.sidebar_jquery_obj = jQuery(this).children('.td-pb-span4').find('.wpb_wrapper:first');
            td_smart_sidebar_item.content_jquery_obj = jQuery(this).children('.td-pb-span8').find('.wpb_wrapper:first');
            tdSmartSidebar.add_item(td_smart_sidebar_item);
        });



        // check the page to see if we have smart sidebar classes (.td-ss-main-content and .td-ss-main-sidebar)
        if (jQuery('.td-ss-main-content').length > 0 && jQuery('.td-ss-main-sidebar').length > 0) {
            var td_smart_sidebar_item = new tdSmartSidebar.item();
            td_smart_sidebar_item.sidebar_jquery_obj = jQuery('.td-ss-main-sidebar');
            td_smart_sidebar_item.content_jquery_obj = jQuery('.td-ss-main-content');
            tdSmartSidebar.add_item(td_smart_sidebar_item);
        }

        tdSmartSidebar.td_events_resize();
    });
}







/**
 * parallax effect
 */

// array keeping the tdAnimationScroll.item items used for backstretch
var td_backstretch_items = [];


jQuery(window).ready(function() {

    jQuery('.td-backstretch').each(function (index, element) {

        if (!jQuery(element).hasClass('not-parallax')) {

            var item = new tdAnimationScroll.item();
            item.jqueryObj = jQuery(element);
            item.wrapper_jquery_obj = item.jqueryObj.parent();

            // - ideal translation is when the top of wrapper_jquery_obj is at the top of the view port, the jqueryObj image
            // is also already translated at the top of the view port
            // - the start_value should be item.wrapper_jquery_obj.offset().top + how much the jqueryObj was translated

            tdAnimationScroll.add_item(item);

            // we keep the tdAnimationScroll.item to change operation settings when the viewport is changing
            td_backstretch_items.push(item);

            td_compute_backstretch_item(item);
        }
    });


    jQuery('.td-parallax-header').each(function (index, element) {

        var item = new tdAnimationScroll.item();
        item.jqueryObj = jQuery(element);

        item.add_item_property('move_y', 50, 100, 0, 100, '');
        item.add_item_property('opacity', 50, 100, 1, 0, '');

        item.animation_callback = function () {

            var move_y_property = parseFloat(item.computed_item_properties['move_y']).toFixed();
            var opacity_property = parseFloat(item.computed_item_properties['opacity']);

            item.jqueryObj.css({
                '-webkit-transform': 'translate3d(0px,' + move_y_property + 'px, 0px)',
                'transform': 'translate3d(0px,' + move_y_property + 'px, 0px)'
            });

            item.jqueryObj.css('transform', 'translate3d(0px,' + move_y_property + 'px, 0px)');

            item.jqueryObj.css('opacity', opacity_property);

            item.redraw = false;
        }

        tdAnimationScroll.add_item(item);
    });


    tdAnimationScroll.compute_all_items();




    // load animation stack
    tdAnimationStack.ready_init();
});




/**
 * Function used to register the 'move_y' property for every td_animations_scroll.item item of the td_backstretch_items array.
 * It scales the object image and translate it. At first it is translated so its bottom is at the bottom of the viewport,
 * but considering the backstretch css classes applied
 *
 * @param item tdAnimationScroll.item
 */
function td_compute_backstretch_item(item) {

        // Important! The following variables must be computed after add_item calling function, because they need item.full_height, item.offset_top, etc

        // percent when the object is in initial position
        // Important! It doesn't matter if the document is scrolled
        var initial_percent = (tdEvents.window_innerHeight - item.offset_top) * 100 / (tdEvents.window_innerHeight + item.full_height);

        // percent when the object has its top at the top of the window
        var intermediary_top_percent =  (tdEvents.window_innerHeight) * 100 / (tdEvents.window_innerHeight + item.full_height);


        // IMPORTANT! We suppose the item.offset_top is positive


        // the value used to compute the scale_factor
        // Important! It can be any value
        var scale_seed = item.offset_top / 4;

        // if item.offset_top is zero, we set the scale_seed at a custom value
        if (scale_seed == 0) {
            scale_seed = 100;
        }

        // the start_value is half of the scale_seed, so the object [image] is translated as its bottom is at the bottom of its view
        var start_value = - scale_seed / 2;


        // DO NOT DELETE THE NEXT CODE LINES. The right value would be the next, but the divide operation does not have 100% accuracy, so we increase the interval
        // and so we are sure the object is not translated more than needed when is at the top of the window
        //
        // When the top of the view is at the top of the window, the object [image] must be already translated at the top of the window.
        //
        //var end_value = ((100 - initial_percent) * scale_seed) / (intermediary_top_percent - initial_percent);;
        //
        //or actually
        //
        //var end_value = ((100 - initial_percent) * (item.offset_top / 2)) / (intermediary_top_percent - initial_percent);;

        var end_value = ((100 - initial_percent) * (scale_seed / 1.2)) / (intermediary_top_percent - initial_percent);

        // fix for firefox. It rounds up and loose 1 pixel
        start_value += 0.5;


        // if there already exists a 'move_y' property, it is removed
        item.remove_item_property('move_y');

        item.add_item_property('move_y', initial_percent, 100, start_value, end_value, '');


        var scale_factor = parseFloat(1 + Math.abs(scale_seed) / item.full_height).toFixed(2);


        // if there's already registered an 'animation_callback' function, it is removed
        delete item.animation_callback;

        item.animation_callback = function () {

            var property_value = parseFloat(item.computed_item_properties['move_y']).toFixed();

            item.jqueryObj.css({
                'left': '50%',
                '-webkit-transform': 'translate3d(-50%,' + property_value + 'px, 0px) scale(' + scale_factor + ',' + scale_factor + ')',
                'transform': 'translate3d(-50%,' + property_value + 'px, 0px) scale(' + scale_factor + ',' + scale_factor + ')'
            });

            item.redraw = false;
        };
}
