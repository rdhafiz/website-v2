<template>

    <div class="course-details-screen">

        <div class="breadcrumb-content w-100 animate__animated animate__fadeIn">
            <div class="breadcrumb-content-left">
                <div class="shadow-1"></div>
                <div class="shadow-2"></div>
                <div class="shadow-3"></div>
            </div>
            <template v-if="this.routeName === 'access-to-he-nursing-&-midwifery'">
                <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/access/NursingMidwifery.jpg)' }"></div>
            </template>
            <template v-if="this.routeName === 'access-to-he-health-professions'">
                <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/access/access-to-he-health-profession.webp)' }"></div>
            </template>
            <template v-if="this.routeName === 'access-to-he-nursing'">
                <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/access/Nursing.jpg)' }"></div>
            </template>
            <template v-if="this.routeName === 'access-to-he-health-science'">
                <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/access/SupportFund.jpg)' }"></div>
            </template>
            <template v-if="this.routeName === 'vocational-training-early-year-educator'">
                <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/vocational/early-years-educator.jpg)' }"></div>
            </template>
            <template v-if="this.routeName === 'vocational-training-teaching-assistance'">
                <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/vocational/teaching-assistant.png)' }"></div>
            </template>
            <template v-if="this.routeName === 'vocational-training-adult-care'">
                <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/vocational/adult-care.png)' }"></div>
            </template>
            <div class="w-100 px-md-5">
                <div class="w-100 px-2 px-md-5">
                    <div class="container-fluid">
                        <div class="breadcrumb-left position-relative z-2">
                            <h1 class="w-100 text-white animate__animated animate__fadeInLeft">
                                Course Details
                            </h1>
                            <ul class="breadcrumb w-100 d-flex justify-content-start align-items-center fs-4 animate__animated animate__fadeInLeft">
                                <li class="breadcrumb-item">
                                    <router-link :to="{name: 'Home'}" class="text-decoration-none text-white p-0 m-0">
                                        Home
                                    </router-link>
                                </li>
                                <li class="text-white mx-3">
                                    /
                                </li>
                                <template v-if="this.routeName === 'access-to-he-nursing-&-midwifery' || this.routeName === 'access-to-he-health-professions' || this.routeName === 'access-to-he-nursing' || this.routeName === 'access-to-he-health-science'">
                                    <li class="breadcrumb-item">
                                        <router-link :to="{name: 'CourseAccessToHe'}" class="text-decoration-none text-white p-0 m-0">
                                            Access to Higher Education
                                        </router-link>
                                    </li>
                                </template>
                                <template v-if="this.routeName === 'vocational-training-early-year-educator' || this.routeName === 'vocational-training-teaching-assistance' || this.routeName === 'vocational-training-adult-care'">
                                    <li class="breadcrumb-item">
                                        <router-link :to="{name: 'CourseVocationalTraining'}" class="text-decoration-none text-white p-0 m-0">
                                            Vocational Courses & Training
                                        </router-link>
                                    </li>
                                </template>
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

        <template v-if="this.routeName === 'vocational-training-early-year-educator'">
            <VocationalEarlyYearEducation></VocationalEarlyYearEducation>
        </template>

        <template v-if="this.routeName === 'vocational-training-teaching-assistance'">
            <VocationalTeachingAssistance></VocationalTeachingAssistance>
        </template>

        <template v-if="this.routeName === 'vocational-training-adult-care'">
            <VocationalAdultCare></VocationalAdultCare>
        </template>

        <div class="w-100" v-if="course_type === 'access'">
            <Teams/>
        </div>

    </div>

</template>

<script>

import AccessToHeNursingMidWifery from "./widgets/access-to-he-nursing-&-midwifery.vue";
import AccessToHeHealthProfessions from "./widgets/access-to-he-health-professions.vue";
import AccessToHeNursing from "./widgets/access-to-he-nursing.vue";
import AccessToHeHealthScience from "./widgets/access-to-he-health-science.vue";
import Teams from "./widgets/Teams.vue";
import {useRoute} from "vue-router";
import VocationalEarlyYearEducation from "./widgets/vocational-early-year-education.vue";
import VocationalTeachingAssistance from "./widgets/vocational-teaching-assistance.vue";
import VocationalAdultCare from "./widgets/vocational-adult-care.vue";

export default {
    components: {
        Teams,
        AccessToHeNursingMidWifery,
        AccessToHeHealthProfessions,
        AccessToHeNursing,
        AccessToHeHealthScience,
        VocationalEarlyYearEducation,
        VocationalTeachingAssistance,
        VocationalAdultCare
    },
    data() {
        return {
            course_type: null,
            routeName: '',
            access: [
                'access-to-he-health-professions',
                'access-to-he-nursing-&-midwifery',
                'access-to-he-nursing',
                'access-to-he-health-science',
            ],
            vocational: [
                'vocational-training-early-year-educator',
                'vocational-training-teaching-assistance',
                'vocational-training-adult-care'
            ]
        }
    },
    mounted() {
        const route = useRoute();
        if (route.params.slug) {
            this.routeName = route.params.slug;
            if(this.access.includes(this.routeName)) {
                this.course_type = 'access';
                localStorage.setItem('course_type', this.course_type);
            } else if(this.vocational.includes(this.routeName)) {
                this.course_type = 'vocational';
                localStorage.setItem('course_type', this.course_type);
            }
        } else {
            this.$router.back();
        }
    }
}

</script>
