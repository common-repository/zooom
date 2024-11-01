<?php

/**
 * @package zooom
 * @version 1.1.0
 */
/*
Plugin Name: Zooom
Plugin URI: http://wordpress.org/plugins/zooom/
Description: <strong>Zooom</strong> is a simple, lightweight jQuery plugin that adds a magnifying glass style zoom functionality to images.
Author: Harshit Peer
Version: 1.1.0
Author URI: https://harshitpeer.com
*/

/* Intializing Plugin Files */

add_action("wp_enqueue_scripts", "zooom_files_loader");

function zooom_files_loader() {
    wp_enqueue_style("zooom", plugins_url("/css/magnify.css", __FILE__));
    wp_enqueue_script("zooom", plugins_url("/js/jquery.magnify.js", __FILE__), array("jquery"), "", true);
    wp_enqueue_script("zooom", plugins_url("/js/jquery.magnify-mobile.js", __FILE__), array("jquery"), "", true);
}

/* ShortCode Function */

add_shortcode("zooom", "zooom_function");

function zooom_function($atts, $content = null) {
    $parameters = shortcode_atts(array(
        "normal_url" => "",
        "big_url" => "",
        "alt" => "",
        "class" => "",
        "width" => "200px",
        "height" => "200px",
        "disable_on_click" => "off",
    ), $atts);
    $img = "";
    $script = "";
    $print_parameters["normal_url"] = NULL;
    $print_parameters["big_url"] = NULL;
    if (!empty($parameters["normal_url"])) {
        $print_parameters["normal_url"] = "src='" . $parameters["normal_url"] . "'";
    }
    if (!empty($parameters["big_url"])) {
        $print_parameters["big_url"] = "data-magnify-src='" . $parameters["big_url"] . "'";
    }
    if ((!empty($print_parameters["normal_url"])) && (!empty($print_parameters["big_url"]))) {
        $img = "<img " . $print_parameters["normal_url"] . " " . $print_parameters["big_url"] . " alt='" . $parameters["alt"] . "' class='zooom " . $parameters["class"] . "'/>";
        $script = "<script>jQuery(document).ready(function($) { $('.zooom').magnify(); });</script>";
        $style = "<style>.magnify > .magnify-lens { width: " . $parameters['width'] . "; height: " . $parameters['height'] . "; }</style>";
        if($parameters["disable_on_click"] == 'on') {
            $script = '<script>jQuery(document).ready(function(o){let s=o(".zooom").magnify();o("html").on("click",".magnify-lens",function(){o(".zooom").toggleClass("disable"),o(".zooom").hasClass("disable")?s.destroy():s=o(".zooom").magnify()}),o(".zooom").on("click",function(){o(".zooom").toggleClass("disable"),o(".zooom").hasClass("disable")||(s=o(".zooom").magnify())})});</script>';
            $style .= "<style>.magnify-lens::after{content:'Click to Enable / Disable';position:absolute;bottom:-2.5em;left:0;width:calc(100% + 14px);text-align:center;font-size:.75em;background:rgb(255 255 255 / 95%);margin:0 -7px}</style>";
        }
        return $img . $script . $style;
    } else {
        $test = $print_parameters["normal_url"] . " " . $print_parameters["big_url"];
        return "Invalid Error " . $test;
    }
}