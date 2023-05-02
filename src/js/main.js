const welcomeSlider = document.querySelector('.welcome-slider__main');
const welcomeSwiper = new Swiper(welcomeSlider, {
  slidesPerView: 1,
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
    bulletClass: 'welcome-slider__pagination-bullet',
    bulletActiveClass: 'welcome-slider__pagination-bullet_active',
  }
});

console.log(Swiper)