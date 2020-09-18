import  Vue from 'vue';
import Router from 'vue-router';
import home from "./components/views/home";
import inbox from "./components/views/sms/inbox";
import outbox from "./components/views/sms/outbox";
import analytics from "./components/views/sms/analytics";

Vue.use(Router);

 const routes = [
    {
        path:'/',
        name:'welcome',
        component:Home
    },
    {
        path:'/sms/outbox',
        name: 'outbox',
        component:()=>import('./components/views/sms/outbox.vue')
    },
    {
        path:'/sms/analytics',
        name: 'analytics',
        component:()=>import('./components/views/sms/analytics.vue')
    },

    {
        path:'/sms/ibox',
        name: 'inbox',
        component:()=>import('./components/views/sms/inbox.vue')
    },

];
 const router = new Router({
     routes:routes
 });
 export default routes;
