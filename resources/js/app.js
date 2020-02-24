require('./bootstrap');
const swiper = require('swiper/js/swiper.min');
const mySwiper = new swiper(
    '.swiper-wrapper',
    {
        direction: 'horizontal',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        effect: 'fade',
        loop: true,
        speed: 1e3,
        autoHeight: true,
        simulateTouch: false,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        }
    }
);
console.log('123');
