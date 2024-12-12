<template>
    <div class="w-100 py-5 border-top awarding-bodies">
        <div class="w-100 py-5">
            <div class="container-fluid">
                <div class="w-100 px-lg-">
                    <h1 class="fs-1 text-dark text-center">We are proud to work with</h1>
                </div>
                <div class="w-100 mt-3">
                    <div class="w-100 text-center">
                        <a href="https://www.qaa.ac.uk/" class="compImg"><img class="p-3 mx-3 my-2 shadow rounded-3" :src="'/assets/img/awarding/qaa-logo.png'" alt=""></a>
                        <a href="https://www.gatewayqualifications.org.uk/" class="compImg"><img class="p-3 mx-3 my-2 shadow rounded-3" :src="'/assets/img/awarding/Gateway.jpg'" alt=""></a>
                        <a href="https://matrixstandard.com/" class="compImg"><img class="p-3 mx-3 my-2 shadow rounded-3" :src="'/assets/img/awarding/Matrix-Standard.png'" alt=""></a>
                        <a href="https://www.gov.uk/government/organisations/ofsted" class="compImg"><img class="p-3 mx-3 my-2 shadow rounded-3" :src="'/assets/img/awarding/ofsted-logo.png'" alt=""></a>
                        <a href="https://www.gov.uk/government/organisations/education-and-skills-funding-agency" class="compImg"><img class="p-3 mx-3 my-2 shadow rounded-3" :src="'/assets/img/awarding/esfa-logo.png'" alt=""></a>
                        <a href="https://www.ncfe.org.uk/" class="compImg"><img class="p-3 mx-3 my-2 shadow rounded-3" :src="'/assets/img/awarding/ncfe-cache.png'" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer w-100 py-5">
        <div class="w-100 py-5">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-3">

                        <div class="w-100">
                            <div class="w-100">
                                <h1 class="fs-1 fw-light text-white">Follow us</h1>
                            </div>
                            <div class="w-100">
                                <div class="w-100">
                                    <a class="text-white fs-2 me-2" href="https://www.facebook.com/Mediprospects"><i class="fab fa-facebook-square"></i></a>
                                    <a class="text-white fs-2 me-2" href="https://twitter.com/mediprospects"><i class="fab fa-twitter-square"></i></a>
                                    <a class="text-white fs-2 me-2" href="https://www.instagram.com/mediprospects"><i class="fab fa-instagram-square"></i></a>
                                    <a class="text-white fs-2 me-2" href="https://www.youtube.com/channel/UCEvnazoDiNrAx2-Zv3wgdFw"><i class="fab fa-youtube-square"></i></a>
                                    <a class="text-white fs-2 me-2" href="https://www.linkedin.com/company/mediprospects/about/"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <div class="w-100">
                            <div class="w-100">
                                <h1 class="fs-1 fw-light text-white">Mediprospects</h1>
                            </div>
                            <div class="w-100 mt-4">
                                <div class="w-100">
                                    <p class="text-white d-flex justify-content-start align-items-center fs-5 mb-2"><i class="fas fa-home me-2 text-theme"></i> <a>Hawley House, 5-7 High Street, E13 0AD</a></p>
                                    <p class="text-white d-flex justify-content-start align-items-center fs-5 mb-2"><i class="fas fa-phone-alt me-2 text-theme"></i> <a class="text-decoration-none text-white" href="tel:02084726060">020 8472 6060</a></p>
                                    <p class="text-white d-flex justify-content-start align-items-center fs-5 mb-2"><i class="fas fa-envelope me-2 text-theme"></i> <a class="text-decoration-none text-white" href="mailto:info@mediprospects.ac.uk">info@mediprospects.ac.uk</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">

                        <div class="w-100">
                            <div class="w-100">
                                <h1 class="fs-1 fw-light text-white">Quick Links</h1>
                            </div>
                            <div class="w-100 mt-4">
                                <div class="w-100">
                                    <router-link :to="{name: 'PrivacyPolicy'}" class="text-white text-decoration-none d-flex justify-content-start align-items-center fs-5 mb-2">
                                        <i class="far fa-hand-point-right text-theme me-2"></i>
                                        Privacy Policy
                                    </router-link>
                                    <router-link :to="{name: 'TermsOfUse'}" class="text-white text-decoration-none d-flex justify-content-start align-items-center fs-5 mb-2">
                                        <i class="far fa-hand-point-right text-theme me-2"></i>
                                        Terms of use
                                    </router-link>
                                    <router-link :to="{name: 'CookiePolicy'}" class="text-white text-decoration-none d-flex justify-content-start align-items-center fs-5 mb-2">
                                        <i class="far fa-hand-point-right text-theme me-2"></i>
                                        Cookie Policy
                                    </router-link>
                                    <router-link :to="{name: 'SafeGuardingPolicy'}" class="text-white text-decoration-none d-flex justify-content-start align-items-center fs-5 mb-2">
                                        <i class="far fa-hand-point-right text-theme me-2"></i>
                                        Safeguarding Policy
                                    </router-link>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--                    <div class="col-lg-5">-->

                    <!--                        <div class="w-100">-->
                    <!--                            <div class="w-100">-->
                    <!--                                <h1 class="fs-1 text-white">Awarding Bodies</h1>-->
                    <!--                            </div>-->
                    <!--                            <div class="w-100">-->
                    <!--                                <div class="w-100">-->
                    <!--                                    <a class="compImg"><img class="bg-dark p-3 m-2 shadow" :src="'/assets/img/awarding/Matrix-Standard.png'" alt=""></a>-->
                    <!--                                    <a class="compImg"><img class="bg-dark p-3 m-2 shadow" :src="'/assets/img/awarding/logo-hed&#45;&#45;on-dark.svg'" alt=""></a>-->
                    <!--                                    <a class="compImg"><img class="bg-dark p-3 m-2 shadow" :src="'/assets/img/awarding/esfa-bnw-1.png'" alt=""></a>-->
                    <!--                                    <a class="compImg"><img class="bg-dark p-3 m-2 shadow" :src="'/assets/img/awarding/apprenticeships-logo.svg'" alt=""></a>-->
                    <!--                                    <a class="compImg"><img class="bg-dark p-3 m-2 shadow" :src="'/assets/img/awarding/OCRLogo.png'" alt=""></a>-->
                    <!--                                    <a class="compImg"><img class="bg-dark p-3 m-2 shadow" :src="'/assets/img/awarding/white-logo-main.png'" alt=""></a>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                    </div>-->
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
