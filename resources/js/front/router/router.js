import {createRouter, createWebHistory} from "vue-router";


//=====================
// Pages
//=====================
import Layout from "../layouts/layout.vue";

import Home from "../pages/home/Home.vue";
import Contact from "../pages/contact/Contact.vue";
import About from "../pages/about/About.vue";
import PrivacyPolicy from "../pages/about/privacy_policy/privacy_policy.vue";
import TermsOfUse from "../pages/about/terms_of_use/terms_of_use.vue";
import CookiePolicy from "../pages/about/cookie_policy/cookie_policy.vue";
import SafeGuardingPolicy from "../pages/about/safe_guarding_policy/safe_guarding_policy.vue";
import Courses from "../pages/course/Courses.vue";
import CourseDetails from "../pages/course/CourseDetails.vue";
import News from "../pages/news/News.vue";
import Excellence from "../pages/excellence/Excellence.vue";

const ROOT_URL = "";
const routes = [
    {
        path: ROOT_URL, name: 'Layout', component: Layout,
        children: [
            {path: ROOT_URL + '', name: 'Home', component: Home},
            {path: ROOT_URL + '/contact', name: 'Contact', component: Contact},
            {path: ROOT_URL + '/about', name: 'About', component: About},
            {path: ROOT_URL + '/courses', name: 'Courses', component: Courses},
            {path: ROOT_URL + '/course/:slug', name: 'CourseDetails', component: CourseDetails},
            {path: ROOT_URL + '/news', name: 'News', component: News},
            {path: ROOT_URL + '/excellence', name: 'Excellence', component: Excellence},
            {path: ROOT_URL + '/privacy_policy', name: 'PrivacyPolicy', component: PrivacyPolicy},
            {path: ROOT_URL + '/terms_of_use', name: 'TermsOfUse', component: TermsOfUse},
            {path: ROOT_URL + '/cookie_policy', name: 'CookiePolicy', component: CookiePolicy},
            {path: ROOT_URL + '/safe_guarding_policy', name: 'SafeGuardingPolicy', component: SafeGuardingPolicy},
        ]
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
