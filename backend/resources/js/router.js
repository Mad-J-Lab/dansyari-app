import Vue from "vue";
import VueRouter from "vue-router";
import Category from './components/Category.vue';
import Want from './components/Want.vue';


Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/categories',
            name: 'category.list',
            component: Category,
            children:[
                {
                    path: '/wants/:category',
                    name: 'want.list',
                    component: Want,
                    props:true,
                },
            ]
        },
    ]
})

export default router
