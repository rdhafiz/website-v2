import jQuery from 'jquery'
window.$ = window.jQuery = jQuery;
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js'
window.bootstrap = bootstrap

import {createApp} from "vue";
import App from "./App.vue";
import router from "./router/router";

createApp(App)
    .use(router)
    .mount('#app')
