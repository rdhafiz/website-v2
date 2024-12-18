<template>

    <div class="about-screen">
        <div class="breadcrumb-content w-100 animate__animated animate__fadeIn">
            <div class="breadcrumb-content-left">
                <span class="shadow-1"></span>
                <span class="shadow-2"></span>
                <span class="shadow-3"></span>
            </div>
            <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/about_us.jpg?v=2)' }"></div>
            <div class="container-fluid">
                <div class="breadcrumb-left">
                    <div class="px-5 w-100">
                        <div class="px-5 w-100 position-relative z-2">
                            <h1 class="w-100 text-white animate__animated animate__fadeInLeft">
                                About Us
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
                                    <router-link :to="{name: 'About'}" class="text-decoration-none text-white p-0 m-0">
                                        About us
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="py-5 w-100 about-screen-container bg-white">
            <div class="container">

                <div class="w-100">
                    <div class="w-100">
                        <div class="w-100 p-5 about-screen-text-container rounded-3">
                            <div class="text-white text-center fs-1 fw-bold">
                                We have been an Ofsted Inspected Training Provider since 2007
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="w-100 mt-5">
                            <h2 class="text-secondary fw-bold mb-4">In August 2024, Ofsted said: </h2>
                            <h4 class="text-secondary fw-normal mb-4">
                                Learners are taught in respectful and calm environments. Learners, many of whom are parents of young children, value the opportunity that trainers provide to study at times that fit around their family and work placement commitments. For example, trainers offer learners choices of lessons in evenings or at weekends. This allows learners to balance their work and family lives with their education. As a result, most learners have high attendance and stay on their course to complete their studies.
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4">
                                Learners participate in a good range of additional courses and gain extra useful qualifications. These courses help learners to develop knowledge and skills beyond the core curriculum, and prepare them for their next steps such as work placement, employment or further study. For example, most early years learners gain safeguarding qualifications that employers value.
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4">
                                Access to HE learners gain valuable knowledge and skills throughout their course that prepare them well to study at university to become midwives or nurses.
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4">
                                Trainers are well-qualified and experts in the subjects they teach
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4">
                                Most Access to HE learners achieve distinctions for their work
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4">
                                Trainers discuss a range of universities and career pathways with learners. As a result, learners make informed decisions about their next steps and careers
                            </h4>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

</template>
<script>

export default {
    data() {
        return {}
    },
    methods: {},
    async mounted() {
    }
}
</script>
