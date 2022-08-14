import Vue from "vue";
import VueRouter from "vue-router";
import Category from './components/Category.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/categories',
            name: 'category.list',
            component: Category
        }
    ]
})

export default router
