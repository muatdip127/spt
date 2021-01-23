require('./bootstrap');
import Vue from 'vue'
import VueMask from 'v-mask'
import Vuetify from 'vuetify'
import ru from 'vuetify/src/locale/ru.ts'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'

var mcomponent = require('./components/mcomponent.vue').default;


Vue.use(Vuetify);
Vue.use(VueMask);
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
 data: {
		
	}
})
}).$mount('#app');