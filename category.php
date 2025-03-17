<?php get_header(); ?>
  
  <section class="populaire">
    <div class="global">
      <h1 class><?php the_category(); ?></h1>
      <p> <?php echo category_description(); ?> </p>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php  get_template_part( 'gabarits/carte' ); ?>
      <?php endwhile; endif; ?>
    </div>
  </section>
<?php get_footer(); ?>