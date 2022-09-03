import Vue from "vue";
import VueRouter from "vue-router";
import Category from './components/Category.vue';
import CategoryEditComponent from './components/CategoryEditComponent';

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/categories',
            name: 'category.list',
            component: Category
        },
        {
            path: '/categories/:categoryId/edit',
            name: 'category.edit',
            component: CategoryEditComponent,
            props:true,
        },
    ]
})

export default router
