require('./bootstrap');


import router from './router'
import { VueEditor } from "vue2-editor"
import Datetime from "vue-datetime";
import 'vue-datetime/dist/vue-datetime.css'

import 'vue2-dropzone/dist/vue2Dropzone.min.css';


import ProgressBar from 'vuejs-progress-bar'

// Vue.use(ProgressBar);
// Vue.use(Datetime);


// admin related spa
Vue.component('adminer', require('./app/admin/index.vue'));

//site related spa
Vue.component('siter', require('./app/site/index.vue'));



const app = new Vue({
    el: '#app',
    router: router
});
