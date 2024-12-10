<template>


    <div class="breadcrumb-content w-100 animate__animated animate__fadeIn" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/breadcrumb.jpg)' }">
        <div class="breadcrumb-content-left">
            <span class="shadow-1"></span>
            <span class="shadow-2"></span>
            <span class="shadow-3"></span>
        </div>
        <div class="container">
            <div class="breadcrumb-left">
                <h1 class="w-100 text-white animate__animated animate__fadeInLeft">
                    Courses
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
                            Courses
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="courses-screen py-5">

        <div class="container py-5">

            <div class="each-data border rounded-3 shadow mb-5 overflow-hidden">
                <div class="w-100 d-flex justify-content-start align-items-start border-bottom">
                    <div class="h-100">
                        <img class="each-data-img" :src="'/assets/img/access/NursingMidwifery.jpg'" alt="NursingMidwifery">
                    </div>
                    <div class="h-100 p-4">
                        <div class="w-100">
                            <div class="w-100 mb-4">
                                <h2>Access to HE: Nursing & Midwifery</h2>
                            </div>

                            <div class="w-100 d-flex justify-content-between mt-2">
                                <div style="width: 150px">
                                    <strong class="fs-5">Courses:</strong>
                                </div>
                                <div class="w-100 ps-3">
                                    <span class="fs-5">3 Courses starting Spring 2025</span>
                                </div>
                            </div>
                            <div class="w-100 d-flex justify-content-between mt-2">
                                <div style="width: 150px">
                                    <strong class="fs-5">Location:</strong>
                                </div>
                                <div class="w-100 ps-3">
                                    <strong class="p-0 fs-5">Online Via Microsoft Teams</strong><br>
                                    <span class="p-0 fs-6">
                                            You will be issued with a Mediprospects Office 365 account, Live online lessons
                                            delivered by subject specialists six hours per week term time only
                                        </span>
                                </div>
                            </div>
                            <div class="w-100 d-flex justify-content-between mt-3">
                                <div style="width: 150px">
                                    <strong class="fs-5">Entry Requirements:</strong>
                                </div>
                                <div class="w-100 ps-3">
                                    <ul>
                                        <li class="fs-5 mb-2"> English level 2</li>
                                        <li class="fs-5 mb-2"> Adult Literacy level 2</li>
                                        <li class="fs-5 mb-2"> GCSE Grade C/4 or above</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="w-100 d-flex justify-content-between mt-2">
                                <div style="width: 150px">
                                    <strong class="fs-5">Course Credit:</strong>
                                </div>
                                <div class="w-100 ps-3 fs-5">
                                    60 credits (45 graded and 15 ungraded)
                                </div>
                            </div>
                            <div class="w-100 d-flex justify-content-between mt-2">
                                <div style="width: 150px">
                                    <strong class="fs-5">Course Fee:</strong>
                                </div>
                                <div class="w-100 ps-3 fs-5">
                                    <span>Free if you meet specific eligibility requirements</span>
                                </div>
                            </div>


                            <div class="w-100 text-end">
                                <router-link :to="{name: 'CourseDetails', params:{ slug: 'access-to-he-nursing-&-midwifery'}}"
                                             class="btn btn-sm btn-theme mt-3">
                                    View course <i class="fas fa-arrow-right ms-2"></i>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="each-data shadow mb-5 overflow-hidden">
                <div class="w-100 d-flex justify-content-start align-items-start border-bottom">
                    <div class="overflow-hidden each-data-overflow">
                        <img class="each-data-img" :src="'/assets/img/access/HealthProfessions.jpg'"
                             alt="HealthProfessions">
                    </div>
                    <div class="h-100 p-4">
                        <div class="w-100 mb-4">
                            <h2>Access to HE: Health Professions</h2>
                        </div>
                        <div class="w-100">
                            <div class="w-100 d-flex justify-content-start align-items-center mb-2">
                                <h4 class="m-0 d-inline-block">Courses</h4>
                                <span class="fs-5 ms-2">3 Courses starting Spring 2025</span>
                            </div>
                        </div>
                        <div class="w-100 d-flex justify-content-between align-items-center mb-2">
                            <div class="w-100 p-3 border border-secondary border-opacity-25">
                                <div class="w-100 mb-2"><span class="badge bg-primary fs-6">Evening</span></div>
                                <div class="w-100"><span class="fs-6">Tuesday and Thursday 6.30pm – 9.30pm</span></div>
                                <div class="w-100"><span class="fs-6">25th of Feb -- 27th Nov 2025</span></div>
                            </div>
                            <div class="w-100 p-3 border border-secondary border-opacity-25 mx-2">
                                <div class="w-100 mb-2"><span class="badge bg-primary fs-6">Weekday</span></div>
                                <div class="w-100"><span class="fs-6">Tuesday 9.30am – 4pm</span></div>
                                <div class="w-100"><span class="fs-6">25th of Feb -- 2nd Dec 2025</span></div>
                            </div>
                            <div class="w-100 p-3 border border-secondary border-opacity-25">
                                <div class="w-100 mb-2"><span class="badge bg-primary fs-6">Saturday</span></div>
                                <div class="w-100"><span class="fs-6">Saturday 9.30am – 4pm</span></div>
                                <div class="w-100"><span class="fs-6">29th Mar -- 10th of Jan 2026</span></div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <div class="w-100 mb-2">
                                <h4 class="m-0 d-inline-block">Location</h4>
                                <div class="fs-5">Online Via Microsoft Teams</div>
                                <div class="w-100">
                                    You will be issued with a Mediprospects Office 365 account, Live online lessons
                                    delivered by subject specialists six hours per week term time only
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <h4 class="m-0 d-inline-block">
                                Entry Requirements
                            </h4>
                        </div>
                        <ul class="mb-2">
                            <li class="fs-6 mb-2"> English level 2</li>
                            <li class="fs-6 mb-2"> Adult Literacy level 2</li>
                            <li class="fs-6 mb-2"> GCSE Grade C/4 or above</li>
                        </ul>
                        <div class="w-100 mb-2">
                            <div class="w-100">
                                <h4 class="m-0 d-block">Course Credit</h4>
                                <span class="fs-5 d-block"> 60 credits (45 graded and 15 ungraded) </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-end align-items-center p-3">
                    <router-link :to="{name: 'CourseDetails', params: { slug: 'access-to-he-health-professions' }}"
                                 class="btn btn-theme">
                        View course <i class="fas fa-arrow-right ms-2"></i>
                    </router-link>
                </div>
            </div>

            <div class="each-data shadow mb-5 overflow-hidden">
                <div class="w-100 d-flex justify-content-start align-items-start border-bottom">
                    <div class="overflow-hidden each-data-overflow">
                        <img class="each-data-img" :src="'/assets/img/access/Nursing.jpg'" alt="Nursing">
                    </div>
                    <div class="h-100 p-4">
                        <div class="w-100 mb-4">
                            <h2>Access to HE: Nursing</h2>
                        </div>
                        <div class="w-100">
                            <div class="w-100 d-flex justify-content-start align-items-center mb-2">
                                <h4 class="m-0 d-inline-block">Courses</h4>
                                <span class="fs-5 ms-2">3 Courses starting Spring 2025</span>
                            </div>
                        </div>
                        <div class="w-100 d-flex justify-content-between align-items-center mb-2">
                            <div class="w-100 p-3 border border-secondary border-opacity-25">
                                <div class="w-100 mb-2"><span class="badge bg-primary fs-6">Evening</span></div>
                                <div class="w-100"><span class="fs-6">Tuesday and Thursday 6.30pm – 9.30pm</span></div>
                                <div class="w-100"><span class="fs-6">25th of Feb -- 27th Nov 2025</span></div>
                            </div>
                            <div class="w-100 p-3 border border-secondary border-opacity-25 mx-2">
                                <div class="w-100 mb-2"><span class="badge bg-primary fs-6">Weekday</span></div>
                                <div class="w-100"><span class="fs-6">Tuesday 9.30am – 4pm</span></div>
                                <div class="w-100"><span class="fs-6">25th of Feb -- 2nd Dec 2025</span></div>
                            </div>
                            <div class="w-100 p-3 border border-secondary border-opacity-25">
                                <div class="w-100 mb-2"><span class="badge bg-primary fs-6">Saturday</span></div>
                                <div class="w-100"><span class="fs-6">Saturday 9.30am – 4pm</span></div>
                                <div class="w-100"><span class="fs-6">29th Mar -- 10th of Jan 2026</span></div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <div class="w-100 mb-2">
                                <h4 class="m-0 d-inline-block">Location</h4>
                                <div class="fs-5">Online Via Microsoft Teams</div>
                                <div class="w-100">
                                    You will be issued with a Mediprospects Office 365 account, Live online lessons
                                    delivered by subject specialists six hours per week term time only
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <h4 class="m-0 d-inline-block">
                                Entry Requirements
                            </h4>
                        </div>
                        <ul class="mb-2">
                            <li class="fs-6 mb-2"> English level 2</li>
                            <li class="fs-6 mb-2"> Adult Literacy level 2</li>
                            <li class="fs-6 mb-2"> GCSE Grade C/4 or above</li>
                        </ul>
                        <div class="w-100 mb-2">
                            <div class="w-100">
                                <h4 class="m-0 d-block">Course Credit</h4>
                                <span class="fs-5 d-block"> 60 credits (45 graded and 15 ungraded) </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-end align-items-center p-3">
                    <router-link :to="{name: 'CourseDetails', params: { slug: 'access-to-he-nursing' }}"
                                 class="btn btn-theme">
                        View course <i class="fas fa-arrow-right ms-2"></i>
                    </router-link>
                </div>
            </div>

            <div class="each-data shadow mb-5 overflow-hidden">
                <div class="w-100 d-flex justify-content-start align-items-start border-bottom">
                    <div class="overflow-hidden each-data-overflow">
                        <img class="each-data-img" :src="'/assets/img/access/SupportFund.jpg'" alt="SupportFund">
                    </div>
                    <div class="h-100 p-4">
                        <div class="w-100 mb-4">
                            <h2>Access to HE: Health Science</h2>
                        </div>
                        <div class="w-100">
                            <div class="w-100 d-flex justify-content-start align-items-center mb-2">
                                <h4 class="m-0 d-inline-block">Courses</h4>
                                <span class="fs-5 ms-2"></span>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <div class="w-100 p-3 border border-secondary border-opacity-25">
                                <div class="w-100 mb-2"><span class="badge bg-primary fs-6">Evening</span></div>
                                <div class="w-100"><span class="fs-6">Tuesdays and Thursdays 6.30pm – 9.30pm</span>
                                </div>
                                <div class="w-100"><span class="fs-6">25th of Feb to the 27th Nov 2025</span></div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <div class="w-100 mb-2">
                                <h4 class="m-0 d-inline-block">Location</h4>
                                <div class="fs-5">Online Via Microsoft Teams</div>
                                <div class="w-100">
                                    You will be issued with a Mediprospects Office 365 account, Live online lessons
                                    delivered by subject specialists six hours per week term time only
                                </div>
                            </div>
                        </div>
                        <div class="w-100 mb-2">
                            <h4 class="m-0 d-inline-block">
                                Entry Requirements
                            </h4>
                        </div>
                        <ul class="mb-2">
                            <li class="fs-6 mb-2"> English level 2</li>
                            <li class="fs-6 mb-2"> Adult Literacy level 2</li>
                            <li class="fs-6 mb-2"> GCSE Grade C/4 or above</li>
                        </ul>
                        <div class="w-100 mb-2">
                            <div class="w-100">
                                <h4 class="m-0 d-block">Course Credit</h4>
                                <span class="fs-5 d-block"> 60 credits (45 graded and 15 ungraded) </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-end align-items-center p-3">
                    <router-link :to="{name: 'CourseDetails', params: { slug: 'access-to-he-health-science' } }"
                                 class="btn btn-theme">
                        View course <i class="fas fa-arrow-right ms-2"></i>
                    </router-link>
                </div>
            </div>

        </div>
    </div>

</template>

<script>

export default {
    data() {
        return {}
    },
    mounted() {

    },
    methods: {}
}

</script>
