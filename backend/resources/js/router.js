import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
    {
        path: "/test",
        component: Test
    }
];

export default new VueRouter({ routes });
