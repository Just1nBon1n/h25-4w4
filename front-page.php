    <?php get_header(); ?>
    <main>
        <?php 
            get_template_part('gabarits/hero'); 
        ?>
        <?php 
            get_template_part('gabarits/formulaire');
        ?>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (in_category("galerie")) : ?>
                    <div class="contenu-galerie">
                    <?php the_content(); ?>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
            <section class="populaire">
                <?php rewind_posts(); // Remet la boucle au début ?>
                <?php while (have_posts()) : the_post(); ?>
                        <?php if (!in_category("galerie")) : ?>
                        <?php get_template_part('gabarits/carte'); ?>
                        <?php endif; ?>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
        <!-- ////////////////////////////////////////////// section rest-API -->
        <section class="destination">
            <?php categories_liste("destination"); ?>
            <h2 class="destination__titre">Articles de la catégorie</h2>
            <div class="destination__list"></div>
        </section>
    </main>
    <?php get_footer(); ?>
</body>
</html>