<?php
$hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
$hero_cta_text = get_theme_mod('hero_cta_text', 'Default Title');
$hero_cta_link = get_theme_mod('hero_cta_link', '#');
$hero_texte_couleur = get_theme_mod('hero_texte_couleur', '#000000');
$hero_nombre_images = get_theme_mod('hero_nombre_images', 3);
?>

<section class="hero" style="color: <?php echo esc_attr($hero_texte_couleur); ?>;">

    <!-- Carrousels dynamiques -->
    <?php for ($i = 0; $i < $hero_nombre_images; $i++): 
        $image = get_theme_mod('hero_background_' . $i);
        if (!$image) continue;
    ?>
        <div class="hero__carrousel<?php echo $i === 0 ? ' hero__carrousel--active' : ''; ?>" style="background-image: url(<?php echo esc_url($image); ?>)"></div>
    <?php endfor; ?>

    <!-- Radios dynamiques -->
    <div class="hero__radio">
        <?php for ($i = 0; $i < $hero_nombre_images; $i++): ?>
            <input class="hero__radio__input" data-id_radio="<?php echo $i; ?>" type="radio" name="carroussel" <?php echo $i === 0 ? 'checked="checked"' : ''; ?>>
        <?php endfor; ?>
    </div>

    <!-- Contenus dynamiques (titre/description) -->
    <div class="hero__contenu global">
        <div class="hero__animation hero__animation--active">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>
        <p class="hero__courriel"><?php echo esc_html($hero_adresse); ?></p>
        <p class="hero__adresse">5800 Sherbrooke-est - Montréal (Québec) H1X 2A2</p>
        <p class="hero__auteur">Auteur : <?php echo esc_html($hero_auteur); ?></p>

        <form action="<?php echo esc_url($hero_cta_link); ?>" method="get">
            <button type="submit" class="hero__cta"><?php echo esc_html($hero_cta_text); ?></button>
        </form>
        <?php afficher_icones_sociales(); ?>
    </div>
</section>
