<?php

/**
 * Used only on dev! - it is removed from the package by our deploy ;)
 */





/**
 * @param $source
 * @param $destination
 */

function td_compile_less_file($source, $destination) {



	if (file_exists($destination)) {
        unlink($destination);
    }

    $cmd = 'includes\wp_booster\external\td_node_less\node.exe includes\wp_booster\external\td_node_less\lessjs\bin\lessc "' . $source . '" "' . $destination . '" --no-color';
    $descriptorspec = array(
        0 => array("pipe", "r"), // STDIN
        1 => array("pipe", "w"), // STDOUT
        2 => array("pipe", "w"), // STDERR
    );
    $cwd = getcwd();
    $env = null;
    $proc = proc_open($cmd, $descriptorspec, $pipes, $cwd, $env);
    if (is_resource($proc)) {
        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        $return_status = proc_close($proc);

        if ($return_status == 1) {
            echo '<pre>' . $stderr . '</pre>';
            die;
        } else {
            header('Location: ' . $destination);
        }

//                // Output test:
//                echo "STDOUT:<br />";
//                echo "<pre>".$stdout."</pre>";
//                echo "STDERR:<br />";
//                echo "<pre>".$stderr."</pre>";

        echo "Exited with status: $return_status";
    } else {
        echo 'td_error: no resource';
    }
}





if (isset($_GET['part'])) {

    switch ($_GET['part']) {

        case 'style.css_v2':
            td_compile_less_file('includes\less_files\main.less', 'style.css');
            break;

	    case 'editor-style':
		    td_compile_less_file('includes\less_files\editor-style.less', 'editor-style.css');
		    break;

        case 'woocommerce':

            $css_file_name = 'style-woocommerce.css';
            //$output = shell_exec($exec_path . ' ' . $exec_parameters);


            if (file_exists($css_file_name)) {
                unlink($css_file_name);
            }

            //$cmd = 'includes\wp_booster\external\td_node_less\node.exe includes\wp_booster\external\td_node_less\lessjs\bin\lessc "includes\less_files\woocommerce\main.less" "' . $css_file_name . '" --no-color';
            $cmd = 'includes\wp_booster\external\td_node_less\node.exe includes\wp_booster\external\td_node_less\lessjs\bin\lessc "includes\less_files\woocommerce\main.less" "' . $css_file_name . '" --no-color';

            $descriptorspec = array(
                0 => array("pipe", "r"), // STDIN
                1 => array("pipe", "w"), // STDOUT
                2 => array("pipe", "w"), // STDERR
            );
            $cwd = getcwd();
            $env = null;

            $proc = proc_open($cmd, $descriptorspec, $pipes, $cwd, $env);
            if (is_resource($proc)) {
                $stdout = stream_get_contents($pipes[1]);
                $stderr = stream_get_contents($pipes[2]);
                $return_status = proc_close($proc);

                if ($return_status == 1) {
                    echo '<pre>' . $stderr . '</pre>';
                    die;
                } else {
                    header('Location: ' . $css_file_name);
                }

//                // Output test:
//                echo "STDOUT:<br />";
//                echo "<pre>".$stdout."</pre>";
//                echo "STDERR:<br />";
//                echo "<pre>".$stderr."</pre>";

                echo "Exited with status: $return_status";
            } else {
                echo 'td_error: no resource';
            }
            break;
    }
}