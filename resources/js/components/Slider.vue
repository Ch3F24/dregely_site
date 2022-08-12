<template>
    <div class="container image-container relative">
    <swiper
        @slideChange="onHorizontalSlideChange"
        :modules="modules"
        :slidesPerView="1"
        :cssMode="true"
        :navigation="{
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }"
        :pagination="{
            enabled: true,
            type: 'bullets',
            el: '.swiper-pagination',
        }"
        :centerInsufficientSlides="true"
        class="work-slider h-full">
        <swiper-slide class="flex-row h-full w-full" v-for="photo in photos">
            <div class="w-full h-full">
                <img loading="lazy" :src="photo.photos[0].src" alt="first" class="object-contain max-h-full my-auto" />
            </div>

        </swiper-slide>
    </swiper>
    </div>
        <div class="container relative mt-6 flex items-center">
            <div class="w-1/3 flex space-x-4 h-full">
                <div class="w-1/3 z-50 cursor-pointer" v-for="(thumb,key) in activePhoto.photos" @click="selectThumbnail(key)">
                    <img loading="lazy" :src="thumb['src']" alt="first" class="w-[100px] h-[100px] object-cover" >
                </div>
            </div>
            <div class="w-1/3 h-full">
                <div class="swiper-pagination"></div>
            </div>
            <div class="w-1/3" v-if="this.activePhoto">
                <p>
                    <span class="font-bold" v-if="activePhoto.title">{{ activePhoto.title }}</span>
                    <span v-if="activePhoto.date"> ,{{ activePhoto.date }}</span>
                </p>
                <p>
                    <span v-if="activePhoto.size">{{ activePhoto.size }} cm</span>
                    <span v-if="activePhoto.print">, {{ activePhoto.print }}</span>
                </p>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
</template>

<script>
import Axios from 'axios';
import { Swiper, SwiperSlide } from 'swiper/vue';

import {Pagination,Navigation} from 'swiper';
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import '../../css/work.css';

export default {
    name: "slider.vue",
    data() {
      return {
            photos: [],
            modules: [Pagination,Navigation],
            currentIndex: 0,
            activePhoto: []
      }
    },
    components: {Swiper, SwiperSlide},

    mounted() {
        this.loadPhotos()

    },
    methods: {
        loadPhotos() {
            Axios.get('/api/photos/1').then(e => {
                this.photos = e.data.data
                this.activePhoto = e.data.data[0]
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
        onHorizontalSlideChange(swiper) {
            this.currentIndex = swiper.activeIndex
            this.activePhoto = this.photos[swiper.activeIndex]
        },
        selectThumbnail(key) {
            const activeSlide = document.querySelector('.swiper-slide-active').children[0].children[0]
            activeSlide.src = this.activePhoto.photos[key].src

            // this.activePhoto.photos[0].src = this.activePhoto.photos[key].src
        }
    }

}
</script>
