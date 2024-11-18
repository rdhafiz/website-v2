import {createRouter, createWebHistory} from "vue-router";


//=====================
// Pages
//=====================
import Layout from "../layouts/layout.vue";

import Home from "../pages/home/Home.vue";
import Contact from "../pages/contact/Contact.vue";
import About from "../pages/about/About.vue";

const ROOT_URL = "";
const routes = [
    {
        path: ROOT_URL, name: 'Layout', component: Layout,
        children: [
            {path: ROOT_URL + '', name: 'Home', component: Home},
            {path: ROOT_URL + '', name: 'Contact', component: Contact},
            {path: ROOT_URL + '', name: 'About', component: About},
        ]
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
