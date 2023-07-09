//==================Slider modal=============================

 let swiperProjects = new Swiper(".swiper-projects-bottom", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
  let swiper2 = new Swiper(".swiper-projects", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-projects-button-next",
        prevEl: ".swiper-projects-button-prev",
      },
      thumbs: {
        swiper: swiperProjects,
      },
    });

const swiperFurn = new Swiper('.swiper-furn', {
  // Optional parameters
  loop: true,
  slidesPerView: "auto",
  effect: 'coverflow',
  coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 50,
        modifier: 2,
        slideShadows: true,
      },
  
  // Navigation arrows
  navigation: {
    nextEl: '.work-swiper-button-next',
    
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

