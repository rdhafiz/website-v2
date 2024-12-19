<template>
    <div class="course-screen py-5">
        <div class="w-100 d-inline-block">
            <div class="course-screen-content py-5">
                <div class="w-100 px-2 px-md-5">
                    <a id="access-courses"></a>
                    <div class="w-100">

                        <div class="w-100 d-inline-block mb-3">
                            <h1 class="h1-md fw-bold text-dark text-center" data-aos="fade-up">Access to HE Diplomas</h1>
                            <p class="fs-4 text-secondary text-center" data-aos="fade-up" data-aos-delay="500">Unlock your potential with specialized diploma courses <br> designed to prepare you for higher education and professional success.</p>
                        </div>
                        <div class="w-100 mt-2 mt-xl-5">
                            <div class="w-100 text-center">

                                <div class="each-course shadow" data-aos="fade-up" data-aos-delay="200">
                                    <div class="w-100">
                                        <div class="w-100">
                                            <div class="w-100">
                                                <img class="each-course-img" :src="'/assets/img/access/access-to-he-health-profession.webp'" alt="">
                                            </div>
                                            <div class="each-course-content p-3">
                                                <div class="w-100">
                                                    <h3 class="fw-bold fs-2 text-center mb-3">Access to HE <br> Health Professions</h3>
                                                    <p class="fs-5 text-center mb-3">Prepare for a rewarding career in health professions.</p>
                                                </div>
                                                <div class="w-100">
                                                    <router-link :to="{name: 'CourseDetails', params: { slug: 'access-to-he-health-professions' }}" class="btn btn-theme px-3">More Information <i class="fas fa-arrow-right ms-2"></i></router-link>
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
                                                    <p class="fs-5 text-center mb-3">Gain the expertise to pursue a career in nursing and midwifery.</p>
                                                </div>
                                                <div class="w-100">
                                                    <router-link :to="{name: 'CourseDetails', params:{ slug: 'access-to-he-nursing-&-midwifery'}}" class="btn btn-theme px-3">More Information <i class="fas fa-arrow-right ms-2"></i></router-link>
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
                                                    <p class="fs-5 text-center mb-3">Develop the skills for the nursing profession.</p>
                                                </div>
                                                <div class="w-100">
                                                    <router-link :to="{name: 'CourseDetails', params: { slug: 'access-to-he-nursing' }}" class="btn btn-theme px-3">More Information <i class="fas fa-arrow-right ms-2"></i></router-link>
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
                                                    <p class="fs-5 text-center mb-3">Your pathway to a rewarding career in healthcare and science.</p>
                                                </div>
                                                <div class="w-100">
                                                    <router-link :to="{name: 'CourseDetails', params: { slug: 'access-to-he-health-science' } }" class="btn btn-theme px-3">More Information <i class="fas fa-arrow-right ms-2"></i></router-link>
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
