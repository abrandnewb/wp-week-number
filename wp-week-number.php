<?php
/*
Plugin Name: WP Week Number Generator
Plugin URI:  http://
Description: Generates week number and displays it in a page or post
Version:     1.0
Author:      Biniyam Haile
Author URI:  https://www.linkedin.com/in/biniyam-alemayehu-haile-426927a6/
License:     GPL2
License URI: http://
*/

defined ( 'ABSPATH' ) or die( );

require_once(plugin_dir_path(__FILE__).'/includes/wp-week-number-scripts.php');

function week_number() {

    $dto = new DateTime();
    $dto->setISODate(date('Y'), date('W'));
    $ret['week_start'] = $dto->format('Y-m-d');
    $dto->modify('+6 days');
    $ret['week_end'] = $dto->format('Y-m-d');
    //$output ='<div class="wn-title">Week number</div><div class="wn">'.date('W').'</div>';
    $output = '<div class="wn-card"><p><button>Week number</button></p><h1>'.date('W').'</h1><p>'.$ret['week_start'].' to '.$ret['week_end'].'</p></div>';
    return $output;
}
add_shortcode('week-no', 'week_number');
