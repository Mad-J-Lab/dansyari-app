import Vue from "vue";
import VueRouter from "vue-router";
import Category from './components/Category.vue';
import Want from './components/Want.vue';
import Rule from './components/Rule.vue';


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
                    path: 'wants/:id',
                    name: 'want.list',
                    component: Want,
                    props:true,
                },
            ]
        },
        {
            path:'/rules',
            name:'rule.list',
            component:Rule,
        },
    ]
})

export default router
