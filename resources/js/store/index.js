import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

import store from '../app/site/vuex'

export default new Vuex.Store({
    modules: {
        shop: store
    }
})