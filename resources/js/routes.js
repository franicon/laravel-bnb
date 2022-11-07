import ExampleTwo from './components/ExampleTwo.vue';
import {createRouter, createWebHistory} from "vue-router"
import ExampleComponent from './components/ExampleComponent.vue';

const routes = [
    {
        path: "/",
        name: "home",
        component: ExampleComponent
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


