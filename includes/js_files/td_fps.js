var td_fps = {

    start_time: 0,

    current_time: 0,

    frame_number: 0,

    init: function init() {
        td_fps.start_time = 0;

        var previous_result = 0,
            result = 0,
            elapsed_time = 0;

        var td_fps_table = jQuery("#fps_table");

        if (td_fps_table.length == 0) {
            td_fps_table = jQuery('<div>').css({
                "position": "fixed",
                "top": "120px",
                "left": "10px",
                "width": "100px",
                "height": "20px",
                "border": "1px solid black",
                "font-size": "11px",
                "z-index": "100000",
                "background-color": "white"
            });

            td_fps_table.appendTo('body');
        }

        var get_fps = function() {
            td_fps.frame_number++;
            td_fps.current_time = Date.now();

            elapsed_time = (td_fps.current_time - td_fps.start_time) / 1000;

            result = (td_fps.frame_number / elapsed_time).toPrecision(2);

            if (result != previous_result) {
                previous_result = result;
                td_fps_table.html(previous_result + ' fps');
                //console.log(previous_result);
            }

            if (elapsed_time > 1) {
                td_fps.start_time = td_fps.current_time;
                td_fps.frame_number = 0;
            }

            requestAnimationFrame(get_fps);
        };

        get_fps();
    }
};
