import Vue from 'vue'
import app from "./components/apps/app";
import router from './routes'
import home from "./components/home";
import 'bootstrap/dist/css/bootstrap.css';
import '../views/layouts/apps.blade.php';
import inbox from "./components/views/sms/inbox";
import routes from "./routes";

Vue.component('home',
    require('./components/home.vue')
        .default
);
vue.component('inbox',
require('./components/views/sms/inbox.vue')
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    el: '#home',
render:h=>h(home)

});
new Vue({
    el:'sms',
    render:h=>h(inbox)
});
