<?php

function add_scripts(){
    wp_enqueue_style('week-number-style', plugins_url().'/wp-week-number/css/style.css');
}

add_action('wp_enqueue_scripts', 'add_scripts');