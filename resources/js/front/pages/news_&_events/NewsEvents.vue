<template>

    <div class="breadcrumb-content w-100 animate__animated animate__fadeIn">
        <div class="breadcrumb-content-left">
            <span class="shadow-1"></span>
            <span class="shadow-2"></span>
            <span class="shadow-3"></span>
        </div>
        <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/new_and_event.jpg)' }"></div>
        <div class="container-fluid">
            <div class="w-100 px-0 px-md-5">
                <div class="w-100 px-1 px-md-5 position-relative z-2">
                    <div class="breadcrumb-left">
                        <div class="w-100 mt-5">
                            <h1 class="w-100 text-white animate__animated animate__fadeInLeft">
                                News & Events
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
                                    <router-link :to="{name: 'NewsEvents'}" class="text-decoration-none text-white p-0 m-0">
                                        News & Events
                                    </router-link>
                                </li>
                            </ul>

                            <h1 class="mt-5 text-white fw-bold animate__animated animate__fadeInLeft" style="animation-delay: 0.2s">
                                Weekly one-hour <br> online open events <br>
                                <router-link :to="{name: 'PreEnrollmentOnlineEvent'}" class="btn btn-outline-light btn-lg mt-3 px-5">
                                    Book Here
                                </router-link>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news-screen">

        <div class="py-5 w-100">
            <div class="py-5 container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="w-100 mb-3 news">
                            <a href="javascript:void(0)" class="text-decoration-none d-block">
                                <div class="w-100 position-relative">
                                    <div class="overflow-hidden">
                                        <img :src="'/assets/img/news/news-4.jpg'" class="news-image" alt="news" loading="lazy" />
                                    </div>
                                    <div class="w-100 h-100 bg-effect position-absolute start-0 top-0"></div>
                                    <div class="position-absolute start-0 bottom-0 p-3">
                                        <div class="fs-3 fw-medium text-white"> Science & Engineering</div>
                                        <div class="fs-4 fw-normal text-white"> Decoding the mysterious of the universe
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="javascript:void(0)" class="text-decoration-none d-block">
                                    <div class="w-100 news position-relative shadow">
                                        <div class="overflow-hidden">
                                            <img :src="'/assets/img/news/news-5.jpg'" class="news-image row-box" alt="news" loading="lazy" />
                                        </div>
                                        <div class="bg-white p-4">
                                            <div class="fs-5 fw-medium mb-2 text-theme">Health & Medicine</div>
                                            <div class="fs-6 fw-normal text-dark new-description">What other countries are teach us about bring down
                                                drug price
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="javascript:void(0)" class="text-decoration-none d-block">
                                    <div class="w-100 news position-relative shadow">
                                        <div class="overflow-hidden">
                                            <img :src="'/assets/img/news/news-6.jpg'" class="news-image row-box" alt="news">
                                        </div>
                                        <div class="bg-white p-4">
                                            <div class="fs-5 fw-medium mb-2 text-theme">Business</div>
                                            <div class="fs-6 fw-normal text-dark new-description">What soccer fans can teach us about irritation</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <a href="javascript:void(0)" class="text-decoration-none d-block">
                                    <div class="w-100 news position-relative shadow">
                                        <div class="overflow-hidden">
                                            <img :src="'/assets/img/news/news-1.jpg'" class="news-image row-box" alt="news">
                                        </div>
                                        <div class="bg-white p-4">
                                            <div class="fs-5 fw-medium mb-2 text-theme">Civilization</div>
                                            <div class="fs-6 fw-normal text-dark new-description">Analysis our civilize will be appear with god</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="javascript:void(0)" class="text-decoration-none d-block">
                                    <div class="w-100 news position-relative shadow">
                                        <div class="overflow-hidden">
                                            <img :src="'/assets/img/news/news-2.jpg'" class="news-image row-box" alt="news">
                                        </div>
                                        <div class="bg-white p-4">
                                            <div class="fs-5 fw-medium mb-2 text-theme">Sports</div>
                                            <div class="fs-6 fw-normal text-dark new-description">Ronaldo hit football by his head which is effect by
                                                leg
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-100">
                            <a href="javascript:void(0)" class="text-decoration-none d-block">
                                <div class="w-100 news position-relative">
                                    <div class="overflow-hidden">
                                        <img :src="'/assets/img/news/news-3.jpg'" class="news-image" alt="news">
                                    </div>
                                    <div class="w-100 h-100 bg-effect position-absolute start-0 top-0"></div>
                                    <div class="position-absolute start-0 bottom-0 p-3">
                                        <div class="fs-3 fw-medium text-white"> Economic</div>
                                        <div class="fs-4 fw-normal text-white"> Upgrade economic change the currency into
                                            bitcoin
                                        </div>
                                    </div>
                                </div>
                            </a>
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
    mounted() {

    },
    methods: {}
}

</script>
