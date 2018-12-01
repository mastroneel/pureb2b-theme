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
    <div class="main-navbar-menus">
      <?php wp_nav_menu(array('theme_location' => 'homelogomenu')); ?>
      <?php wp_nav_menu(array('theme_location' => 'navbar')); ?>
    </div>

    <div class="get-to-know-us-menus-container">
      <div class="arrow-up-1"></div>
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <h3 class="blue">About Pure B2B</h3>
          <p class="gray">
            PureB2B is a data-driven marketing platform that offers lead generation and data services that accelerate the technology sales process by identifying intent among technology buyers.
          </p>
          <p class="gray">
            Founded in 2009, PureB2B helps marketers meet the helps meet the ever-changing demands of B2B sales.
          </p>
          <?php wp_nav_menu(array('theme_location' => 'gettoknowuslearnmore')); ?>
        </div>
        <div class="col-xs-12 col-sm-8">
          <h3 class="blue">Meet the PureB2B Team</h3>
          <p class="gray">Leaders in B2B demand generation</p>
          <?php wp_nav_menu(array('theme_location' => 'imagesmenu')); ?>
          <div class="join-us-container">
            <h3 class="blue">Step up your career with us</h3>
            <?php wp_nav_menu(array('theme_location' => 'joinusmenu')); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="lead-solutions-menus-container">
      <div class="arrow-up-2"></div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 lg-border">
          <h3 class="blue">Lead Generation Solutions</h3>
          <h4 class="gray">Delivering full-funnel, scalable solutions for sales and marketing teams.</h4>
          <p class="gray">Customized campaigns optimized to target your in-market buyers at any state of the buying cycle, PureB2B’s hands-on approach and buyer-intent data provide you with the sales and marketing pipeline velocity you need.</p>
          <?php wp_nav_menu(array('theme_location' => 'leadlearnmore')); ?>
        </div>
        <div class="col-xs-12 col-sm-3">
          <?php wp_nav_menu(array('theme_location' => 'leadtopoffunnel')); ?>
        </div>
        <div class="col-xs-12 col-sm-3">
          <?php wp_nav_menu(array('theme_location' => 'leadbottomoffunnel')); ?>
        </div>
        <div class="col-xs-12 col-sm-3">
          <?php wp_nav_menu(array('theme_location' => 'leadresearchlead')); ?>
        </div>
      </div>
    </div>
