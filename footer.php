  <footer>
    <div>
      <?php 
      
      $defaults = array(
        'container' => false,
        'theme_location' => 'secondary-menu',
        'depth' => '1'

      );

      wp_nav_menu( $defaults );

      ?>
    </div>
  </footer>    

</div><!-- wrapper end-->
   
  <?php wp_footer(); ?>

  </body>
</html>
