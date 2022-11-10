import Bookable from "./bookable/bookable.vue";
import Bookables from './bookables/Bookables.vue';
import {createRouter, createWebHistory} from "vue-router"

const routes = [
    {
        path: "/",
        name: "home",
        component: Bookables
    },
    {
        path: "/bookable/:id",
        name: "bookable",
        component: Bookable
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes});

export default router;


