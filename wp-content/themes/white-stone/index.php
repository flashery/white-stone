<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header>
    <h1 class="text-3xl font-bold text-blue-600"><?php bloginfo('name'); ?></h1>
  </header>

  <main>
    <h1 class="text-3xl font-bold text-blue-600">
      My Tailwind Heading
    </h1>
    <p class="mt-4 text-gray-700">
      Tailwind won't style this by default unless I add utility classes.
    </p>
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    else :
      echo '<p>No posts found.</p>';
    endif;
    ?>
    <!-- Example in a template file -->
    <div class="p-4 sm:p-6 md:p-8 lg:p-12">
      <h2 class="text-2xl sm:text-3xl lg:text-4xl">
        Responsive heading with Tailwind
      </h2>
      <p class="mb-4 sm:mb-6 md:mb-8">
        This text spacing and size changes based on screen sizes.
      </p>
    </div>
  </main>

  <footer>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>