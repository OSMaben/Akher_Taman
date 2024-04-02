import { createApp } from 'vue'
import App from './App.vue'
import "./assets/css/style.css"
import "./assets/css/bootstrap.min.css"
import "./assets/css/swiper-bundle.min.css"
import "./assets/css/dashboard.css";
import "./assets/js/bootstrap.bundle.min.js"
import 'bootstrap';
import router from './router'
import store from './stores/index';


createApp(App)
    .use(router)
    .use(store)
    .mount('#app')
