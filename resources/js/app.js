require('./bootstrap');


import router from './router'
import { VueEditor } from "vue2-editor"
import Datetime from "vue-datetime"
// import 'vue2-dropzone/dist/vue2Dropzone.css';

// import '../../../node_modules/vue-datetime/dist/vue-datetime.css'
import '../../../node_modules/vue2-dropzone/dist/vue2Dropzone.css';



Vue.use(Datetime());



Vue.component('adminer', require('./app/admin/index.vue'));



const app = new Vue({
    el: '#app',
    router: router
});
