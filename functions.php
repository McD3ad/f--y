<?php
/**
 * Main theme fucntions
 */

define(PATH, 'http://f--y.local');

function get_header($title = 'F — Y') {
    if ($title != 'F — Y') {
        $title = $title . ' | F — Y';
    }

    require_once(__DIR__ . DIRECTORY_SEPARATOR . 'header.php');
}

function get_footer() {
    require_once(__DIR__ . DIRECTORY_SEPARATOR . 'footer.php');
}