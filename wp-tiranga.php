<?php
 
/*
 
Plugin Name: WP Tiranga by Vikram
 
Plugin URI: https://kulkarnitech.com/
 
Description: Plugin to display Tiranga flag and Azadi ka amrut mahotsav logo on site
 
Version: 1.0
 
Author: Vikram Kulkarni
 
Author URI: https://vikram.at/
 
License: GPLv2 or later
 
Text Domain: wp-tiranga
 
*/

function wp_tiranga_content() {   ?>
    <div class="tiranga">
        <img src="<?php echo plugin_dir_url( __FILE__ )?>/img/logo-black.png" alt="azadi ka amrita mahotsav"/>
    </div>
    <?php
}
add_action('wp_body_open', 'wp_tiranga_content');

function wp_tiranga_styles() {
    wp_enqueue_style( 'tiranga',  plugin_dir_url( __FILE__ ) . '/css/wp-tiranga-public.css');                      
}
add_action( 'wp_enqueue_scripts', 'wp_tiranga_styles' );