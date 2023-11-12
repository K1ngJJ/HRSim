import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'
import axios from 'axios'
import html2pdf from "html2pdf.js";
import { useVuelidate } from '@vuelidate/core'

axios.defaults.baseURL="http://back-end.test/"
Vue.use(useVuelidate);
Vue.use(html2pdf);

Vue.config.productionTip = false;
createApp(App).use(router).mount('#app')

