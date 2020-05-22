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

function isEmail(email) {
    const regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

const sendregform = $('.reg_submit_button');
const regform = $('.user-reg_form');
regform.on('submit',function(e){
    e.preventDefault();
    const regemail = $('#reg_email').val();
    const regpass = $('#reg_password').val();
    const regpassconf = $('#reg_password_confirmation').val();
    console.log(regemail);
    console.log(regpass);
    console.log(regpassconf);
    if(!isEmail(regemail)){
        console.log('validation: wrong email!');
        return false;
    }
    if(regpass !== regpassconf){
        console.log('validation: password not confirmed');
        return false
    }
    console.log('validation: success');
    $.get(
        "/register",
        {
            reg_email: regemail,
            reg_password: regpass,
            reg_password_confirmation: regpassconf,
        },
        function(data){
            var data_ob = JSON.parse(data);
            console.log(data_ob.errors.length);
            if(data_ob.errors.email.length > 0 || data_ob.errors.password.length > 0 ){
                console.log(data_ob.errors);
            }
        },
    );
    return false;
});
