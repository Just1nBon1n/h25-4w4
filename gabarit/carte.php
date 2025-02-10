<?php 
/**
 * Template-part
*/

?>
<article>
    <h2><?php the_title(); ?></h2>
    <div><?php echo wp_trim_words(get_the_content(), 10, " ... ") ; ?></div>
</article>

<div class="carte carte--grande">
  <div class="carte__image">
    <img src="voyage.jpg" alt="Image de voyage">
  </div>
  <div class="carte__contenu">
    <h2 class="carte__titre"><?php the_title(); ?></h2>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, " ... ") ; ?></p>
    <button class="carte__bouton carte__bouton--actif">Réserver</button>
  </div>
</div>