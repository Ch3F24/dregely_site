import './bootstrap';
import '../css/app.css';

import { createApp } from 'vue';
import Slider from './components/Sidebar.vue'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';


const app = createApp(Slider)
app.use(ZiggyVue,Ziggy)
app.mount("#app");
