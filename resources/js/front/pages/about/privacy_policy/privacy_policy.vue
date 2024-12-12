<template>

    <div class="breadcrumb-content w-100 animate__animated animate__fadeIn" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/breadcrumb.jpg)' }">
        <div class="breadcrumb-content-left">
            <span class="shadow-1"></span>
            <span class="shadow-2"></span>
            <span class="shadow-3"></span>
        </div>
        <div class="container-fluid">
            <div class="breadcrumb-left">
                <div class="px-5 w-100">
                    <div class="px-5 w-100 position-relative z-2">
                        <h1 class="w-100 text-white animate__animated animate__fadeInLeft">
                            Privacy Policy
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
                            <li class="text-white mx-3">
                                /
                            </li>
                            <li class="breadcrumb-item">
                                <router-link :to="{name: 'PrivacyPolicy'}" class="text-decoration-none text-white p-0 m-0">
                                    Privacy Policy
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="w-100 py-5">
        <div class="container">
            <h1 class="mb-3 text-secondary fw-bold"> Privacy Policy </h1>
            <div class="border rounded-3 p-5">
                <div>
                    <h2 class="text-secondary fw-bold"> Equal Opportunities </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> Mediprospects is a staunch supporter of Equal opportunities and celebrates diversity. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> Anti-bribery and fraud policy </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> We operate with a ‘zero tolerance’ towards any form of malpractice and support transparency in all aspects of work. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> Complaints & Appeals Procedure </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> Mediprospects aspires to continually listen to its stakeholders and make changes to improve its services. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> Privacy Policy </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> We operate within the constraints as set forth by the Legal framework in the UK in regards to data protection and will not share the information you provide to us with others without your permission. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> Safeguarding Policy </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> We work with a ‘Duty of Care’ towards all of our stakeholders and support the current National framework for safeguarding. </h5>
                </div>
            </div>
        </div>
    </section>

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
