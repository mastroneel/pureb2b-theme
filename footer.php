

  <footer>
    <div class="row">
      <div class="col-xs-12 col-md-2">
        <?php wp_nav_menu(array('theme_location' => 'footerlogomenu')); ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <p>Get to Know Us</p>
        <?php wp_nav_menu(array('theme_location' => 'gettoknowmenu')); ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <p>Top of Funnel Lead Gen</p>
        <?php wp_nav_menu(array('theme_location' => 'topoffunnelmenu')); ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <p>Bottom of Funnel Lead Gen</p>
        <?php wp_nav_menu(array('theme_location' => 'bottomoffunnelmenu')); ?>
        <p>Lead Research</p>
        <?php wp_nav_menu(array('theme_location' => 'leadresearchmenu')); ?>
      </div>
      <div class="col-xs-12 col-md-2">
        <p>Contact Us</p>
        <p>
          17 Main Street
          <br>
          Topsfield, MA 01983
          <br>
          p: 978.887.0010
          <br>
          f: 978.887.2205
        </p>
      </div>
      <div class="col-xs-12 col-md-2">
        <p>Subscribe to PureB2B via Email</p>
        <?php wp_nav_menu(array('theme_location' => 'socialmenu')); ?>
      </div>
    </div>
    <div class="row footer-bottom-row">
      <div class="col-xs-12">
        <?php wp_nav_menu(array('theme_location' => 'footerbottommenu')); ?>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
  </body>
</html>
