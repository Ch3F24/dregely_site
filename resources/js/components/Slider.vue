<template>
    <div class="relative flex-1 pb-4 max-h-[90%] transition transition-all" :class="{'image-container' : isImage}" @click="openGallery">
        <swiper
            @slideChange="onHorizontalSlideChange"
            :modules="modules"
            :slidesPerView="1"
            :spaceBetween="30"
            :cssMode="true"
            :navigation="{
                enabled: false,
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }"
            :pagination="{
                clickable: true,
                enabled: false,
                type: 'bullets',
                el: '.swiper-pagination',
            }"
            :breakpoints="{
              '768': {
                slidesPerView: slidesPerView,
                navigation: {
                    enabled:true,
                },
                pagination: {
                    enabled: dots
                }
              },
            }"
            :centerInsufficientSlides="true"
            class="work-slider h-full">

            <swiper-slide v-if="exhibition" class="flex-row h-full full-w swiper-no-swiping" v-for="slide in slides.photos">
                <div class="w-full h-full slide-image" v-if="isImage && slide.src" :style="{ backgroundImage: 'url(' + slide.src + ')' }">
                </div>
            </swiper-slide>

            <swiper-slide v-else-if="isVideo" class="flex-row h-full full-w swiper-no-swiping" v-for="slide in slides.photos">
                <div class="w-full h-full slide-image">
                    <video controls class="h-full mx-auto" v-if="slide.substr(slide.length - 3) === 'mp4'">
                        <source :src="slide" type="video/mp4">
                    </video>
                    <img :src="slide" class="h-full mx-auto" alt="">
                </div>

<!--                <div class="w-full h-full slide-image" v-if="isImage && slide.src" :style="{ backgroundImage: 'url(' + slide.src + ')' }">-->
<!--                </div>-->
            </swiper-slide>
            <swiper-slide v-else class="flex-row h-full swiper-no-swiping" :class="{'full-w' : slidesPerView === 1}" v-for="slide in slides">
                <div class="w-full h-full slide-image swiper-no-swiping" v-if="isImage && slide.photos" :style="{ backgroundImage: 'url(' + slide.photos[0].src + ')' }">
                </div>
                <article class="space-y-4" v-else>
                    <h3>
                        <span v-if="slide.title">{{ slide.title }}</span>
                        <span v-if="slide.year"> - {{ slide.year }}</span>
                    </h3>
                    <p v-if="slide.description">{{ slide.description }}</p>
                    <div v-if="slide.pdf">
                        <a :href="slide.pdf" download class="group">
                            <img :src="icon" width="40" alt="Download icon" class="inline-block">
                            <span class="ml-4 group-hover:font-medium">Cikk letöltése</span>
                        </a>
                    </div>
                </article>

            </swiper-slide>
        </swiper>
    </div>
    <div class="relative md:flex items-center min-h-[10%] md:px-12">
        <div class="md:w-1/3 flex space-x-4 h-full items-center">
            <div class="w-1/3 z-50 cursor-pointer" v-if="withThumb && activeSlide && activeSlide.photos && activeSlide.photos.length > 1"
                 v-for="(thumb,key) in activeSlide.photos"
                 @click="selectThumbnail(key)">
                    <span :style="{ backgroundImage: 'url(' + thumb['src'] + ')' }" class="h-0 pt-[100%] block bg-cover bg-no-repeat bg-center"></span>
<!--                <img loading="lazy" :src="thumb['src']" alt="first" class="w-[100px] h-[100px] object-cover">-->
            </div>
        </div>
        <div class="md:w-1/3 h-full" v-if="dots">
            <div class="swiper-pagination"></div>
        </div>
        <div class="md:w-1/3 mt-4 md:mt-0">
            <div v-if="activeSlide && isImage">
                <p>
                    <span class="font-medium" v-if="activeSlide.title">{{ activeSlide.title }}</span>
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
<!--    <modal v-if="open" @close="open = false" class="relative">-->

        <vue-easy-lightbox
            v-if="open && isImage"
            :visible="open"
            :imgs="resize(activeSlide.photos[thumbnailIndex],{w: 3200})"
            @hide="openGallery"
        >
        </vue-easy-lightbox>
<!--        <img :src="resize(activeSlide.photos[0],{w: 3200})" alt="sas" class="max-h-full mx-auto" style="display: block;-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" :class="{'zoomed' : zoomed}" @click="zoomed = true">-->
        <!--                    <div class="bg-white w-full">-->
        <!--                        <item v-for="(amount,key) in item.amounts" :item="item" :amount="amount" :is-full="isFull" :key="key" :first="key === 0" @close="open = false"/>-->
        <!--                    </div>-->
<!--    </modal>-->
</template>

<script>
import Axios from 'axios';
import Modal from './Modal.vue'

import {Swiper, SwiperSlide} from 'swiper/vue';
import {Pagination, Navigation} from 'swiper';
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import '../../css/work.css';
const body = document.body

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
        },
        exhibition: {
            default: false
        },
        isVideo: {
            default: false
        }
    },
    data() {
        return {
            slides: [],
            modules: [Pagination, Navigation],
            currentIndex: 0,
            thumbnailIndex: 0,
            activeSlide: [],
            open: false,
            icon: '/assets/images/download.svg'
        }
    },
    components: {Swiper, SwiperSlide, Modal},

    mounted() {
        this.loadPhotos()
    },
    methods: {
        loadPhotos() {
            Axios.get(this.route).then(e => {
                this.slides = e.data.data
                if (e.data.data) {
                    if (this.exhibition) {
                        this.activeSlide = e.data.data
                    } else {
                        this.activeSlide = e.data.data[0]
                    }
                }
            }).catch(e => {
                console.log(e)
            })
        },
        genyo() {
        // const activeSlide = document.querySelector('.swiper-slide-active').children[0]

        // console.log(activeSlide)
        this.open = true
        this.selectThumbnail(this.thumbnailIndex)

        },
        resize(image, params = []) {
            let src = image.src.split('?'[0])[0];
            // console.log(src)
            const queryString = Object.keys(params).map((key) => {
                return encodeURIComponent(key) + '=' + encodeURIComponent(params[key])
            }).join('&');

            return src + '?' + queryString;
        },
        onHorizontalSlideChange(swiper) {
            this.thumbnailIndex = 0;

            let _this = this
            setTimeout(function () {
                if (!this.exhibition) {
                    _this.currentIndex = swiper.activeIndex
                    _this.activeSlide = _this.slides[swiper.activeIndex]
                }
            },300)
        },
        selectThumbnail(key) {
            this.thumbnailIndex = key;
            let _this = this

            setTimeout(function () {
                const activeSlide = document.querySelector('.swiper-slide-active').children[0]
                activeSlide.style.backgroundImage = `url('${_this.activeSlide.photos[key].src}')`
            })
            // const activeSlide = document.querySelector('.swiper-slide-active').children[0]
            // activeSlide.style.backgroundImage = `url('${this.activeSlide.photos[key].src}')`
        },
        openGallery() {
            if (this.isImage) {
                if (this.open) {
                    this.open = false
                    body.style.overflow = 'auto'
                    this.selectThumbnail(this.thumbnailIndex)

                } else {
                    this.open = true
                    body.style.overflow = 'hidden'
                    this.selectThumbnail(this.thumbnailIndex)
                }
            }
        }
    }

}
</script>
