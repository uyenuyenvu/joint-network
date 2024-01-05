const swiper = new Swiper('#bannerSlide', {
  slidesPerView: "auto",
  spaceBetween: 30,
  loop: true,
  autoplay: true,

  // If we need pagination
  pagination: {
    enabled: true,
    el: '.swiper-pagination',
  },
});
