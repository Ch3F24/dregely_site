import {Swiper,Grid,Pagination,Navigation} from 'swiper';
import "swiper/css";
import "swiper/css/grid";
import "swiper/css/pagination";
import "swiper/css/navigation";
import '../css/slider.css';

new Swiper(".mySwiper", {
    slidesPerView: 4,
    grid: {
        rows: 2
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    modules: [Grid,Pagination,Navigation],
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});
