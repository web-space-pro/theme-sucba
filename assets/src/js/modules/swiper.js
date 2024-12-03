import Swiper from 'swiper';
import {Autoplay, EffectFade, Navigation, Pagination} from 'swiper/modules';


Swiper.use([Navigation, Pagination, Autoplay, EffectFade]);

let swiper = new Swiper(".mySwiper", {
    spaceBetween: 35,
    slidesPerView: 3,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        575: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        992:{
            slidesPerView: 3,
            spaceBetween: 35
        }
    }
});