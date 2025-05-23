<?php
/**
 * Template Name: Page des pays
 */
get_header();
?>

<main class="pays">
  <div class="svg-container vague-section-haut">
    <?php svg_decoratif_from_file('images/wave-haikei.svg', true, 'vague-section-haut'); ?>
  </div>
  <section class="pays__intro">
    <h2 class="intro__titre"><?php the_title(); ?></h2>
    <div class="intro__description">
      <?php the_content(); ?>
    </div>
  </section>
  <div class="svg-container vague-section-bas">
    <?php svg_decoratif_from_file('images/wave-haikei.svg', true, 'vague-section-bas'); ?>
  </div>
  <section class="destination">
    <ul id="menu-pays" class="menu-pays-ul"></ul>
    <h2 id="titre-pays" class="destination__titre">France</h2>
    <div class="destination__list"></div> <!-- très important -->
  </section>
</main>

<?php get_footer(); ?>