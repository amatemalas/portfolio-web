 import Swiper from 'swiper';

 document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper', {
        loop: true,
        autoplay: 3000,
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            600: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            },
        },
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
 })