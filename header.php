<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> <?php wp_title( '|', true, 'right'); bloginfo( 'name' ); ?> </title>
      <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?> >
      
    <?php if ( get_field( 'banner') ) { ?>
      <style>
        .banner {
          background-image: url( <?php the_field( 'banner' ); ?> );
        }
      </style>
    <?php } ?>
      
    <div class="banner">
      <a href=" <?php echo esc_url( home_url( '/' ) ); ?> ">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.svg" class="logo">
      </a>
    </div>

    <?php get_template_part('nav', 'main'); ?>