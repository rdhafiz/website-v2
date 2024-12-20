<template>

    <br><br><br><br>

    <section class="w-100 py-5">
        <div class="container">
            <h1 class="mb-3 text-secondary fw-bold"> Privacy Policy </h1>
            <div class="d-flex justify-content-start align-items-center mb-4">
                <router-link :to="{name: 'Home'}" class="text-decoration-none text-secondary">
                    Home
                </router-link>
                <div class="mx-2"> / </div>
                <router-link :to="{name: 'About'}" class="text-decoration-none text-secondary">
                    About us
                </router-link>
                <div class="mx-2"> / </div>
                <router-link :to="{name: 'PrivacyPolicy'}" class="text-decoration-none text-secondary fw-medium">
                    Privacy Policy
                </router-link>
            </div>
            <div class="border rounded-3 p-3 p-md-5">
                <div>
                    <h2 class="text-secondary fw-bold"> Equal Opportunities </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> Mediprospects is a staunch supporter of Equal opportunities and celebrates diversity. </h5>
                </div>
                <div class="mt-3 mt-md-5">
                    <h2 class="text-secondary fw-bold"> Anti-bribery and fraud policy </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> We operate with a ‘zero tolerance’ towards any form of malpractice and support transparency in all aspects of work. </h5>
                </div>
                <div class="mt-3 mt-md-5">
                    <h2 class="text-secondary fw-bold"> Complaints & Appeals Procedure </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> Mediprospects aspires to continually listen to its stakeholders and make changes to improve its services. </h5>
                </div>
                <div class="mt-3 mt-md-5">
                    <h2 class="text-secondary fw-bold"> Privacy Policy </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> We operate within the constraints as set forth by the Legal framework in the UK in regards to data protection and will not share the information you provide to us with others without your permission. </h5>
                </div>
                <div class="mt-3 mt-md-5">
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
