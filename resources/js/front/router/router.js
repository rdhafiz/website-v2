import {createRouter, createWebHistory} from "vue-router";


//=====================
// Pages
//=====================
import Layout from "../layouts/layout.vue";

import Home from "../pages/home/Home.vue";
import CourseAccessToHe from "../pages/course/CoursesAccessToHe.vue";
import CourseDetails from "../pages/course/CourseDetails.vue";
import CourseVocationalTraining from "../pages/course/CourseVocationalTraining.vue";
import Awards from "../pages/awards/Awards.vue";
import NewsEvents from "../pages/news_&_events/NewsEvents.vue";
import About from "../pages/about/About.vue";
import Contact from "../pages/contact/Contact.vue";
import PrivacyPolicy from "../pages/general/privacy_policy.vue";
import TermsOfUse from "../pages/general/terms_of_use.vue";
import CookiePolicy from "../pages/general/cookie_policy.vue";
import SafeGuardingPolicy from "../pages/general/safe_guarding_policy.vue";
import Pathways from "../pages/general/pathways.vue";
import FeesFunding from "../pages/general/fees_funding.vue";
import PreEnrollmentOnlineEvent from "../pages/pre-enrollment-online-event/pre-enrollment-online-event.vue";
import EnglishMaths from "../pages/english-&-maths/english-&-maths.vue";
import FAQs from "../pages/FAQs/FAQs.vue";
import whyChooseUs from "../pages/General/why-choose-us.vue";

const ROOT_URL = "";
const routes = [
    {
        path: ROOT_URL, name: 'Layout', component: Layout,
        children: [
            {path: ROOT_URL + '', name: 'Home', component: Home},
            {path: ROOT_URL + '/courses/access-to-he', name: 'CourseAccessToHe', component: CourseAccessToHe},
            {path: ROOT_URL + '/course/:slug', name: 'CourseDetails', component: CourseDetails},
            {path: ROOT_URL + '/courses/vocational-training', name: 'CourseVocationalTraining', component: CourseVocationalTraining},
            {path: ROOT_URL + '/english-&-maths', name: 'EnglishMaths', component: EnglishMaths},
            {path: ROOT_URL + '/awards', name: 'Awards', component: Awards},
            {path: ROOT_URL + '/pathways', name: 'Pathways', component: Pathways},
            {path: ROOT_URL + '/news-&-events', name: 'NewsEvents', component: NewsEvents},
            {path: ROOT_URL + '/about', name: 'About', component: About},
            {path: ROOT_URL + '/contact', name: 'Contact', component: Contact},
            {path: ROOT_URL + '/privacy-policy', name: 'PrivacyPolicy', component: PrivacyPolicy},
            {path: ROOT_URL + '/terms-of-use', name: 'TermsOfUse', component: TermsOfUse},
            {path: ROOT_URL + '/cookie-policy', name: 'CookiePolicy', component: CookiePolicy},
            {path: ROOT_URL + '/safe-guarding-policy', name: 'SafeGuardingPolicy', component: SafeGuardingPolicy},
            {path: ROOT_URL + '/fees-funding-grands-information', name: 'FeesFunding', component: FeesFunding},
            {path: ROOT_URL + '/pre-enrollment-online-event', name: 'PreEnrollmentOnlineEvent', component: PreEnrollmentOnlineEvent},
            {path: ROOT_URL + '/frequently-asking-question', name: 'FAQs', component: FAQs},
            {path: ROOT_URL + '/why-choose-us', name: 'whyChooseUs', component: whyChooseUs},
        ]
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
