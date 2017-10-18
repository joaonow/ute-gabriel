<?php get_header(); ?>

  <div id="angebote" class="wrapper">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    
    <section>
    
      <div class="heading-center"><h2> <?php the_field( 'kategorie_1_überschrift' ); ?> </h2></div>

      <?php $kategorie_1_titelbild = get_field( 'kategorie_1_titelbild' ); ?>
      <?php if ( $kategorie_1_titelbild ) { ?>
          <img src="<?php echo $kategorie_1_titelbild['url']; ?>" alt="<?php echo $kategorie_1_titelbild['alt']; ?>" />
      <?php } ?>

      <div class="row">
        <div class="col-md-4">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'k1_option_1_überschrift' ); ?> </h3>
              <h4> <?php the_field( 'k1_option_1_preis' ); ?> </h4>
            </div>

            <?php the_field( 'k1_option_1_beschreibung' ); ?>
          </div>
        </div>

        <div class="col-md-4">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'k1_option_2_überschrift' ); ?> </h3>
              <h4> <?php the_field( 'k1_option_2_preis' ); ?> </h4>
            </div>

            <?php the_field( 'k1_option_2_beschreibung' ); ?>
          </div>
        </div>

        <div class="col-md-4">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'k1_option_3_überschrift' ); ?> </h3>
              <h4> <?php the_field( 'k1_option_3_preis' ); ?> </h4>
            </div>

            <?php the_field( 'k1_option_3_beschreibung' ); ?>
          </div>
        </div>
      </div>
      
    </section>
    
    <section>
    
      <div class="heading-center"><h2> <?php the_field( 'kategorie_2_überschrift' ); ?> </h2></div>

      <?php $kategorie_2_titelbild = get_field( 'kategorie_2_titelbild' ); ?>
      <?php if ( $kategorie_2_titelbild ) { ?>
          <img src="<?php echo $kategorie_2_titelbild['url']; ?>" alt="<?php echo $kategorie_2_titelbild['alt']; ?>" />
      <?php } ?>

      <div class="row">
        <div class="col-md-4">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'k2_option_1_überschrift' ); ?> </h3>
              <h4> <?php the_field( 'k2_option_1_preis' ); ?> </h4>
            </div>

            <?php the_field( 'k2_option_1_beschreibung' ); ?>
          </div>
        </div>

        <div class="col-md-4">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'k2_option_2_überschrift' ); ?> </h3>
              <h4> <?php the_field( 'k2_option_2_preis' ); ?> </h4>
            </div>
            
            <?php the_field( 'k2_option_2_beschreibung' ); ?>
          </div>
        </div>

        <div class="col-md-4">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'k2_option_3_überschrift' ); ?> </h3>
              <h4> <?php the_field( 'k2_option_3_preis' ); ?> </h4>
            </div>
            
            <?php the_field( 'k2_option_3_beschreibung' ); ?>
          </div>
        </div>
      </div>
      
    </section>
    
    <section>
    
      <div class="heading-center"><h2> <?php the_field( 'kategorie_3_überschrift' ); ?> </h2></div>

      <?php $kategorie_3_titelbild = get_field( 'kategorie_3_titelbild' ); ?>
      <?php if ( $kategorie_3_titelbild ) { ?>
          <img src="<?php echo $kategorie_3_titelbild['url']; ?>" alt="<?php echo $kategorie_3_titelbild['alt']; ?>" />
      <?php } ?>

      <div class="row">
        <div class="col-md-4">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'k3_option_1_überschrift' ); ?> </h3>
              <h4> <?php the_field( 'k3_option_1_preis' ); ?> </h4>
            </div>

            <?php the_field( 'k3_option_1_beschreibung' ); ?>
          </div>
        </div>

        <div class="col-md-4">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'k3_option_2_überschrift' ); ?> </h3>
              <h4> <?php the_field( 'k3_option_2_preis' ); ?> </h4>
            </div>

            <?php the_field( 'k3_option_2_beschreibung' ); ?>
          </div>
        </div>

        <div class="col-md-4">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'k3_option_3_überschrift' ); ?> </h3>
              <h4> <?php the_field( 'k3_option_3_preis' ); ?> </h4>
            </div>

            <?php the_field( 'k3_option_3_beschreibung' ); ?>
          </div>
        </div>
      </div>
      
    </section>
    
    <section id="sonderangebote">
      <div class="heading-center"><h2> <?php the_field( 'kategorie_1_überschrift' ); ?> </h2></div>
      
      <div class="row">
        
        <div class="col-md-6 bild">
          <?php $angebot_1_bild = get_field( 'angebot_1_bild' ); ?>
          <?php if ( $angebot_1_bild ) { ?>
              <img src="<?php echo $angebot_1_bild['url']; ?>" alt="<?php echo $angebot_1_bild['alt']; ?>" />
          <?php } ?>

        </div>
        
        <div class="col-md-6 bild">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'angebot_1_überschrift' ); ?> </h3>
            </div>

            <ul>
              <li><?php the_field( 'angebot_1_beschreibung' ); ?></li>
            </ul>
            
            <h4> <?php the_field( 'angebot_1_preis' ); ?> </h4>
          </div>
        </div>
        
        <div class="col-md-6">
          <?php $angebot_2_bild = get_field( 'angebot_2_bild' ); ?>
          <?php if ( $angebot_2_bild ) { ?>
              <img src="<?php echo $angebot_2_bild['url']; ?>" alt="<?php echo $angebot_2_bild['alt']; ?>" />
          <?php } ?>

        </div>

        <div class="col-md-6">
          <div class="option">
            <div class="border">
              <h3> <?php the_field( 'angebot_2_überschrift' ); ?> </h3>
            </div>

            <ul>
              <li><?php the_field( 'angebot_2_beschreibung' ); ?></li>
            </ul>
            
            <h4> <?php the_field( 'angebot_2_preis' ); ?> </h4>
          </div>
        </div>
        
      </div>
      
    </section>

  <?php endwhile; else : ?>
    <p><?php _e( 'Leider gibt es keine Posts die deiner Suchanfrage entsprechen, sorry.' ); ?></p>
  <?php endif; ?>

  <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>/kontakt" class="button">Kontakt</a>

<?php get_footer(); ?>
