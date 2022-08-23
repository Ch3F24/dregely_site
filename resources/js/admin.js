// import '../css/app.css';

import { createApp } from 'vue/dist/vue.esm-bundler';
import BulkUpload from './components/BulkUpload.vue'

// const app = createApp(Slider)
const app = createApp({})
app.component('bulk-upload',BulkUpload)
app.mount('#app');



// import {Swiper,Pagination,Navigation} from 'swiper';
// import "swiper/css";
// import "swiper/css/pagination";
// import "swiper/css/navigation";
// import '../css/work.css';
//
// new Swiper(".work-slider", {
//     cssMode: true,
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
//     modules: [Pagination,Navigation],
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true
//     }
// });
//
// const thumbs = document.querySelectorAll('.photo-thumb');
//
// thumbs.forEach(thumb => {
//     thumb.addEventListener('click',function (photo) {
//         var activeSlide = document.querySelector('.swiper-slide-active').children[0].children[0]
//
//         if (photo.target.dataset.landscape) {
//             // activeSlide.classList.add('landscape')
//             // activeSlide.classList.remove('h-full')
//
//         } else {
//             // activeSlide.classList.remove('landscape')
//             // activeSlide.classList.add('h-full')
//         }
//
//         activeSlide.src = photo.target.src
//         console.log(activeSlide.src)
//
//     })
// })
