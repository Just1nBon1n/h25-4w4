<?php 
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
?>
<footer>
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
                <?php get_template_part('gabarits/icone'); ?>
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