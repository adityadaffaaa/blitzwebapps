var swiper = new Swiper(".SwiperUlasan", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  autoplay: { delay: 8000 },
  paginationType: "custom",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-ulasan-button-next",
    prevEl: ".swiper-ulasan-button-prev",
  },
});
 