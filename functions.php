<?php

function pureb2b_script_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/pureb2b.css', array(), '1.0.0', 'all');
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', array(), '3.3.1', true);
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/pureb2b.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'pureb2b_script_enqueue');

function pureb2b_theme_setup() {
  add_theme_support('menus');

  register_nav_menu('homelogomenu', 'Home Logo Menu');
  register_nav_menu('navbar', 'Primary Navbar Navigation');
}

add_action('init', 'pureb2b_theme_setup');

?>