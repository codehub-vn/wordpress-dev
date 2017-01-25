<?php

function r_activate_plugin () {
    if (version_compare(get_bloginfo('version'), '4.2', '<')) {
        wp_die(__('You must have a Wordpress verion later than 4.2'));
    }

    global $wpdb;
    $createSQL = "
        CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix. "recipe_ratings` (
          id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
          recipe_id bigint(20) unsigned NOT NULL,
          rating float(3, 1) unsigned NOT NULL,
          user_ip varchar(32) NOT NULL,
          PRIMARY KEY (id)
        ) ENGINE=InnoDB ". $wpdb->get_charset_collate()." AUTO_INCREMENT=1;
    ";

//    require(ABSPATH . '/wp-admin/includes/upgrade.php');
//    dbDelta($createSQL);
    $wpdb->query($createSQL);
}
