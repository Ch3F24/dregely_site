<template>
    <div class="h-full pb-4 relative flex-1 slider-container" v-if="slides">
        <swiper
            :cssMode=true
            :modules="modules"
            :slidesPerView="1"
            :spaceBetween="30"
            :navigation="{
                enabled:true,
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }"
            :pagination="{
                clickable: true,
                enabled: true,
                type: 'bullets',
                el: '.swiper-pagination',
            }"
            :breakpoints="{
              '768': {
                slidesPerView: 4,
                grid: {
                    rows: 2
                },
              },
            }"
            class="work-slider h-full w-full">
            <swiper-slide class="flex-row h-80 lg:h-full w-full" v-for="slide in slides">
                <a :href="lang + '/work/' + slide.slug" class="w-full h-full z-10 swiper-no-swiping  flex flex-col" :title="slide.title">
                    <div class="w-full flex-1 overflow-hidden">
                        <div class="h-full w-full bg-cover bg-no-repeat bg-center hover:scale-110 transition-transform	" :style="{ backgroundImage: 'url(' + slide.cover + ')' }"></div>
                    </div>
<!--                    <img loading="lazy" :src="slide.cover" alt="first" class="object-cover max-h-[85%] my-auto w-full" :title="slide.title" />-->
                    <p>{{ slide.title }} - {{ slide.year }}</p>
                </a>
            </swiper-slide>
        </swiper>
    </div>

    <div class="relative h-14 min-h-[10%]" v-if="slides">
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
            slides: [],
            modules: [Pagination, Navigation, Grid],
            currentIndex: 0,
            activeSlide: [],
            lang: ''
      }
    },
    components: {Swiper, SwiperSlide},

    mounted() {
        this.loadSlides()
        this.lang = document.documentElement.lang;
    },
    methods: {
        loadSlides() {
            Axios.get('/api/work').then(e => {
                this.slides = e.data.data
                this.activeSlide = e.data.data[0]
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
    }
}
</script>


<!--<template>-->
<!--    <div class="h-full p-0 relative flex-1 slider-container">-->

<!--        <swiper-->
<!--            :slidesPerView="4"-->
<!--            :grid="{-->
<!--                rows: 2,-->
<!--            }"-->
<!--            :spaceBetween="30"-->
<!--            :pagination="{-->
<!--                enabled: true,-->
<!--                type: 'bullets',-->
<!--                el: '.swiper-pagination',-->
<!--            }"-->
<!--            :navigation="{-->
<!--                nextEl: '.swiper-button-next',-->
<!--                prevEl: '.swiper-button-prev',-->
<!--            }"-->
<!--            :modules="modules"-->
<!--            class="work-slider h-full w-full"-->
<!--        >-->
<!--            <swiper-slide>Slide 1</swiper-slide><swiper-slide>Slide 2</swiper-slide-->
<!--        ><swiper-slide>Slide 3</swiper-slide><swiper-slide>Slide 4</swiper-slide-->
<!--        ><swiper-slide>Slide 5</swiper-slide><swiper-slide>Slide 6</swiper-slide-->
<!--        ><swiper-slide>Slide 7</swiper-slide><swiper-slide>Slide 8</swiper-slide-->
<!--        ><swiper-slide>Slide 9</swiper-slide>-->
<!--        </swiper>-->
<!--    </div>-->
<!--    <div class="relative h-[44px] mt-6">-->
<!--        <div class="swiper-pagination"></div>-->
<!--        <div class="swiper-button-next"></div>-->
<!--        <div class="swiper-button-prev"></div>-->
<!--    </div>-->
<!--</template>-->
<!--<script>-->
<!--// Import Swiper Vue.js components-->
<!--import { Swiper, SwiperSlide } from "swiper/vue";-->

<!--// Import Swiper styles-->
<!--import "swiper/css";-->

<!--import "swiper/css/grid";-->
<!--import "swiper/css/pagination";-->

<!--// import "./style.css";-->

<!--// import required modules-->
<!--import { Grid, Pagination } from "swiper";-->

<!--export default {-->
<!--    components: {-->
<!--        Swiper,-->
<!--        SwiperSlide,-->
<!--    },-->
<!--    setup() {-->
<!--        return {-->
<!--            modules: [Grid, Pagination],-->
<!--        };-->
<!--    },-->
<!--};-->
<!--</script>-->
<!--<style>-->


<!--.swiper {-->
<!--    width: 100%;-->
<!--    height: 100%;-->
<!--    margin-left: auto;-->
<!--    margin-right: auto;-->
<!--}-->

<!--.swiper-slide {-->
<!--    text-align: center;-->
<!--    font-size: 18px;-->
<!--    background: #fff;-->
<!--    height: calc((100% - 30px) / 2) !important;-->

<!--    /* Center slide text vertically */-->
<!--    display: -webkit-box;-->
<!--    display: -ms-flexbox;-->
<!--    display: -webkit-flex;-->
<!--    display: flex;-->
<!--    -webkit-box-pack: center;-->
<!--    -ms-flex-pack: center;-->
<!--    -webkit-justify-content: center;-->
<!--    justify-content: center;-->
<!--    -webkit-box-align: center;-->
<!--    -ms-flex-align: center;-->
<!--    -webkit-align-items: center;-->
<!--    align-items: center;-->
<!--}-->

<!--</style>-->
