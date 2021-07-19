import Vue from 'vue';
import VueRouter from 'vue-router';
import SignupView from '../views/SignupView';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/signup',
            component: SignupView,
        },
    ]
});

export default router;
