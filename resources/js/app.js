require('./bootstrap');
import Vue from 'vue'
import Vuetify from 'vuetify'
import ru from 'vuetify/src/locale/ru.ts'
import 'vuetify/dist/vuetify.min.css'

var mcomponent = require('./components/mcomponent.vue').default;

Vue.use(Vuetify);

new Vue({
    data: {
    current_url: '',
  },
  components: {mcomponent},

  //idb: idb,
  vuetify: new Vuetify({
     icons: {
    iconfont: 'mdi', // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4'
  },
  lang: {
    locales: { ru },
    current: 'ru',
  },
 
})
}).$mount('#app');