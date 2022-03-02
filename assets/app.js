import './styles/app.css';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css'
// import Cookies from 'js-cookie';
import Vue from 'vue';
// import VueMeta from 'vue-meta';
// Vue.use(VueMeta);
Vue.use(Vuetify);
// Vue.use(Cookies);
// import Routes from './router';
// import Store from './store'
import App from './components/Home';

const app = new Vue({
    vuetify: new Vuetify(),
    el: '#app',
    // router: Routes,
    // store: Store,
    render: h => h(App),
});

export default app;