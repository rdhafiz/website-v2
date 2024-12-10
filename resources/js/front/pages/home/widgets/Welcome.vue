<template>
    <div class="welcome-screen">

        <div class="access-screen animate__animated animate__fadeInLeft">
            <div class="w-100 d-flex justify-content-center align-items-center p-3">
                <div class="access-screen-content">
                    <h1 class="text-white h1-lg text-shadow-sm animate__animated animate__fadeInRight" style="animation-delay: 1s">Access to Higher Education</h1>
                    <h2 class="text-white text-shadow-sm animate__animated animate__fadeInRight" style="animation-delay: 1.3s">Step into Higher Learning</h2>
                    <p class="text-white fs-4 text-shadow-sm animate__animated animate__fadeInRight" style="animation-delay: 1.6s">Prepare for university with structured courses designed to build your academic foundation.</p>
                    <p class=" animate__animated animate__fadeInRight" style="animation-delay: 1.9s"><router-link :to="{name: 'Courses'}" class="btn btn-lg fw-bold btn-outline-light py-3 px-4"><i class="fas fa-graduation-cap"></i> Explore Access Courses <i class="fas fa-arrow-right ms-3"></i></router-link></p>
                </div>
            </div>
        </div>
        <div class="vocational-screen animate__animated animate__fadeInRight">
            <div class="w-100 d-flex justify-content-center align-items-center p-3">
                <div class="vocational-screen-content">
                    <h1 class="text-white h1-lg text-shadow-sm animate__animated animate__fadeInLeft" style="animation-delay: 1s">Vocational Courses & Training</h1>
                    <h2 class="text-white text-shadow-sm animate__animated animate__fadeInLeft" style="animation-delay: 1.3s">Build Skills for the Future</h2>
                    <p class="text-white fs-4 text-shadow-sm animate__animated animate__fadeInLeft" style="animation-delay: 1.6s">Learn practical, in-demand skills through industry-focused training programs designed to prepare you for a successful and fulfilling career.</p>
                    <p class=" animate__animated animate__fadeInLeft" style="animation-delay: 1.9s"><a class="btn btn-lg fw-bold btn-outline-light py-3 px-4"><i class="fas fa-tools"></i> Explore Vocational Training <i class="fas fa-arrow-right ms-3"></i></a></p>
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
    methods: {},
    mounted() {
    }
}
</script>
