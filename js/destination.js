/* 
Script JS permettant d'extraire les destinations de voyage 
*/
(function(){
    console.log("destinations.js");
    let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href;
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    
    fetchDestinations(apiUrl);
    console.log(apiUrl);
    parcourir_bouton();

    function parcourir_bouton() {
        const category__ul__li = document.querySelectorAll('.categorie__ul__li');
        category__ul__li.forEach(elm => {
            elm.addEventListener('click', function() {
                console.log("Bonton cliqué :", this);
                categoryId = this.dataset.categoryId; // suppose que tu as un data-category-id sur tes boutons
                fetchDestinations(apiUrl);
            })
        })
    }

    function fetchDestinations(categoryId) {
        apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        console.log("API appelée :", apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ''; // Vide la liste précédente

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
    }
})()




