<?php
function ju_widgets() {
    register_sidebar([
        'name' => __('My First Sidebar', 'udemy'),
        'id' => 'ju_sidebar',
        'description' => __('Sidebar for the theme Udemy', 'udemy'),
        'class' => '',
        'before_widget' => '<div id="%1$s" class="card %2$s">',
        'after_wdget' => '</div></div></div>',
        'before_title' => '<div class="card-header bg-primary"></div><span class="card-title">',
        'after_tite' => '</span></div><div class="card-content"><div class="widget">',
    ]);
}