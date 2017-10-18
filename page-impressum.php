<?php get_header(); ?>

<div id="impressum" class="wrapper">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
  
    <div class="row">
      <div class="text col-md-6">
        <?php the_field( 'kontaktdaten' ); ?>
      </div>
      <div class="col-md-6">
        <?php the_content(); ?>
      </div>
    </div>

  <?php endwhile; else : ?>
    <p><?php _e( 'Leider gibt es keine Posts die deiner Suchanfrage entsprechen, sorry.' ); ?></p>
  <?php endif; ?>

  <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>/kontakt" class="button">Kontakt</a>

<?php get_footer(); ?>
