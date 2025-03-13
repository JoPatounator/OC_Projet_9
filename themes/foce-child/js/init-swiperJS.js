/*var mySwiper = new Swiper('.characters-swiper', {
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 3000,
  },
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 0,
    stretch: 80,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
})*/


/*var swiper = new Swiper('.characters-swiper', {
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 3000,
  },
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
*/


var swiper = new Swiper('.characters-swiper', {

  effect: "coverflow",
  spaceBetween: 10,
  grabCursor: true,
  centeredSlides: true, // Centrage
  slidesPerView: "auto", // Ajustement auto
  coverflowEffect: {
    rotate: 50, // Angle de slides
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});