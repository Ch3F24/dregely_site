<script setup>
    import { ref, onMounted } from 'vue';
    import { Head } from '@inertiajs/inertia-vue3';

    import Layout from '../../Layouts/App.vue';
    import { Swiper, SwiperSlide } from 'swiper/vue';
    import {Pagination,Navigation} from 'swiper';

    import "swiper/css";
    import "swiper/css/pagination";
    import "swiper/css/navigation";
    import '../../../css/work.css';

    const props = defineProps({
        photos: {
            type: Object,
            default: () => ({})
        },
        work: {
            type: String
        }
    })

    const modules = [Pagination,Navigation]
    const currentIndex = ref(0)
    const activePhoto = ref(props.photos.data[0])



    function onHorizontalSlideChange(swiper) {
        currentIndex.value = swiper.activeIndex
        activePhoto.value = props.photos.data[swiper.activeIndex]
    }

    function selectThumbnail(key) {
        const activeSlide = document.querySelector('.swiper-slide-active').children[0].children[0]
        activeSlide.src = activePhoto.value.photos[key].src
    }

</script>

<template>
    <Head :title="work.title"/>

    <Layout class="">
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
                    clickable: true,
                    type: 'bullets',
                    el: '.swiper-pagination',
                }"
                :centerInsufficientSlides="true"
                class="work-slider h-full">
                <swiper-slide class="flex-row h-full w-full" v-for="photo in photos.data">
                    <div class="w-full h-full min-h-[300px]" v-if="photo.photos">
                        <img loading="lazy" :src="photo.photos[0].src" alt="first" class="object-contain max-h-full my-auto" />
                    </div>

                </swiper-slide>
            </swiper>
        </div>
        <div class="container relative mt-6 flex items-center">
            <div class="w-1/3 h-full">
                <div  v-if="activePhoto && activePhoto.photos && activePhoto.photos.length > 1" class="w-full h-ful flex space-x-4">
                    <div class="w-1/3 z-50 cursor-pointer" v-for="(thumb,key) in activePhoto.photos" @click="selectThumbnail(key)">
                        <img loading="lazy" :src="thumb['src']" alt="first" class="w-[100px] h-[100px] object-cover" >
                    </div>
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
    </Layout>
</template>
