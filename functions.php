<?php

function pureb2b_script_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/pureb2b.css', array(), '1.0.1', 'all');
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', array(), '3.3.1', true);
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/pureb2b.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'pureb2b_script_enqueue');

function pureb2b_theme_setup() {
  add_theme_support('menus');

  register_nav_menu('homelogomenu', 'Home Logo Menu');
  register_nav_menu('navbar', 'Primary Navbar Navigation');
  register_nav_menu('footerlogomenu', 'Footer Logo Menu');
  register_nav_menu('gettoknowmenu', 'Get to Know Us Menu');
  register_nav_menu('topoffunnelmenu', 'Top of Funnel Menu');
  register_nav_menu('bottomoffunnelmenu', 'Bottom of Funnel Menu');
  register_nav_menu('leadresearchmenu', 'Lead Research Menu');
  register_nav_menu('socialmenu', 'Social Menu');
  register_nav_menu('footerbottommenu', 'Bottom of Footer Menu');


}

add_action('init', 'pureb2b_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');

?>
