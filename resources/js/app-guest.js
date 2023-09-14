import './bootstrap';
import '../css/app.css';
import {createApp} from "vue";

import MobilNav from "@/Components/MobilNav.vue";
const app = createApp({});

app.component('mobil-nav',MobilNav)

app.mount('#app')
