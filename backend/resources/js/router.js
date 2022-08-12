import Vue from "vue";
import VueRouter from "vue-router";
import Category from './components/Category.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/category',
            component: Category
        }
    ]
})

export default router
