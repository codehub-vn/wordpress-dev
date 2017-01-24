<?php

function r_activate_plugin () {
    if (version_compare(get_bloginfo('version'), '4.2', '<')) {
        wp_die(__('You must have a Wordpress verion later than 4.2'));
    }
}
