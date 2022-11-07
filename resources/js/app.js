
import './bootstrap';
import '../sass/app.scss'
import router from "./routes";
import { createApp } from 'vue';
import Index from "./Index.vue"

const app = createApp({});

app.use(router)
app.component('index', Index)
app.mount('#app');
