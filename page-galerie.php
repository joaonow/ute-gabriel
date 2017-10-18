<?php 
/*
  Template Name: Galerie
*/
?>

<?php get_header(); ?>

<div id="gallery" class="wrapper">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    

    <h1><?php the_title(); ?></h1>

    <section class="row">
      
      <div class="text col-md-6 order-md-1">
        <?php the_content(); ?>
      </div>
      
      <div class="col-md-12">
        <?php $g_bild_1 = get_field( 'g_bild_1' ); ?>
        <?php if ( $g_bild_1 ) { ?>
          <img src="<?php echo $g_bild_1['url']; ?>" alt="<?php echo $g_bild_1['alt']; ?>" />
        <?php } ?>
      </div>
      
      <div class="col-md-6">
        <?php $g_bild_2 = get_field( 'g_bild_2' ); ?>
        <?php if ( $g_bild_2 ) { ?>
          <img src="<?php echo $g_bild_2['url']; ?>" alt="<?php echo $g_bild_2['alt']; ?>" />
        <?php } ?>
      </div>
      
      <div class="col-md-6">
        <?php $g_bild_3 = get_field( 'g_bild_3' ); ?>
        <?php if ( $g_bild_3 ) { ?>
            <img src="<?php echo $g_bild_3['url']; ?>" alt="<?php echo $g_bild_3['alt']; ?>" />
        <?php } ?>
      </div>
      
      <div class="col-md-6">
        <?php $g_bild_4 = get_field( 'g_bild_4' ); ?>
        <?php if ( $g_bild_4 ) { ?>
          <img src="<?php echo $g_bild_4['url']; ?>" alt="<?php echo $g_bild_4['alt']; ?>" />
        <?php } ?>
      </div>
      
    </section>

  <?php endwhile; else : ?>
    <p><?php _e( 'Leider gibt es keine Posts die deiner Suchanfrage entsprechen, sorry.' ); ?></p>
  <?php endif; ?>

  <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>/kontakt" class="button">Kontakt</a>

<?php get_footer(); ?>
