<template>
    <div class="course-screen py-5">
        <div class="w-100 d-inline-block">
            <div class="course-screen-content py-5">
                <div class="w-100 px-5">
                    <a id="access-courses"></a>
                    <div class="w-100">

                        <div class="w-100 d-inline-block mb-3">
                            <h1 class="h1-md fw-bold text-dark text-center" data-aos="fade-up">Access to HE Diplomas</h1>
                            <p class="fs-4 text-secondary text-center" data-aos="fade-up" data-aos-delay="500">Unlock your potential with specialized diploma courses <br> designed to prepare you for higher education and professional success.</p>
                        </div>
                        <div class="w-100 mt-5">
                            <div class="w-100 text-center">

                                <div class="each-course shadow" data-aos="fade-up" data-aos-delay="200">
                                    <div class="w-100">
                                        <div class="w-100">
                                            <div class="w-100">
                                                <img class="each-course-img" :src="'/assets/img/access/HealthProfessions.jpg'" alt="">
                                            </div>
                                            <div class="each-course-content p-3">
                                                <div class="w-100">
                                                    <h3 class="fw-bold fs-2 text-center mb-3">Access to HE <br> Health Professions</h3>
                                                    <p class="fs-5 text-center">Prepare for a rewarding career in health professions with foundational knowledge and essential skills.</p>
                                                </div>
                                                <div class="w-100">
                                                    <router-link :to="{name: 'CourseDetails', params: { slug: 'access-to-he-health-professions' }}" class="btn btn-primary px-3">More Information <i class="fas fa-arrow-right ms-2"></i></router-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="each-course shadow" data-aos="fade-up" data-aos-delay="400">
                                    <div class="w-100">
                                        <div class="w-100">
                                            <div class="w-100">
                                                <img class="each-course-img" :src="'/assets/img/access/NursingMidwifery.jpg'" alt="">
                                            </div>
                                            <div class="each-course-content p-3">
                                                <div class="w-100">
                                                    <h3 class="fw-bold fs-2 text-center mb-3">Access to HE <br> Nursing & Midwifery</h3>
                                                    <p class="fs-5 text-center">Gain the expertise and confidence to pursue a fulfilling career in nursing and midwifery.</p>
                                                </div>
                                                <div class="w-100">
                                                    <router-link :to="{name: 'CourseDetails', params:{ slug: 'access-to-he-nursing-&-midwifery'}}" class="btn btn-primary px-3">More Information <i class="fas fa-arrow-right ms-2"></i></router-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="each-course shadow" data-aos="fade-up" data-aos-delay="600">
                                    <div class="w-100">
                                        <div class="w-100">
                                            <div class="w-100">
                                                <img class="each-course-img" :src="'/assets/img/access/Nursing.jpg'" alt="">
                                            </div>
                                            <div class="each-course-content p-3">
                                                <div class="w-100">
                                                    <h3 class="fw-bold fs-2 text-center mb-3">Access to HE <br> Nursing</h3>
                                                    <p class="fs-5 text-center">Develop the skills needed to enter the nursing profession and make a difference every day.</p>
                                                </div>
                                                <div class="w-100">
                                                    <router-link :to="{name: 'CourseDetails', params: { slug: 'access-to-he-nursing' }}" class="btn btn-primary px-3">More Information <i class="fas fa-arrow-right ms-2"></i></router-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="each-course shadow" data-aos="fade-up" data-aos-delay="1000">
                                    <div class="w-100">
                                        <div class="w-100">
                                            <div class="w-100">
                                                <img class="each-course-img" :src="'/assets/img/access/HealthScience.jpg'" alt="">
                                            </div>
                                            <div class="each-course-content p-3">
                                                <div class="w-100">
                                                    <h3 class="fw-bold fs-2 text-center mb-3">Access to HE <br> Health Science</h3>
                                                    <p class="fs-5 text-center">Understand the requirements and prepare for a seamless transition to university.</p>
                                                </div>
                                                <div class="w-100">
                                                    <router-link :to="{name: 'CourseDetails', params: { slug: 'access-to-he-health-science' } }" class="btn btn-primary px-3">More Information <i class="fas fa-arrow-right ms-2"></i></router-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
    data() {
        return {}
    },
    methods: {
    },
    mounted() {
    }
}
</script>
