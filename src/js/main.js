document.addEventListener('DOMContentLoaded', () => {
  try {
    setCorrectSliders();
    setCorrectLazyLoad();
  } catch(err) {
    console.error(err);
  }
})

// Слайдеры
function setCorrectSliders() {
  const doWelcomeSlider = () => {
    const welcomeSlider = document.querySelector('.welcome-slider__main');
    const welcomeSwiper = new Swiper(welcomeSlider, {
      slidesPerView: 1,
      grabCursor: true,
      autoplay: {
        delay: 3500,
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
        bulletClass: 'pagination-bullet',
        bulletActiveClass: 'pagination-bullet_active',
      }
    });
  };
  const doActionsSlider = () => {
    const actionsSliders = document.querySelectorAll('.action__slider');
    actionsSliders.forEach((actionSlider) => {
      const actionsSwiper = new Swiper(actionSlider, {
        grabCursor: true,
        parallax: true,
        speed: 700
      });
    });
  };
  const doHeroesSlider = () => {
    const heroesSlider = document.querySelector('.heroes-slider');
    const heroesSwiper = new Swiper(heroesSlider, {
      slidesPerView: 1,
      pagination: {
        el: '.heroes-slider__pagination',
        type: 'bullets',
        clickable: true,
        bulletClass: 'pagination-bullet',
        bulletActiveClass: 'pagination-bullet_active',
      },
      breakpoints: {
        660: {
          slidesPerView: 2,
        }
      }
    });
  };

  doWelcomeSlider();
  doActionsSlider();
  doHeroesSlider();
}

// Ленивая загрузка
function setCorrectLazyLoad() {
  const lazy = new LazyLoad();
}

const links = document.querySelectorAll('.video-iframe-link');

links.forEach((link) => {
  link.addEventListener('click', (event) => {
    event.preventDefault();
    
    new Fancybox([
      {
        src: link.href,
        type: "video",
      },
    ]);
  });
});