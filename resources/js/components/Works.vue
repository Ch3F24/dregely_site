<template>
    <div class="container p-0 relative flex-1 slider-container">
        <swiper
            :modules="modules"
            :slidesPerView="4"
            :spaceBetween="30"
            :navigation="{
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }"
            :grid="{
                rows: 2
            }"
            :pagination="{
                enabled: true,
                type: 'bullets',
                el: '.swiper-pagination',
            }"
            class="work-slider h-full w-full">
            <swiper-slide class="flex-row h-full w-full" v-for="work in works">
                <div class="w-full h-full">
                    <img loading="lazy" :src="work.cover" alt="first" class="object-contain max-h-full my-auto" />
                    <p>{{ work.title }} - {{ work.date}}</p>
                </div>
            </swiper-slide>
        </swiper>
    </div>

    <div class="container relative h-[44px] mt-6">
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</template>

<script>
import Axios from 'axios';
import { Swiper, SwiperSlide } from 'swiper/vue';

import {Pagination,Navigation, Grid} from 'swiper';
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import "swiper/css/grid";

import '../../css/slider.css';


export default {
    name: "slider.vue",
    data() {
      return {
            works: [],
            modules: [Pagination, Navigation, Grid],
            currentIndex: 0,
            activePhoto: []
      }
    },
    components: {Swiper, SwiperSlide},

    mounted() {
        this.loadWorks()

    },
    methods: {
        loadWorks() {
            Axios.get('/api/works').then(e => {
                this.works = e.data.data
                // this.activePhoto = e.data.data[0]
            }).catch(e => {
                console.log(e)
            })
        },
        resize(image,params = []) {
            const queryString = Object.keys(params).map((key) => {
                return encodeURIComponent(key) + '=' + encodeURIComponent(params[key])
            }).join('&');

            return image.src + '&' + queryString;
        },
        // onHorizontalSlideChange(swiper) {
        //     this.currentIndex = swiper.activeIndex
        //     this.activePhoto = this.photos[swiper.activeIndex]
        // },
        // selectThumbnail(key) {
        //     const activeSlide = document.querySelector('.swiper-slide-active').children[0].children[0]
        //     activeSlide.src = this.activePhoto.photos[key].src
        //
        //     // this.activePhoto.photos[0].src = this.activePhoto.photos[key].src
        // }
    }

}
</script>
