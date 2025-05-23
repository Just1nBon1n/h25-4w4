<?php
/**
 * Template Name: Page des pays
 */
get_header();
?>

<main class="pays">
  <section class="pays__intro">
    <h2 class="intro__titre"><?php the_title(); ?></h2>
    <div class="intro__description">
      <?php the_content(); ?>
    </div>
  </section>
  <div class="svg-container vague-section">
    <?php svg_decoratif_from_file('images/wave-haikei.svg', true, 'vague-section'); ?>
  </div>
</main>

<?php get_footer(); ?>