import Vue from 'vue';
import VueRouter from 'vue-router';
import SignupView from '../views/SignupView';
import LoginView from '../views/LoginView';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/signup',
            component: SignupView,
        },
        {
            path: '/login',
            component: LoginView,
        },
    ]
});

export default router;
