<template>
    <div class="relative flex-1 pb-4" :class="{'image-container' : isImage}">
        <swiper
            @slideChange="onHorizontalSlideChange"
            :modules="modules"
            :slidesPerView="slidesPerView"
            :spaceBetween="30"
            :cssMode="true"
            :navigation="{
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }"
            :pagination="{
                clickable: true,
                enabled: dots,
                type: 'bullets',
                el: '.swiper-pagination',
            }"
            :centerInsufficientSlides="true"
            class="work-slider h-full">
            <swiper-slide class="flex-row h-full" :class="{'full-w' : slidesPerView === 1}" v-for="slide in slides">
                <div class="w-full h-full slide-image" v-if="slide.photos" :style="{ backgroundImage: 'url(' + slide.photos[0].src + ')' }">
<!--                    <img loading="lazy" :src="slide.photos[0].src" alt="first"-->
<!--                         class="object-contain max-h-full my-auto"/>-->
                </div>
                <article class="space-y-4" v-else>
                    <h3>
                        <span v-if="slide.title">{{ slide.title }}</span>
                        <span v-if="slide.year"> - {{ slide.year }}</span>
                    </h3>
                    <p v-if="slide.description">{{ slide.description }}</p>
                    <div v-if="slide.pdf">
                        <a :href="slide.pdf" download class="group">
<!--                            <img src="/assets/images/download.svg" width="40" alt="Download icon" class="inline-block">-->
                            <span class="ml-4 group-hover:font-bold">Cikk letöltése</span>
                        </a>
                    </div>
                </article>

            </swiper-slide>
        </swiper>
    </div>
    <div class="relative flex items-center min-h-[20%] px-12">
        <div class="w-1/3 flex space-x-4 h-full items-center">
            <div class="w-1/3 z-50 cursor-pointer" v-if="withThumb && activeSlide.photos && activeSlide.photos.length > 1"
                 v-for="(thumb,key) in activeSlide.photos"
                 @click="selectThumbnail(key)">
                    <span :style="{ backgroundImage: 'url(' + thumb['src'] + ')' }" class="h-0 pt-[100%] block bg-cover bg-no-repeat bg-center"></span>
<!--                <img loading="lazy" :src="thumb['src']" alt="first" class="w-[100px] h-[100px] object-cover">-->
            </div>
        </div>
        <div class="w-1/3 h-full">
            <div class="swiper-pagination"></div>
        </div>
        <div class="w-1/3">
            <div v-if="activeSlide">
                <p>
                    <span class="font-bold" v-if="activeSlide.title">{{ activeSlide.title }}</span>
                    <span v-if="activeSlide.year">, {{ activeSlide.year }}</span>
                    <span v-if="activeSlide.location">, {{ activeSlide.location }}</span>
                    <span v-if="activeSlide.optional">, {{ activeSlide.optional }}</span>
                </p>
                <p>
                    <span v-if="activeSlide.size">{{ activeSlide.size }} cm</span>
                    <span v-if="activeSlide.print">, {{ activeSlide.print }}</span>
                </p>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</template>

<script>
import Axios from 'axios';
import {Swiper, SwiperSlide} from 'swiper/vue';

import {Pagination, Navigation} from 'swiper';
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import '../../css/work.css';

export default {
    name: "slider.vue",
    props: {
        route: {
            type: String,
            required: true
        },
        slidesPerView: {
            default: 1
        },
        withThumb: {
            default: false
        },
        isImage: {
            default: false
        },
        dots: {
            default: false
        }
    },
    data() {
        return {
            slides: [],
            modules: [Pagination, Navigation],
            currentIndex: 0,
            activeSlide: []
        }
    },
    components: {Swiper, SwiperSlide},

    mounted() {
        this.loadPhotos()
    },
    methods: {
        loadPhotos() {
            Axios.get(this.route).then(e => {
                this.slides = e.data.data
                if (e.data.data) {
                    this.activeSlide = e.data.data[0]
                }
            }).catch(e => {
                console.log(e)
            })
        },
        resize(image, params = []) {
            const queryString = Object.keys(params).map((key) => {
                return encodeURIComponent(key) + '=' + encodeURIComponent(params[key])
            }).join('&');

            return image.src + '&' + queryString;
        },
        onHorizontalSlideChange(swiper) {
            this.currentIndex = swiper.activeIndex
            this.activeSlide = this.slides[swiper.activeIndex]
        },
        selectThumbnail(key) {
            const activeSlide = document.querySelector('.swiper-slide-active').children[0]
            activeSlide.style.backgroundImage = `url('${this.activeSlide.photos[key].src}')`
            // console.log(activeSlide)
            // activeSlide =

            // this.activePhoto.photos[0].src = this.activePhoto.photos[key].src
        }
    }

}
</script>
