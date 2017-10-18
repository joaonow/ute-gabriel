<?php 
  /*
    Template Name: Vita
  */
?>

<?php get_header(); ?>

  <div id="vita" class="wrapper">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <h1><?php the_title(); ?></h1>
    
    <div class="row">
      <div class="text col-md-6">
        <h2 class="border"><?php the_field( 'überschrift' ); ?></h2>
        <p><?php the_field( 'beschreibung' ); ?></p>
      </div>
      <div class="col-md-6">
        <?php $profilbild = get_field( 'profilbild' ); ?>
        <?php if ( $profilbild ) { ?>
            <img src="<?php echo $profilbild['url']; ?>" alt="<?php echo $profilbild['alt']; ?>" />
        <?php } ?>
      </div>
    </div>

  <?php endwhile; else : ?>
    <p><?php _e( 'Leider gibt es keine Posts die deiner Suchanfrage entsprechen, sorry.' ); ?></p>
  <?php endif; ?>

  <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>/kontakt" class="button">Kontakt</a>

<?php get_footer(); ?>
