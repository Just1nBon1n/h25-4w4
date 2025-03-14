<?php 
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
?>
<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__titre">
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
            <div class="piedpage__s2__titre">
                Adresse et recherche
            </div>
            <div class="piedpage__s2__adresse">
                    <div class="piedpage__s2__adresse__coord">
                        <?php echo $footer_adresse; ?>
                    </div>
                    <div class="piedpage__s2__adresse__coord">
                        Tel: <?php echo($footer_telephone); ?>
                    </div>
                    <div class="piedpage__s2__adresse__recherche">
                        <?php get_search_form();   ?>
                    </div>
            </div>
        </section>
        <section class="piedpage__s3">
            <div class="piedpage__s3__titre">
                Missions du club
            </div>
            <div class="piedpage__s3__description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat vero explicabo iure sit enim, ea ducimus nesciunt inventore impedit blanditiis unde omnis facere, deleniti eligendi fuga molestias dolor eveniet laborum!
            </div>
            
        </section>
    </div>
</footer>
<?php wp_footer() ?>