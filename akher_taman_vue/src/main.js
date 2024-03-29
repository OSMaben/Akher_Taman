import { createApp } from 'vue'
import App from './App.vue'
import "./assets/css/style.css"
import "./assets/css/bootstrap.min.css"
import "./assets/css/swiper-bundle.min.css"
import 'bootstrap';
import router from './router'

createApp(App).use(router).mount('#app')