<?php
  $hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
  $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
  $hero_cta_text = get_theme_mod('hero_cta_text', 'Default Title');
  $hero_cta_link = get_theme_mod('hero_cta_link', '#');
  $hero_texte_couleur = get_theme_mod('hero_texte_couleur', '#000000');

  for ($i = 0; $i <= 2; $i++) {
    $hero_background[$i] = get_theme_mod('hero_background_' . $i, '');
}
?>

<section class="hero" style="color: <?php echo $hero_texte_couleur; ?>">
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1] ?>)"></div>
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2] ?>)"></div>
    <div class="hero__radio">
        <input  class="hero__radio__input" data-id_radio="0"   type="radio" name="carroussel"  checked="checked">
        <input  class="hero__radio__input" data-id_radio="1" type="radio" name="carroussel">
        <input  class="hero__radio__input" data-id_radio="2" type="radio" name="carroussel">
    </div>
    <div class="hero__contenu global">
        <h1 class="hero__titre">
            <?php bloginfo('name'); ?>
        </h1>
        <p class="hero__description">
            <?php bloginfo('description'); ?>
        </p>
        <p class="hero__courriel">
            <?php echo($hero_adresse); ?>
        </p>
        <p class="hero__adresse">
            5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
        </p>
        <p class="hero__auteur">
            Auteur : <?php echo $hero_auteur; ?>
        </p>
        <form action="<?php echo $hero_cta_link;?>" method="get">
            <button type="submit" class="hero__cta">
                <?php echo $hero_cta_text; ?>
            </button>
        </form>
        <?php get_template_part( 'gabarits/icone' ); ?>
    </div>
</section>