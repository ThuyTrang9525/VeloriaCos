
const aboutSwiper = new Swiper(".about-us-swiper", {
effect: "coverflow",
grabCursor: true,
centeredSlides: true,
slidesPerView: "auto",
loop: true, // Cho quay vòng nếu muốn
coverflowEffect: {
  rotate: 50,
  stretch: 0,
  depth: 120,
  modifier: 1,
  slideShadows: true,
},
pagination: {
  el: ".about-us-pagination",
  clickable: true,
},
autoplay: {
  delay: 3000, // Thời gian chuyển động giữa các slide (2500ms = 2.5 giây)
  disableOnInteraction: false, // Cho phép tự động chuyển động lại sau khi người dùng tương tác
},
});