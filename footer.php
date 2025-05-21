<?php 
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $svg_couleur = get_theme_mod('svg_footer_couleur', 'rgba(255, 255, 255, 0.322)');
    $svg_hauteur = get_theme_mod('svg_footer_hauteur', '400px');
?>
<footer>
    <div class="svg-container" style="--svg-color: <?php echo esc_attr($svg_couleur); ?>; --svg-height: <?php echo esc_attr($svg_hauteur); ?>;">
        <?php svg_decoratif_from_file('images/wave-haikei.svg'); ?>
    </div>
    
    <!-- Footer Image -->
    <?php
        $image_id = get_theme_mod('footer_image');

        if ($image_id) {
            echo '<div class="footer-image-container">';
            echo wp_get_attachment_image($image_id, 'medium', false, array('class' => 'footer-image'));
            echo '</div>';
        }
    ?>


    <div class="piedpage global">
        <section class="piedpage__haut">
            <section class="piedpage__s1">
                <div class="piedpage__s1 titre">
                    Liens sur le voyages
                </div>
                <div class="piedpage__s1__externe">
                    <?php wp_nav_menu(array(
                        "menu" => "externe",
                        "container" => "nav",
                    )); ?>
                </div>
            </section>
            <section class="piedpage__s2">
                <div class="piedpage__s2 titre">
                    Adresse et recherche
                </div>
                <div class="piedpage__s2__adresse">
                        <div class="piedpage__s2__adresse__coord">
                            <?php echo $footer_adresse; ?>
                        </div>
                        <div class="piedpage__s2__adresse__telephone">
                            Tel: <?php echo($footer_telephone); ?>
                        </div>
                        <div class="piedpage__s2__adresse__recherche">
                            <?php get_search_form();   ?>
                        </div>
                </div>
            </section>
            <section class="piedpage__s3">
                <div class="piedpage__s3 titre">
                    Missions du club
                </div>
                <div class="piedpage__s3__description">
                    <!-- La mission de Mondo Voyage est de réunir des passionnés de découverte autour d’expériences de voyage authentiques. Le club favorise l’exploration, le partage et la création de liens, tout en promouvant un tourisme responsable et enrichissant. -->
                    <?php echo($footer_mission); ?>
                </div>
            </section> 
        </section>
        <section class="piedpage__bas">
            <section class="piedpage__icones">
                <?php afficher_icones_sociales(); ?>
            </section>
            <section class="piedpage__menu">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
            </section>
        </section>
    </div>
</footer>
<?php wp_footer() ?>