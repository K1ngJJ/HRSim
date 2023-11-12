import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'




import './assets/js/jquery.1.8.3.min';
import './assets/js/wow.min';
import './assets/js/featherlight.min';
import './assets/js/featherlight.gallery.min';
import './assets/js/jquery.enllax.min';
import './assets/js/jquery.scrollUp.min';
import './assets/js/jquery.easing.min';
import './assets/js/jquery.stickyNavbar.min';
import './assets/js/jquery.waypoints.min';
import './assets/js/images-loaded.min';
import './assets/js/lightbox.min';
import './assets/js/site';

loadFonts()

createApp(App)
  .use(router)
  .use(vuetify)
  .mount('#app')


