import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'

Vue.prototype.$axios = Vue.$axios = axios
Vue.prototype.$wp = Vue.$wp = wpData
new Vue({
  el: '#cl2b',
  render: h => h(App)
})
