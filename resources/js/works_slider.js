import { createApp } from 'vue/dist/vue.esm-bundler';
import Slider from './components/GridSlider.vue'

const app = createApp({})
app.component('grid-slider',Slider)
app.mount('#app');

// import { createApp } from 'vue';
// import Slider from './components/GridSlider.vue'
//
// const app = createApp(Slider)
// app.mount("#app");
