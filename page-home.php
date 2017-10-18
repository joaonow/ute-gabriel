<?php 
/*
  Template Name: Home
*/
?>

<?php get_header(); ?>

  <div id="home" class="wrapper">
    
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="row">
      <div class="text col-md-6 order-md-2">
        <h2 class="border"><?php the_field( 'bild_1_überschrift' ); ?></h2>
        <p><?php the_field( 'bild_1_text' ); ?></p>
      </div>
      
      <div class="col-md-6 order-md-1">
        <?php $s_bild_1 = get_field( 's_bild_1' ); ?>
        <?php if ( $s_bild_1 ) { ?>
            <img src="<?php echo $s_bild_1['url']; ?>" alt="<?php echo $s_bild_1['alt']; ?>" />
        <?php } ?>
      </div>
    
      <div class="text col-md-6 order-md-3">
        <h2 class="border"><?php the_field( 'bild_2_überschrift' ); ?></h2>
        <p><?php the_field( 'bild_2_text' ); ?></p>
      </div>
      <div class="col-md-6 order-md-4">
        <?php $s_bild_2 = get_field( 's_bild_2' ); ?>
        <?php if ( $s_bild_2 ) { ?>
            <img src="<?php echo $s_bild_2['url']; ?>" alt="<?php echo $s_bild_2['alt']; ?>" />
        <?php } ?>
      </div>
      
    </div>
    
    <div id="angebote" class="row">
      
      <a href="#" class="col-md-12">
        <div class=" overlay">
          <h2 class="border"><?php the_field( 'bild_3_überschrift' ); ?></h2>
        </div>
        <?php $s_bild_3 = get_field( 's_bild_3' ); ?>
        <?php if ( $s_bild_3 ) { ?>
          <div class="image-container"><img src="<?php echo $s_bild_3['url']; ?>" alt="<?php echo $s_bild_3['alt']; ?>" /></div>
        <?php } ?>
      </a>
  
      <a href="#" class="col-md-12">
        <div class="overlay">
          <h2 class="border"><?php the_field( 'bild_4_überschrift' ); ?></h2>
        </div>
        <?php $s_bild_4 = get_field( 's_bild_4' ); ?>
        <?php if ( $s_bild_4 ) { ?>
          <div class="image-container"><img src="<?php echo $s_bild_4['url']; ?>" alt="<?php echo $s_bild_4['alt']; ?>" /></div>
        <?php } ?>
      </a>
      
      <a href="#" class="col-md-12">
        <div class="overlay">
          <h2 class="border"><?php the_field( 'bild_5_überschrift' ); ?></h2>
        </div>
        <?php $s_bild_5 = get_field( 's_bild_5' ); ?>
        <?php if ( $s_bild_5 ) { ?>
          <div class="image-container"><img src="<?php echo $s_bild_5['url']; ?>" alt="<?php echo $s_bild_5['alt']; ?>" /></div>
        <?php } ?>
      </a>
    </div>
    
    <div class="row">
      <div class="text col-md-6 order-md-2">
        <h2 class="border"><?php the_field( 'bild_6_überschrift' ); ?></h2>
        <p><?php the_field( 'bild_6_text' ); ?></p>
      </div>
      
      <div class="col-md-6 order-md-1">
        <?php $s_bild_6 = get_field( 's_bild_6' ); ?>
        <?php if ( $s_bild_6 ) { ?>
            <img src="<?php echo $s_bild_6['url']; ?>" alt="<?php echo $s_bild_6['alt']; ?>" />
        <?php } ?>
      </div>
      
      <div class="text col-md-6 order-md-3">
        <h2 class="border"><?php the_field( 'bild_7_überschrift' ); ?></h2>
        <p><?php the_field( 'bild_7_text' ); ?></p>
      </div>
    
      <div class="col-md-6 order-md-4">
        <?php $s_bild_7 = get_field( 's_bild_7' ); ?>
        <?php if ( $s_bild_7 ) { ?>
            <img src="<?php echo $s_bild_7['url']; ?>" alt="<?php echo $s_bild_7['alt']; ?>" />
        <?php } ?>
      </div>
    </div> 

  <?php endwhile; else : ?>
    <p><?php _e( 'Leider gibt es keine Posts die deiner Suchanfrage entsprechen, sorry.' ); ?></p>
  <?php endif; ?>
    
  <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>/kontakt" class="button">Kontakt</a>

<?php get_footer(); ?>
