<?php 
/**
 *
 * Plugin Name:Hooks Example
 *
 */
/*add_filter( 'the_title' ,'ju_title');
function ju_title($title){
	return 'Hooked: '.$title;
}

add_action('wp_footer','ju_footer_shoutout');

function ju_footer_shoutout(){
	echo 'Hooked Example Plugin was here. <br>';
}

add_action('wp_footer','ju_footer_shoutout_v2',5);
//by default all function priority is 10. and 5 is priority
function ju_footer_shoutout_v2(){
	echo 'Hooked Example Plugin was here.Version 2 <br>';
}*/


add_action('wp_footer','ju_footer');

function ju_footer(){
	do_action('ju_custom_footer');
}

add_action('ju_custom_footer','ju_kill_wp');

function ju_kill_wp(){
	echo 'Custom Hooks';
}