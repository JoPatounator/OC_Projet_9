document.addEventListener('DOMContentLoaded', function () {
    // Sélection tous les chat
    const cats = document.querySelectorAll('.deco-cat-1, .deco-cat-2, .deco-cat-3');

    // Créez un nouvel objet Audio pour le son de miaulement
    const miaouSond = new Audio('http://koukaki.local/wp-content/uploads/2025/03/miaou-chat.mp3');

    // Ajoutez un écouteur d'événement pour chaque chat
    cats.forEach(cat => {
        cat.addEventListener('click', function () {
            miaouSond.play(); // Joue le son au clic
        });
    });
});