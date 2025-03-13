<?php
  $hero_adresse = get_theme_mod('hero_adresse', 'Default Title');
  $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
  $hero_background = get_theme_mod('hero_background', ''); 
  $hero_cta_text = get_theme_mod('hero_cta_text', 'Default Title');
  $hero_cta_link = get_theme_mod('hero_cta_link', '#');
  $hero_texte_couleur = get_theme_mod('hero_texte_couleur', '#000000');
?>

<section class="hero" style="background-image: url(<?php echo $hero_background ?>);
                            color: <?php echo $hero_texte_couleur; ?>">
  <div class="hero__contenu global">
      <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
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
      <div class="hero__icone">
          <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
          <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
          <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
          <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
      </div>
  </div>
</section>