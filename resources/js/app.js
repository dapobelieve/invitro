require('./bootstrap');

import store from './store'
import router from './router'
import { VueEditor } from "vue2-editor"
import Datetime from "vue-datetime";
import 'vue-datetime/dist/vue-datetime.css'
import VueSweetalert2 from 'vue-sweetalert2';
import 'vue2-dropzone/dist/vue2Dropzone.min.css';


Vue.use(VueSweetalert2);
// Vue.use(ProgressBar);
// Vue.use(Datetime);


// admin related spa
Vue.component('adminer', require('./app/admin/index.vue'));

//site related spa
Vue.component('siter', require('./app/site/index.vue'));



const app = new Vue({
    el: '#app',
    store: store,
    router: router
});
