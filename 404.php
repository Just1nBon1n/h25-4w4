<?php get_header(); ?>

<main>
  <p class="erreur_barre haut">//////////////////////////////////////////////////////////////////////////////////////////</p>
  <section class="erreur_404">
    <h1>Erreur 404</h1>
    <h3>La page que vous cherchez n'existe pas.</h3>
    <p class="bouton_acceuil">
      <a href="<?php echo home_url(); ?>">Revenir à l'accueil</a> <!-- Bouton avec lien vers l'accueil -->
    </p>
  </section>
  <p class="erreur_barre bas">//////////////////////////////////////////////////////////////////////////////////////////</p>
</main>

<?php get_footer(); ?>
