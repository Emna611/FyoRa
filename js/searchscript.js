  document.addEventListener("DOMContentLoaded", function() {
        const searchForm = document.getElementById('search-form');
        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');

        searchForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Empêcher le rechargement de la page

            const searchTerm = searchInput.value;

            // Envoyer une requête AJAX au serveur
            fetch('search.php', {
                method: 'POST',
                body: new FormData(searchForm)
            })
            .then(response => response.json())
            .then(data => {
                // Effacer les résultats précédents
                searchResults.innerHTML = '';

                // Afficher les nouveaux résultats
                data.forEach(product => {
                    const productItem = document.createElement('div');
                    productItem.textContent = product.name; // Par exemple, afficher le nom du produit
                    searchResults.appendChild(productItem);
                });
            })
            .catch(error => {
                console.error('Erreur lors de la recherche:', error);
            });
        });
    });

