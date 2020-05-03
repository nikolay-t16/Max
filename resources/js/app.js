require('./bootstrap');
import '@fancyapps/fancybox/dist/jquery.fancybox.min';
import '@fancyapps/fancybox/dist/jquery.fancybox.min.css';

const callcpicDefault = 'https://oooeos.ru/img/circle.png';
const callcpicMouseOver = 'https://oooeos.ru/img/wholecircle.png';
const callcpic = $('#callpic');
callcpic.mouseover(()=> callcpic.attr('src', callcpicMouseOver));
callcpic.mouseout(()=> callcpic.attr('src', callcpicDefault));
$('.fancybox').fancybox({});
$('#callpic_a').fancybox({});
$('.loginformbutton').fancybox({});
const regpopupbutton = $('.regpopupbutton');
regpopupbutton.click(() => $.fancybox.close());
regpopupbutton.fancybox({});
const swiper = require('swiper/js/swiper.min');
var mySwiper = new swiper('.swiper-container', {
    speed: 400,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
