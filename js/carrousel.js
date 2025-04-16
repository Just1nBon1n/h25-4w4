(function () {
  console.log("carrousel.js");

  const radios = document.querySelectorAll(".hero__radio__input");
  const carrousels = document.querySelectorAll(".hero__carrousel");
  let indexActif = 0; // Index actuel du carrousel

  function activeImage(index) {
    // Enlève .actif
    carrousels.forEach(c => c.classList.remove("hero__carrousel--active"));
    // Enlève le checked des radios
    radios.forEach(r => r.checked = false); // 

    // Ajoute .actif
    carrousels[index].classList.add("hero__carrousel--active");
    // Ajoute le checked à la radio correspondante
    radios[index].checked = true; 
  }

  setInterval(() => {
    indexActif = (indexActif + 1) % carrousels.length;
    activeImage(indexActif);
  }, 5000); // Change le carrousel toutes les 5 secondes

  // Écouteur pour chaque radio
  radios.forEach((radio, index) => {
    radio.addEventListener("change", () => {
      indexActif = index; 
      activeImage(index);
    });
  });

  // Initialisation du carrousel actif a 0
  if (carrousels[0]) {
    activeImage(0);
  }
})();