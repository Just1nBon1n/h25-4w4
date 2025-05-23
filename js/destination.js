/* 
Script JS permettant d'extraire les destinations de voyage 
Fonctionne avec :
- /wp-json/wp/v2/posts?categories={id}
- /wp-json/wp/v2/posts?search={pays}
*/
(function(){
    let categoryId = 2; // ID par défaut pour catégorie
    // const domaine = window.location.origin + '/4w4';
    const domaine = document.querySelector('base').href;


    parcourir_bouton();
    fetchDestinations(); // affichage initial (catégorie)

    // -------------------- Catégories --------------------
    function parcourir_bouton() {
        const boutons = document.querySelectorAll('.categorie__ul__li');

        boutons.forEach(elm => {
            elm.addEventListener('click', function () {
                console.log("Catégorie cliquée :", this.dataset.categoryId);
                boutons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                categoryId = this.dataset.categoryId;
                fetchDestinations(); // appel catégorie
            });
        });
    }

    function fetchDestinations(options = null) {
        let apiUrl;

        if (options && options.type === "search") {
            apiUrl = `${domaine}/wp-json/wp/v2/posts?search=${encodeURIComponent(options.value)}`;
        } else {
            apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        }

        console.log("API appelée :", apiUrl);

        fetch(apiUrl)
            .then(response => {
                if (!response.ok) throw new Error("Erreur réseau");
                return response.json();
            })
            .then(data => {
                const destinationList = document.querySelector('.destination__list') || document.getElementById('contenu-destinations');
                if (!destinationList) return;

                destinationList.innerHTML = ''; // vider les anciens résultats

                if (data.length === 0) {
                    destinationList.innerHTML = `<p>Aucune destination trouvée.</p>`;
                    return;
                }

                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered} <div class="bouton"></div> </h3>
                        <div>${article.excerpt.rendered}</div>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList.appendChild(articleElement);
                });

                menuBouton();
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    // -------------------- Accordéon --------------------
    function menuBouton() {
        const boutons = document.querySelectorAll('.destination .bouton');

        boutons.forEach(function(elm) {
            elm.addEventListener('click', function() {
                const parent = this.parentElement.parentElement;
                const p = parent.querySelector('p');
                if (p) {
                    p.classList.toggle('active');
                    this.classList.toggle('active');     
                }
            });
        });
    }

    // -------------------- Menu des pays --------------------
    if (document.getElementById('menu-pays')) {
        initMenuPays();
    }

    function initMenuPays() {
        const paysList = [
            "France", "États-Unis", "Canada", "Argentine", "Chili",
            "Belgique", "Maroc", "Mexique", "Japon", "Italie",
            "Islande", "Chine", "Grèce", "Suisse"
        ];

        const menu = document.getElementById('menu-pays');
        if (!menu) return;

        paysList.forEach((pays, index) => {
            const item = document.createElement('li');
            item.textContent = pays;
            item.classList.add('menu-pays-item');

            if (index === 0) item.classList.add('active');

            item.addEventListener('click', function () {
                document.querySelectorAll('#menu-pays li').forEach(li => li.classList.remove('active'));
                this.classList.add('active');

                document.getElementById('titre-pays').textContent = pays;

                fetchDestinations({ type: "search", value: pays });
            });

            menu.appendChild(item);
        });

        // Affichage initial : France
        document.getElementById('titre-pays').textContent = "France";
        fetchDestinations({ type: "search", value: "France" });
    }


})();
