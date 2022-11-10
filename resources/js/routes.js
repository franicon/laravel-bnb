import Bookable from './bookable/Bookable.vue';
import ExampleTwo from './components/ExampleTwo.vue';
import {createRouter, createWebHistory} from "vue-router"

const routes = [
    {
        path: "/",
        name: "home",
        component: Bookable
    },
    {
        path: "/contact",
        name: "contact",
        component: ExampleTwo
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes});

export default router;


