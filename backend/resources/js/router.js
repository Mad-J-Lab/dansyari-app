import Vue from "vue";
import VueRouter from "vue-router";
import Test from './components/Test.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/test',
            component: Test
        }
    ]
})

export default router
