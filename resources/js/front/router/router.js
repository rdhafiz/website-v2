import {createRouter, createWebHistory} from "vue-router";


//=====================
// Pages
//=====================
import Layout from "../layouts/layout.vue";

import Home from "../pages/home/Home.vue";
import Contact from "../pages/contact/Contact.vue";
import About from "../pages/about/About.vue";
import CourseDetails from "../pages/course/CourseDetails.vue";

const ROOT_URL = "";
const routes = [
    {
        path: ROOT_URL, name: 'Layout', component: Layout,
        children: [
            {path: ROOT_URL + '', name: 'Home', component: Home},
            {path: ROOT_URL + '/contact', name: 'Contact', component: Contact},
            {path: ROOT_URL + '/about', name: 'About', component: About},
            {path: ROOT_URL + '/course/single', name: 'CourseDetails', component: CourseDetails},
        ]
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
