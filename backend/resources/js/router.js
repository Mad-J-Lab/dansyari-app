import Vue from "vue";
import VueRouter from "vue-router";
import Category from './components/Category.vue';
import Want from './components/Want.vue';
import Rule from './components/Rule.vue';
import CategoryEdit from './components/CategoryEditComponent2.vue';
import CategoryEditDetail from './components/CategoryEditDetailComponent.vue';
import NecessaryOrNot from './components/NecessaryOrNot.vue';


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
        {
            path: '/doyouneed',
            name: 'doyouneed',
            component: NecessaryOrNot,
            children:[
                {
                    path: 'null',
                    name: 'doyouneed.null',
                    component: NecessaryOrNot,
                    props:true,
                },
            ]
        },
    ]
})

export default router
