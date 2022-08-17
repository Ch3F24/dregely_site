<script setup>
    import { ref } from 'vue';
    import { Link, Head } from "@inertiajs/inertia-vue3";

    import { Swiper, SwiperSlide } from 'swiper/vue';
    import {Pagination,Navigation, Grid} from 'swiper';
    import "swiper/css";
    import "swiper/css/pagination";
    import "swiper/css/navigation";
    import "swiper/css/grid";

    import '../../css/slider.css';

    const works =  ref([])
    const modules =  [Pagination, Navigation, Grid]
    const currentIndex =  ref(0)
    const activePhoto =  ref([])
    const lang =  document.documentElement.lang

    const props = defineProps({
        worksData: {
            type: Object
        }
    })
</script>

<template>
    <div class="h-full p-0 relative flex-1 slider-container w-full">
        <swiper
            :cssMode=true
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
            <swiper-slide class="flex-row h-full w-full" v-for="work in worksData">
<!--                <a :href="lang + '/works/' + work.slug" class="w-full h-full z-10 swiper-no-swiping" :title="work.title">-->
<!--                    <img loading="lazy" :src="work.cover" alt="first" class="object-cover max-h-full my-auto w-full" :title="work.title" />-->
<!--                    <p>{{ work.title }} - {{ work.date}}</p>-->
<!--                </a>-->

                <Link :href="route('gallery.show',work.slug)" class="w-full h-full z-10 swiper-no-swiping" :title="work.title">
                    <img loading="lazy" :src="work.cover" alt="first" class="object-cover max-h-full my-auto w-full" :title="work.title" />
                    <p>{{ work.title }} - {{ work.date}}</p>
                </Link>
            </swiper-slide>
        </swiper>
    </div>

    <div class="container relative h-[44px] mt-6">
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</template>

<!--<script>-->
<!--import Axios from 'axios';-->
<!--import { Swiper, SwiperSlide } from 'swiper/vue';-->

<!--import {Pagination,Navigation, Grid} from 'swiper';-->
<!--import "swiper/css";-->
<!--import "swiper/css/pagination";-->
<!--import "swiper/css/navigation";-->
<!--import "swiper/css/grid";-->

<!--import '../../css/slider.css';-->


<!--export default {-->
<!--    name: "slider.vue",-->
<!--    data() {-->
<!--      return {-->
<!--            works: [],-->
<!--            modules: [Pagination, Navigation, Grid],-->
<!--            currentIndex: 0,-->
<!--            activePhoto: [],-->
<!--            lang: ''-->
<!--      }-->
<!--    },-->
<!--    components: {Swiper, SwiperSlide},-->

<!--    mounted() {-->
<!--        this.loadWorks()-->
<!--        this.lang = document.documentElement.lang;-->
<!--    },-->
<!--    methods: {-->
<!--        loadWorks() {-->
<!--            Axios.get('/api/works').then(e => {-->
<!--                this.works = e.data.data-->
<!--                // this.activePhoto = e.data.data[0]-->
<!--            }).catch(e => {-->
<!--                console.log(e)-->
<!--            })-->
<!--        },-->
<!--        resize(image,params = []) {-->
<!--            const queryString = Object.keys(params).map((key) => {-->
<!--                return encodeURIComponent(key) + '=' + encodeURIComponent(params[key])-->
<!--            }).join('&');-->

<!--            return image.src + '&' + queryString;-->
<!--        },-->
<!--    }-->

<!--}-->
<!--</script>-->
