const swiper = new Swiper('.swiper', {
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