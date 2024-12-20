<template>

    <div class="breadcrumb-content w-100 animate__animated animate__fadeIn">
        <div class="breadcrumb-content-left">
            <span class="shadow-1"></span>
            <span class="shadow-2"></span>
            <span class="shadow-3"></span>
        </div>
        <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/courses.jpg)' }"></div>
        <div class="container-fluid">
            <div class="w-100 px-0 px-md-5">
                <div class="w-100 px-2 px-md-5 position-relative z-2">
                    <div class="breadcrumb-left">
                        <div class="w-100 mt-5">
                            <h1 class="w-100 text-white animate__animated animate__fadeInLeft">
                                Vocational Courses & Training
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
                                <li class="breadcrumb-item">
                                    <router-link :to="{name: 'CourseVocationalTraining'}" class="text-decoration-none text-white p-0 m-0">
                                        Vocational Courses & Training
                                    </router-link>
                                </li>
                            </ul>

                            <h1 class="mt-5 text-white fw-bold animate__animated animate__fadeInLeft" style="animation-delay: 0.2s">
                                Weekly one-hour <br> online open events <br>
                                <router-link :to="{name: 'PreEnrollmentOnlineEvent'}" class="btn btn-outline-light btn-lg mt-3 px-5">Book Here</router-link>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="courses-screen py-5">
        <div class="container py-5">

            <div class="each-data border rounded-3 shadow mb-5 overflow-hidden">
                <div class="w-100 d-xl-flex justify-content-start align-items-start border-bottom">
                    <div class="h-100">
                        <img class="each-data-img" :src="'/assets/img/access/HealthProfessions.jpg'" alt="NursingMidwifery">
                    </div>
                    <div class="h-100 p-4">
                        <div class="w-100">
                            <div class="w-100 mb-4">
                                <h2>Early Year Education</h2>
                            </div>

                            <div class="w-100 d-block d-md-flex justify-content-between mt-2">
                                <div style="width: 200px">
                                    <strong class="fs-5">Courses:</strong>
                                </div>
                                <div class="w-100 ps-md-3">
                                    <span class="fs-5">3 Courses starting Spring 2025</span>
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-2">
                                <div style="width: 200px">
                                    <strong class="fs-5">Location:</strong>
                                </div>
                                <div class="w-100 ps-md-3">
                                    <strong class="p-0 fs-5">Online Via Microsoft Teams</strong><br>
                                    <span class="p-0 fs-6">
                                            You will be issued with a Mediprospects Office 365 account, Live online lessons
                                            delivered by subject specialists six hours per week term time only
                                        </span>
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-3">
                                <div style="width: 200px">
                                    <strong class="fs-5">Entry Requirements:</strong>
                                </div>
                                <div class="w-100 ps-md-3 fs-5">
                                    <strong class="p-0 fs-5">Level 2 English</strong><br>
                                    <span class="p-0 fs-6">
                                        (GCSE Grade C/4 or above, Level 2 Functional Skills, Keyskills English Level 2, Adult Literacy Level 2)
                                    </span>
                                    <div class="d-block fw-normal">
                                        <router-link :to="{name: 'EnglishMaths'}" class="text-decoration-none text-theme d-block">
                                            How to find a english course?
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-3">
                                <div style="width: 200px">
                                    <strong class="fs-5">Course Credit:</strong>
                                </div>
                                <div class="w-100 ps-md-3 fs-5">
                                    60 credits (45 graded and 15 ungraded)
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-2">
                                <div style="width: 200px">
                                    <strong class="fs-5">Course Fee:</strong>
                                </div>
                                <div class="w-100 ps-md-3 fs-5">
                                    <span> <span class="text-danger">*</span> Free if you meet specific eligibility requirements</span>
                                </div>
                            </div>


                            <div class="w-100 text-end mt-5">
                                <router-link :to="{name: 'CourseDetails', params:{ slug: 'vocation-training-early-year-education'}}" class="btn px-3 py-2 btn-theme">
                                    View course <i class="fas fa-arrow-right ms-2"></i>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="each-data border rounded-3 shadow mb-5 overflow-hidden">
                <div class="w-100 d-xl-flex justify-content-start align-items-start border-bottom">
                    <div class="h-100">
                        <img class="each-data-img" :src="'/assets/img/access/NursingMidwifery.jpg'" alt="NursingMidwifery">
                    </div>
                    <div class="h-100 p-4">
                        <div class="w-100">
                            <div class="w-100 mb-4">
                                <h2>Teaching Assistance</h2>
                            </div>

                            <div class="w-100 d-block d-md-flex justify-content-between mt-2">
                                <div style="width: 200px">
                                    <strong class="fs-5">Courses:</strong>
                                </div>
                                <div class="w-100 ps-md-3">
                                    <span class="fs-5">3 Courses starting Spring 2025</span>
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-2">
                                <div style="width: 200px">
                                    <strong class="fs-5">Location:</strong>
                                </div>
                                <div class="w-100 ps-md-3">
                                    <strong class="p-0 fs-5">Online Via Microsoft Teams</strong><br>
                                    <span class="p-0 fs-6">
                                            You will be issued with a Mediprospects Office 365 account, Live online lessons
                                            delivered by subject specialists six hours per week term time only
                                        </span>
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-3">
                                <div style="width: 200px">
                                    <strong class="fs-5">Entry Requirements:</strong>
                                </div>
                                <div class="w-100 ps-md-3 fs-5">
                                    <strong class="p-0 fs-5">Level 2 English</strong><br>
                                    <span class="p-0 fs-6">
                                        (GCSE Grade C/4 or above, Level 2 Functional Skills, Keyskills English Level 2, Adult Literacy Level 2)
                                    </span>
                                    <div class="d-block fw-normal">
                                        <router-link :to="{name: 'EnglishMaths'}" class="text-decoration-none text-theme d-block">
                                            How to find a english course?
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-3">
                                <div style="width: 200px">
                                    <strong class="fs-5">Course Credit:</strong>
                                </div>
                                <div class="w-100 ps-md-3 fs-5">
                                    60 credits (45 graded and 15 ungraded)
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-2">
                                <div style="width: 200px">
                                    <strong class="fs-5">Course Fee:</strong>
                                </div>
                                <div class="w-100 ps-md-3 fs-5">
                                    <span><span class="text-danger">*</span> Free if you meet specific eligibility requirements</span>
                                </div>
                            </div>


                            <div class="w-100 text-end mt-5">
                                <router-link :to="{name: 'CourseDetails', params:{ slug: 'vocational-training-teaching-assistance'}}"
                                             class="btn px-3 py-2 btn-theme">
                                    View course <i class="fas fa-arrow-right ms-2"></i>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="each-data border rounded-3 shadow mb-5 overflow-hidden">
                <div class="w-100 d-xl-flex justify-content-start align-items-start border-bottom">
                    <div class="h-100">
                        <img class="each-data-img" :src="'/assets/img/access/Nursing.jpg'" alt="NursingMidwifery">
                    </div>
                    <div class="h-100 p-4">
                        <div class="w-100">
                            <div class="w-100 mb-4">
                                <h2>Adult Care</h2>
                            </div>

                            <div class="w-100 d-block d-md-flex justify-content-between mt-2">
                                <div style="width: 200px">
                                    <strong class="fs-5">Courses:</strong>
                                </div>
                                <div class="w-100 ps-md-3">
                                    <span class="fs-5">3 Courses starting Spring 2025</span>
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-2">
                                <div style="width: 200px">
                                    <strong class="fs-5">Location:</strong>
                                </div>
                                <div class="w-100 ps-md-3">
                                    <strong class="p-0 fs-5">Online Via Microsoft Teams</strong><br>
                                    <span class="p-0 fs-6">
                                            You will be issued with a Mediprospects Office 365 account, Live online lessons
                                            delivered by subject specialists six hours per week term time only
                                        </span>
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-3">
                                <div style="width: 200px">
                                    <strong class="fs-5">Entry Requirements:</strong>
                                </div>
                                <div class="w-100 ps-md-3 fs-5">
                                    <strong class="p-0 fs-5">Level 2 English</strong><br>
                                    <span class="p-0 fs-6">
                                        (GCSE Grade C/4 or above, Level 2 Functional Skills, Keyskills English Level 2, Adult Literacy Level 2)
                                    </span>
                                    <div class="d-block fw-normal">
                                        <router-link :to="{name: 'EnglishMaths'}" class="text-decoration-none text-theme d-block">
                                            How to find a english course?
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-3">
                                <div style="width: 200px">
                                    <strong class="fs-5">Course Credit:</strong>
                                </div>
                                <div class="w-100 ps-md-3 fs-5">
                                    60 credits (45 graded and 15 ungraded)
                                </div>
                            </div>
                            <div class="w-100 d-block d-md-flex justify-content-between mt-2">
                                <div style="width: 200px">
                                    <strong class="fs-5">Course Fee:</strong>
                                </div>
                                <div class="w-100 ps-md-3 fs-5">
                                    <span> <span class="text-danger">*</span> Free if you meet specific eligibility requirements</span>
                                </div>
                            </div>


                            <div class="w-100 text-end mt-5">
                                <router-link :to="{name: 'CourseDetails', params:{ slug: 'vocational-training-adult-care'}}"
                                             class="btn px-3 py-2 btn-theme">
                                    View course <i class="fas fa-arrow-right ms-2"></i>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</template>

<script>

export default {
    data(){
        return {}
    },
    mounted() {

    },
    methods: {

    }
}

</script>
