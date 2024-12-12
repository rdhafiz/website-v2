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
                            Terms of use
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
                                <router-link :to="{name: 'About'}" class="text-decoration-none text-white p-0 m-0">
                                    Terms of use
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
            <h1 class="text-secondary fw-bold"> Terms of use </h1>
            <div class="border rounded-3 p-5">
                <div>
                    <div class="fs-6"> Please read our <router-link :to="{name: 'PrivacyPolicy'}" class="text-decoration-none text-theme"> privacy policy </router-link> together with these Terms. </div>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> 1. Use of the Site </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> These terms of use apply to the entire contents of this website. Please read them carefully and if you do not agree with any of them, you should stop using the website immediately. We reserve the right to amend, add or alter the contents of the website or these terms of use without notification. We are not obliged to remove outdated information from the website or to show it as being outdated. The vacancies and services described on this website are subject to availability and may be withdrawn, or varied without notice subject to terms and conditions and are only available to residents of the United Kingdom. The vacancies and services are not intended for use by residents of any other jurisdiction. If you choose to submit details electronically, for example, contacting us or registering with us, you will receive an automated acknowledgement. This e-mail is for acknowledgement purposes only and shall not constitute an offer or acceptance from us to provide you with a vacancy or service. Application forms downloaded from this site can only be processed, if completed in English. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> 2. Use of content </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> We allow you to print individual pages from this website on paper, and store individual pages electronically on disk for your own personal and non-commercial use. We do not allow you to reproduce, copy, or modify the content of this website, or use the content of this website for any commercial, illegal or immoral purpose. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> 3. Accessibility </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> We have made reasonable efforts to ensure that the website is accessible from most browsers. However, we cannot absolutely guarantee you will be able to access the website and we do not accept liability if you are unable to do so. We will attempt to have this website available at all times. We do have the right to suspend access temporarily or permanently, for which no notice may be given. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> 4. Liability </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> Mediprospects will not be liable for any reason if the site is unavailable, however long the period might be. As a consequence, Mediprospects will not be liable for any loss or damage arising in contract, tort or otherwise, if the site becomes unavailable or is suspended for any reason. We endeavour to make sure this site is free from viruses, programs or software that could damage the operation of your computer. However, we cannot guarantee this and we do not accept liability if it occurs. English law shall at all times govern this website and in the event of a dispute the exclusive jurisdiction shall be that of the English Court. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> 5. Accuracy of Information </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> We believe the information provided on this website is up to date and accurate. If you intend to rely on any information on this website, you are responsible for checking its validity and accuracy and ensuring that it meets your requirements. Mediprospects will not accept any liability for losses or damages from use or inability to use this website or from any error or omission in information. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> 6. Email Messages </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> Messages sent over the internet cannot be guaranteed to be completely secure, as they could possibly be intercepted by a third party. Mediprospects is not responsible and will not be liable to you or anyone else for any damage or otherwise caused in connection with messages sent or received by you over the Internet. </h5>
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
