import './bootstrap';
import Alpine from 'alpinejs';

// flatpickr
import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.min.css';

// Swiper & Required Modules
import Swiper from 'swiper';
import { Autoplay, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.myCounsellerSwiper', {
        modules: [Autoplay, Pagination], // Required for autoplay and pagination to work
        loop: true,
        slidesPerView: 1,
        spaceBetween: 24,
        speed: 600,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 24,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 24,
            },
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});