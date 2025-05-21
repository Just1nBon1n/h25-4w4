<?php get_header(); ?>

<main class="populaire">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article class="destination">

        <!-- Image mise en avant ou image par défaut -->
        <div class="destination-image">
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('large');
          } else {
            echo '<img src="' . get_template_directory_uri() . '/images/default-destination.jpg" alt="Image par défaut">';
          }
          ?>
        </div>

        <!-- Titre -->
        <h2><?php the_title(); ?></h2>

        <!-- Auteur et date -->
        <p>Par <?php the_author(); ?> | Publié le <?php echo get_the_date('j F Y'); ?></p>

        <!-- Catégories -->
        <div class="categories">
          Catégories : 
          <?php the_category(', '); ?>
        </div>

        <!-- Contenu -->
        <div class="destination-description">
          <?php the_content(); ?>
        </div>

        <!-- Températures -->
        <div class="destination-temperatures">
          <p>Température maximum : <?php the_field('temperature_maximum'); ?>°C</p>
          <p>Température minimum : <?php the_field('temperature_minimum'); ?>°C</p>
          <p>Température moyenne : <?php the_field('temperature_moyenne'); ?>°C</p>
        </div>

      </article>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
