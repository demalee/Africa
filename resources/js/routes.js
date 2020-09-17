import Home from './components/home.vue'
import inbox from './components/sms/inbox.vue'
import outbox from "./components/sms/outbox";
import analytics from "./components/sms/analytics";

export const routes = [
    {
        path:'/home',
        component:Home
    },
    {
        path:'/sms',
        component:outbox
    },
    {
        path:'/sms',
        component:analytics
    },

    {
        path:'/sms',
        component:inbox
    },

];
