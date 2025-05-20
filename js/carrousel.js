(function () {
  console.log("carrousel.js");

  let hero__radios = document.querySelectorAll(".hero__radio__input");
  let hero__carrousels = document.querySelectorAll(".hero__carrousel");
  let hero__animation = document.querySelectorAll(".hero__animation"); 
  let indexActif = 0; // Index actuel du carrousel

  ///////////////////////////////////////////////////////////// Image Carroussel
  function activeImage(index) {
    // Enlève .actif
    hero__carrousels.forEach(c => c.classList.remove("hero__carrousel--active"));
    // Enlève le checked des hero__radios
    hero__radios.forEach(r => r.checked = false); 

    // Ajoute .actif
    hero__carrousels[index].classList.add("hero__carrousel--active");
    // Ajoute le checked à la radio correspondante
    hero__radios[index].checked = true; 
  }

  ///////////////////////////////////////////////////////// Animation Carroussel
  const animations = ["anim-top", "anim-left", "anim-bottom", "anim-zoom", "anim-rotate"];
  function activeAnimation(index) {
    const animationElement = document.querySelector(".hero__animation");
    if (!animationElement) return;

    // Supprime toutes les classes d’animation
    animations.forEach(anim => animationElement.classList.remove(anim));

    // Supprime aussi la classe d'activation (si utilisée)
    animationElement.classList.remove("hero__animation--active");

    // Force le reflow (permet de réinitialiser l'état CSS)
    void animationElement.offsetWidth;

    // Remet la classe active
    animationElement.classList.add("hero__animation--active");

    // Applique la nouvelle classe d’animation
    const newClass = animations[index % animations.length];
    animationElement.classList.add(newClass);
  }


  setInterval(() => {
    indexActif = (indexActif + 1) % hero__carrousels.length;
    activeImage(indexActif);
    activeAnimation(indexActif); 
  }, 5000); // Change le carrousel toutes les 5 secondes

  // Écouteur pour chaque radio
  hero__radios.forEach((radio, index) => {
    radio.addEventListener("change", () => {
      indexActif = index; 
      activeImage(indexActif);
      activeAnimation(indexActif); 
    });
  });

  // Initialisation du carrousel actif a 0
  if (hero__carrousels[0]) {
    activeImage(0);
    activeAnimation(0);
  }
})();