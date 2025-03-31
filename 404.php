<?php get_header(); ?>

<?php 
    $erreur_404_titre = get_theme_mod('erreur_404_titre', 'Erreur 404');
    $erreur_404_texte = get_theme_mod('erreur_404_texte', 'Erreur 404');
    $erreur_404_background = get_theme_mod('erreur_404_background', '');
    $erreur_404_texte_couleur = get_theme_mod('erreur_404_texte_couleur', '#000000');
?>

<section class="erreur_404" style="background-image: url(<?php echo $erreur_404_background ?>);
                            color: <?php echo $erreur_404_texte_couleur ?>;">
  <h1 class="erreur_404_titre">
    <!-- Titre de la page 404 -->
    <?php echo $erreur_404_titre; ?>
  </h1>
  <h3 class="erreur_404_texte">
    <!-- Texte de la page 404 -->
    <?php echo $erreur_404_texte; ?>
  </h3>
  <p class="bouton_acceuil">
    <!-- Bouton pour revenir à l'accueil -->
    <a href="<?php echo home_url(); ?>">Revenir à l'accueil</a> <!-- Bouton avec lien vers l'accueil -->
  </p>
</section>

<?php get_footer(); ?>
