document.addEventListener('scroll', () => { // Ecouteur de l'action scromll.
    const scrollY = window.scrollY; // Distance en Y effectuée
    const grosNuage = document.querySelector('.gros-nuage'); // Selection gros nuage
    const petitNuage = document.querySelector('.petit-nuage'); // Selection petit nuage

    const facteurTranslation = scrollY * 0.4; // Valeur de Y * 0.4 vers la gauche pour un deplacement de 300px pour un scroll vertical de 720px 

    grosNuage.style.transform = `translateX(${-facteurTranslation}px)`; // Mise a jour de la propriété transform du css. La transition css assure la fluidité
    petitNuage.style.transform = `translateX(${-facteurTranslation}px)`; // Mise a jour de la propriété transform du css. La transition css assure la fluidité
});
