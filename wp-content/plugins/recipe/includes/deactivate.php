<?php

function r_deactivate_plugin () {

    global $wpdb;
    $dropSQL = "DROP TABLE `" . $wpdb->prefix. "recipe_ratings`;";

//    require(ABSPATH . '/wp-admin/includes/upgrade.php');
//    dbDelta($dropSQL);
    $wpdb->query($dropSQL);
}
