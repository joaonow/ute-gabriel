<nav>
    <div class="menu-trigger">
      <div class="trigger">MENÜ</div>
      <div class="burger"></div>
      <div class="burger"></div>
      <div class="burger"></div>
    </div>
  
    <?php

    $defaults = array(
        'container' => false,
        'theme_location' => 'primary-menu',
        'menu_class' => 'collapse',
        'depth' => '2'

    );

    wp_nav_menu( $defaults );

    ?>
</nav>

