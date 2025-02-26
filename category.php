<?php get_header(); ?>
<h1>-------- CATEGORY.PHP ---------</h1>
    <section class="populaire">
      <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php  get_template_part( 'gabarits/carte' ); ?>
        <?php endwhile; endif; ?>
      </div>
    </section>
    <?php get_footer(); ?>