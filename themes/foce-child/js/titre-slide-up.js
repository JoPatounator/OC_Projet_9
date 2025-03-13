// Créez observateur
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('scroll-slide-up');
        } else {
            entry.target.classList.remove('scroll-slide-up');
        }
    });
});

// Sélectionnez tous les title
const titles = document.querySelectorAll('.title');

// Parcours chaque title les ajouter à l'observateur
titles.forEach((element) => observer.observe(element));
