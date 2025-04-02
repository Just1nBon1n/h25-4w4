/* Script JS permettant d'extraire les destinations de voyage */
(function(){
  console.log("destinations.js");
  const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
  const domaine = window.location.href;
  const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
  console.log(apiUrl);

  fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
          const destinationList = document.querySelector('.destination__list');
          data.forEach(article => {
              const articleElement = document.createElement('div');
              articleElement.innerHTML = `
                  <h3>${article.title.rendered}</h3>
                  <div>${article.excerpt.rendered}</div>
                  <a href="${article.link}">Lire plus</a>
              `;
              destinationList .appendChild(articleElement);
          });
      })
      .catch(error => console.error('Erreur lors de la récupération des articles:', error));

    function parcourir_bouton() {
      const category__ul__li = document.querySelectorAll('.categorie__ul__li');
      category__ul__li.forEach(elm => {
          elm.addEventListener('click', function() {
              console.log("Bonton cliqué :", this);
          })
      })
    }
    
    parcourir_bouton();
})()

// fetch(apiUrl)
//           .then(response => {
//               if (!response.ok) {
//                   throw new Error(`Erreur HTTP : ${response.status}`);
//               }
//               return response.json();
//           })
//           .then(data => {
//               const destinationList = document.querySelector('.destination__list');
//               if (!destinationList) {
//                   console.error("Erreur : Élément .destination__list introuvable.");
//                   return;
//               }

//               // Vider la liste avant d'ajouter les nouveaux articles
//               destinationList.innerHTML = '';

//               // Vérifier s'il y a des articles
//               if (data.length === 0) {
//                   destinationList.innerHTML = '<p>Aucune destination trouvée.</p>';
//                   return;
//               }

//               // Générer les articles
//               data.forEach(article => {
//                   const articleElement = document.createElement('div');
//                   articleElement.classList.add('destination__item');
//                   articleElement.innerHTML = `
//                       <h3>${article.title.rendered}</h3>
//                       <div>${article.excerpt.rendered}</div>
//                       <a href="${article.link}" target="_blank">Lire plus</a>
//                   `;
//                   destinationList.appendChild(articleElement);
//               });
//           })
//           .catch(error => console.error('Erreur lors de la récupération des articles:', error));


