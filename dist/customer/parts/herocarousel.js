var swiper = new Swiper(".hero-carousel", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  autoplay: { delay: 8000 },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
