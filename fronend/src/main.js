import Vue from 'vue'

import Vuex from 'vuex'
Vue.use(Vuex)

import App from './App.vue'
import router from './router'

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
