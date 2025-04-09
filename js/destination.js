/* 
Script JS permettant d'extraire les destinations de voyage 
*/
(function(){
    // console.log("destinations.js");
    let categoryId = 2; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href;
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    // console.log(apiUrl); 
    parcourir_bouton();
    fetchDestinations(apiUrl);

    function parcourir_bouton() {
        const category__ul__li = document.querySelectorAll('.categorie__ul__li');
    
        category__ul__li.forEach(elm => {
            elm.addEventListener('click', function() {
                console.log("Bouton cliqué :", this);
                category__ul__li.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                categoryId = this.dataset.categoryId;
                fetchDestinations();
            });
        });
    }
    

    function fetchDestinations() {
        // console.log("API appelée :", apiUrl);
        apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ''; // Vide la liste précédente

                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered} <div class="bouton"></div> </h3>
                        <div>${article.excerpt.rendered}</div>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList .appendChild(articleElement);
                });

                // Ajoute un écouteur d'événement pour chaque bouton "X" apres le chargement des articles
                menuBouton();
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    
    function menuBouton() {
        const boutons = document.querySelectorAll('.destination .bouton');
    
        boutons.forEach(function(elm) {
            elm.addEventListener('click', function() {
                console.log("menu cliqué :", this);
                const parent = this.parentElement.parentElement;
                const p = parent.querySelector('p');
                if (p) {
                    p.classList.toggle('active');
                    this.classList.toggle('active');     
                }
            });
        });
    }
       
})()






