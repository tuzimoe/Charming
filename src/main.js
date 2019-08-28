import Vue from 'vue'
import ElementUI from 'element-ui'
import {backToTop} from 'element-ui'
import '../theme/index.css'
//import 'element-ui/lib/theme-chalk/index.css'
import App from './App.vue'



Vue.use(ElementUI)

new Vue({
  el: '#app',
  render: h => h(App)
})
