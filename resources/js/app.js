import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import store from './store';
import router from './router';

import VuePagination from "vue3-tailwind-pagination";
import "vue3-tailwind-pagination/dist/style.css";

const app = createApp({});

app.use(store).use(router).use(VuePagination).mount('#app');