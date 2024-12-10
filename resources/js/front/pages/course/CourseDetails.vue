<template>

    <div class="course-details-screen">

        <div class="breadcrumb-content w-100 animate__animated animate__fadeIn" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/breadcrumb.jpg)' }">
            <div class="breadcrumb-content-left">
                <div class="shadow-1"></div>
                <div class="shadow-2"></div>
                <div class="shadow-3"></div>
            </div>
            <div class="container">
                <div class="breadcrumb-left">
                    <h1 class="w-100 text-white animate__animated animate__fadeInLeft">
                        Course Details
                    </h1>
                    <ul class="breadcrumb w-100 d-flex justify-content-start align-items-center fs-4 animate__animated animate__fadeInLeft">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)" class="text-decoration-none text-white p-0 m-0">
                                Home
                            </a>
                        </li>
                        <li class="text-white mx-3">
                            /
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)" class="text-decoration-none text-white p-0 m-0">
                                Course
                            </a>
                        </li>
                        <li class="text-white mx-3">
                            /
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)" class="text-decoration-none text-white p-0 m-0">
                                Course Details
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <template v-if="this.routeName === 'access-to-he-nursing-&-midwifery'">
            <AccessToHeNursingMidWifery></AccessToHeNursingMidWifery>
        </template>

        <template v-if="this.routeName === 'access-to-he-health-professions'">
            <AccessToHeHealthProfessions></AccessToHeHealthProfessions>
        </template>

        <template v-if="this.routeName === 'access-to-he-nursing'">
            <AccessToHeNursing></AccessToHeNursing>
        </template>

        <template v-if="this.routeName === 'access-to-he-health-science'">
            <AccessToHeHealthScience></AccessToHeHealthScience>
        </template>

        <Teams/>

        <FAQs/>

    </div>

</template>

<script>

import AccessToHeNursingMidWifery from "./widgets/access-to-he-nursing-&-midwifery.vue";
import AccessToHeHealthProfessions from "./widgets/access-to-he-health-professions.vue";
import AccessToHeNursing from "./widgets/access-to-he-nursing.vue";
import AccessToHeHealthScience from "./widgets/access-to-he-health-science.vue";
import Teams from "./widgets/Teams.vue";
import FAQs from "./widgets/FAQs.vue";
import { useRoute } from "vue-router";

export default {
    components: {
        Teams, FAQs, AccessToHeNursingMidWifery, AccessToHeHealthProfessions, AccessToHeNursing, AccessToHeHealthScience
    },
    data(){
        return {
            routeName: '',
        }
    },
    mounted() {
        const route = useRoute();
        if(route.params.slug) {
            this.routeName = route.params.slug;
            console.log(this.routeName);
        } else {
            this.$router.push({name:'Courses'});
        }
    },
    methods: {

    }
}

</script>
