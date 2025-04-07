document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: ".swiper-pagination", // Add pagination control
            clickable: true,
        },
        autoplay: {
            delay: 3000, // chuyển slide sau 3 giây
            disableOnInteraction: false, // vẫn autoplay dù người dùng bấm nút
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 1,
            },
        },
    });
});
