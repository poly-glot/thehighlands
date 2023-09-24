<?php
session_start();

function the_active_menu_classname($menu) {
    $current_page = basename($_SERVER['SCRIPT_FILENAME'], ".php");

    echo $menu === $current_page
        ? "active"
        : "";
}

function hex2rgb($hex)
{
    $hex = ltrim($hex, '#');
    return array(
        hexdec(substr($hex, 0, 2)),
        hexdec(substr($hex, 2, 2)),
        hexdec(substr($hex, 4, 2))
    );
}
