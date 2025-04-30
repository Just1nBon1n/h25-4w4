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
  function activeAnimation(index) {
    // Enlève .actif
    hero__animation.forEach(c => c.classList.remove("hero__animation--active"));

    // Ajoute .actif
    hero__animation[index].classList.add("hero__animation--active");
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