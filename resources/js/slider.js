import { createApp } from 'vue/dist/vue.esm-bundler';
import Slider from './components/Slider.vue'
// in this path vue-easy-lightbox/dist/external-css/*.js
import VueEasyLightbox from 'vue-easy-lightbox'

const app = createApp({})
app.use(VueEasyLightbox)
app.component('slider',Slider)
app.mount('#app');
