
// Créez l'observateur comme dans les exemples ci-dessus
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('scroll-slide-up');
        } else {
            entry.target.classList.remove('scroll-slide-up');
        }
    });
});

// Sélectionnez plusieurs éléments avec "querySelectorAll"
const titles = document.querySelectorAll('.title');

// Parcourez les éléments et ajoutez chacun à l'observateur
titles.forEach((element) => observer.observe(element));
