<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PureB2B</title>
    <?php wp_head(); ?>
  </head>

  <?php

    if( is_front_page() ):
      $pureb2b_classes = array( 'pureb2b-home' );
    else:
      $pureb2b_classes = array( 'pureb2b-default-page' );
    endif;

  ?>

  <body <?php body_class( $pureb2b_classes ); ?>>

    <?php wp_nav_menu(array('theme_location' => 'navbar')); ?>
