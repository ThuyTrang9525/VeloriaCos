document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 20,
      loop: true,
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
      breakpoints: {
          1024: {
              slidesPerView: 4
          },
          768: {
              slidesPerView: 2
          },
          480: {
              slidesPerView: 1
          }
      }
  });
});
