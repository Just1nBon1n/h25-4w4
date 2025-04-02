    <?php get_header(); ?>
    <main>
        <?php 
            get_template_part('gabarits/hero'); 
        ?>
        <?php 
            get_template_part('gabarits/formulaire');
        ?>
        <section class="populaire">
            <div class="global">
                <?php if (have_posts()) : while (have_posts()) : the_post(); 
                if (in_category("galerie"))  {
                    the_content() ;
                } else {    ?>
                    <?php get_template_part( 'gabarits/carte' ); ?>
                <?php } ?>
                <?php endwhile; endif; ?>
            </div>
        </section>
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