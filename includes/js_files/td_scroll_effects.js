///**
// * Created by ra on 2/23/2015.
// */
//
//
//jQuery(document).ready(function() {
//
//
//
//
//
//
//    jQuery('.td-scroll-e-text-1').each(function(index, element) {
//
//
//        //alert(jQuery(element).parent().prop('tagName'));
//        if (jQuery(element).parent().prop('tagName').toLowerCase() == 'blockquote') {
//            // add a wrapper to the parent if we have blockqupote
//            jQuery(element).parent().wrap('<div class="td-scroll-e-text-1-wrap"></div>');
//            var wrapper = jQuery(element).parent().parent();
//        } else {
//            // add a wrapper
//            jQuery(element).wrap('<div class="td-scroll-e-text-1-wrap"></div>');
//            var wrapper = jQuery(element).parent();
//        }
//
//
//
//        var item = new td_animation_scroll.item();
//        item.jqueryObj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//
//        item.add_item_property('opacity', 0, 50, 0, 1);
//
//        item.add_item_property('wrapper-bg-opacity', 0, 60, 1, 0);
//
//        item.animation_callback = function() {
//            item.jqueryObj.css('opacity', item.computed_item_properties['opacity']);
//            item.wrapper_jquery_obj.css('background-color', 'rgba(230, 230, 230, ' + item.computed_item_properties['wrapper-bg-opacity'] + ')');
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//    });
//
//
//
//
//
//    function hexToRgb(hex) {
//        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
//        return result ? {
//            r: parseInt(result[1], 16),
//            g: parseInt(result[2], 16),
//            b: parseInt(result[3], 16)
//        } : null;
//    }
//
//
//    jQuery('.td-scroll-e-text-2').each(function(index, element) {
//
//
//        //alert(jQuery(element).parent().prop('tagName'));
//        if (jQuery(element).parent().prop('tagName').toLowerCase() == 'blockquote') {
//            // add a wrapper to the parent if we have blockqupote
//            jQuery(element).parent().wrap('<div class="td-scroll-e-text-2-wrap"></div>');
//            var wrapper = jQuery(element).parent().parent();
//        } else {
//            // add a wrapper
//            jQuery(element).wrap('<div class="td-scroll-e-text-2-wrap"></div>');
//            var wrapper = jQuery(element).parent();
//        }
//
//
//        var parsed_color = hexToRgb('#4db2ec');
//
//
//        var item = new td_animation_scroll.item();
//        item.jqueryObj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//
//        item.add_item_property('opacity', 0, 60, 0.2, 1);
//
//
//        item.add_item_property('wrapper-bg-opacity', 0, 60, 0.5, 0);
//
//        item.animation_callback = function() {
//            item.jqueryObj.css('opacity', item.computed_item_properties['opacity']);
//
//
//
//            item.wrapper_jquery_obj.css('border-color', 'rgba(' + parsed_color.r + ', ' + parsed_color.g + ', ' + parsed_color.b + ', ' + item.computed_item_properties['wrapper-bg-opacity'] + ')');
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//    });
//
//
//
//
//
//
//    /**
//     * image zoom in
//     */
//    jQuery('.td-scroll-e-image-zoom-in').each(function(index, element) {
//
//        // add a wrapper
//        jQuery(element).wrap('<div class="td-scroll-e-image-zoom-out-wrap" style="width:' + jQuery(element).width() + 'px; height:' + jQuery(element).height() + 'px"></div>');
//        var wrapper = jQuery(element).parent();
//
//
//        var item = new td_animation_scroll.item();
//        item.jqueryObj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//        item.add_item_property('scale_3d', 0, 100, 1, 1.8, 'easeInCubic');
//
//        item.animation_callback = function() {
//            item.jqueryObj.css('transform', 'scale3d(' + item.computed_item_properties['scale_3d'] + ', ' + item.computed_item_properties['scale_3d'] + ', 1)');
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//
//    });
//
//
//
//
//    /**
//     * image zoom out
//     */
//    jQuery('.td-scroll-e-image-zoom-out').each(function(index, element) {
//
//        // add a wrapper
//
//        jQuery(element).wrap('<div class="td-scroll-e-image-zoom-out-wrap" style="width:' + jQuery(element).width() + 'px; height:' + jQuery(element).height() + 'px"></div>');
//        var wrapper = jQuery(element).parent();
//
//
//        var item = new td_animation_scroll.item();
//        item.jqueryObj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//        item.add_item_property('scale_3d', 0, 100, 1.8, 1, 'easeOutCubic');
//
//        item.animation_callback = function() {
//            item.jqueryObj.css('transform', 'scale3d(' + item.computed_item_properties['scale_3d'] + ', ' + item.computed_item_properties['scale_3d'] + ', 1)');
//            console.log(item.jqueryObj.width());
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//
//    });
//
//
//    /**
//     * image fixed
//     */
//    jQuery('.td-scroll-e-image-fixed').each(function(index, element) {
//
//        // add a wrapper
//
//        jQuery(element).wrap('<div class="td-scroll-e-image-fixed-wrap" style="width:' + jQuery(element).width() + 'px; height:' + jQuery(element).height() + 'px"></div>');
//        var wrapper = jQuery(element).parent();
//
//
//        var item = new td_animation_scroll.item();
//        item.jqueryObj = jQuery(element);
//        item.wrapper_jquery_obj = wrapper;
//
//        item.add_item_property('move_y', 0, 100, jQuery(element).height() / 2,0, '');
//
//        item.animation_callback = function() {
//            item.jqueryObj.css('transform', 'translate3d(0px,' + item.computed_item_properties['move_y'] + 'px, 0px) scale(2)');
//            //console.log(item.jqueryObj.width());
//
//            //tdUtil.tdMoveY(item.jqueryObj, item.computed_item_properties['move_y']);
//            item.redraw = false;
//        };
//        td_animation_scroll.add_item(item);
//
//    });
//
//
//    td_animation_scroll.compute_all_items();
//
//
//
//    jQuery(window).scroll(function() {
//        td_animation_scroll.compute_all_items();
//    });
//
//
//    jQuery(window).resize(function() {
//        td_animation_scroll.compute_all_items();
//    });
//
//
//
//    //td_fps.init();
//
//});
//
//
//
//
//
