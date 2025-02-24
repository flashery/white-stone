<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php get_template_part('header'); ?>

  <main class="container mx-auto px-4">
    <?php get_template_part('feature'); ?>

    <?php get_template_part('about'); ?>

    <?php get_template_part('home-sold'); ?>

    <?php get_template_part('feature-blogs'); ?>

    <?php get_template_part('cta'); ?>

    <?php get_template_part('image-gallery'); ?>

    <?php get_template_part('banners'); ?>

    <?php get_template_part('testimonial'); ?>

    <?php get_template_part('contact'); ?>

  </main>

  <?php get_template_part('footer'); ?>
</body>

</html>
