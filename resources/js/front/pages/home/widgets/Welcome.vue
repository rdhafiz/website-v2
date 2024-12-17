<template>
    <div class="welcome-screen" :style="{ backgroundImage: 'url(/assets/img/home/background.jpg?v=2)' }">

        <div class="access-screen">
            <div class="w-100 d-flex justify-content-center align-items-center p-3">
                <div class="access-screen-content shadow-lg">
                    <h1 class="text-white h1-lg text-shadow-sm">Access to Higher Education</h1>
                    <h2 class="text-white text-shadow-sm">Step into Higher Learning</h2>
                    <p class="text-white fs-4 text-shadow-sm access-screen-description">Prepare for university with structured courses designed to build your academic foundation.</p>
                    <p><router-link :to="{name: 'Courses'}" class="btn btn-lg fw-bold btn-outline-light py-3 px-4"><i class="fas fa-graduation-cap"></i> Explore Access Courses <i class="fas fa-arrow-right ms-3"></i></router-link></p>
                </div>
            </div>
        </div>
        <div class="vocational-screen">
            <div class="w-100 d-flex justify-content-center align-items-center p-3">
                <div class="vocational-screen-content shadow-lg">
                    <h1 class="text-white h1-lg text-shadow-sm">Vocational Courses & Training</h1>
                    <h2 class="text-white text-shadow-sm">Build Skills for the Future</h2>
                    <p class="text-white fs-4 text-shadow-sm access-screen-description">Learn practical, in-demand skills through industry-focused training programs for successful career.</p>
                    <p><a class="btn btn-lg fw-bold btn-outline-light py-3 px-4"><i class="fas fa-tools"></i> Explore Vocational Training <i class="fas fa-arrow-right ms-3"></i></a></p>
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
