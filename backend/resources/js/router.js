import Vue from "vue";
import VueRouter from "vue-router";
import Category from './components/Category.vue';
import Want from './components/Want.vue';
import Rule from './components/Rule.vue';
import CategoryEdit from './components/CategoryEditComponent2.vue';
import CategoryEditDetail from './components/CategoryEditDetailComponent.vue';
import Home from './components/Home.vue';
import Item from './components/Item.vue';
import Disuse from './components/Disuse.vue';


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
                    path: 'items/:id',
                    name: 'item.list',
                    component: Item,
                    props:true,
                },
                {
                    path: 'wants/:id',
                    name: 'want.list',
                    component: Want,
                    props:true,
                },
                {
                    path: 'disuse/:id',
                    name: 'disuse.list',
                    component: Disuse,
                    props:true,
                },
                {
                    path: '/home',
                    name: 'home',
                    component: Home,
                    children:[
                        {
                            path: 'null',
                            name: 'home.null',
                            component: Home,
                            props:true,
                        },
                    ]
                },
            ]
        },
        {
            path:'/rules',
            name:'rule.list',
            component:Rule,
        },
        {
            path:'/categoryedit',
            name:'category.edit',
            component:CategoryEdit,
            children:[
                {
                    path: ':categoryId',
                    name: 'category.edit.detail',
                    component:CategoryEditDetail ,
                    props:true,
                },
            ]
        },
    ]
})

export default router
