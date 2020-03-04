require('./bootstrap');
import '@fancyapps/fancybox/dist/jquery.fancybox.min';
import '@fancyapps/fancybox/dist/jquery.fancybox.min.css';

$('.fancybox').fancybox({});
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
