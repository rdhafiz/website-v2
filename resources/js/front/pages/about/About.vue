<template>

    <div class="about-screen">
        <div class="breadcrumb w-100 d-flex justify-content-center align-items-center align-items-center flex-column animate__animated animate__fadeIn">
            <h1 class="text-center text-white animate__animated animate__fadeInLeft">
                About Us
            </h1>
            <div class="d-flex justify-content-center align-items-center gap-3 fs-4 animate__animated animate__fadeInLeft">
                <a href="javascript:void(0)" class="text-decoration-none text-white">
                    Home
                </a>
                <div class="text-white"> /</div>
                <a href="javascript:void(0)" class="text-decoration-none text-white">
                    About us
                </a>
            </div>
        </div>

        <section class="py-5 w-100 about-screen-container bg-white">
            <div class="container">
                <div>
                    <div class="position-relative animate__animated animate__fadeInRight">
                        <img :src="'/assets/img/about/background.png'" class="img-fluid about-screen-image-cover object-fit-cover rounded-3"
                             alt="background"/>
                        <div class="position-absolute content-top-right">
                            <div class="p-5 about-screen-text-container rounded-3">
                                <div class="text-white mb-3 introduction-title">
                                    Introduction to the centre
                                </div>
                                <div class="text-white text-opacity-75 introduction-description">
                                    the centre for advanced welsh and celtic is a dedicated research institute of the
                                    university of wales, located alongside the national library of wales in haberdashery
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 introduction-description max-width-70 animate__animated animate__fadeInLeft">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid, assumenda beatae
                        distinctio dolor doloremque earum eligendi esse, est facere, facilis id ipsa ipsam iste
                        laboriosam laborum neque numquam quam recusandae repellat sint tempora totam vel vitae
                        voluptate? Amet, itaque modi natus omnis possimus provident! Ad dignissimos laboriosam quos
                        temporibus.
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 w-100 about-screen-container bg-light">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 animate__animated animate__fadeInLeft">
                        <div class="introduction-title fw-bold">
                            Educating tomorrow's global citizens
                        </div>
                        <div class="mt-3 introduction-description mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi at cupiditate
                            debitis dicta earum eligendi facere fugit inventore maiores maxime nulla perspiciatis
                            placeat quaerat quam quia quis quod repellat, rerum sequi totam, unde voluptate voluptatem,
                            voluptatibus voluptatum. Accusamus alias amet autem corporis culpa cupiditate eligendi
                            exercitationem facilis fugit iure iusto laudantium maiores nesciunt, nobis officiis
                            provident quo rerum, sequi, ut vel! Accusantium, commodi consequuntur, culpa delectus,
                            dolorem eaque est eum minus nulla obcaecati officiis rem sint voluptatibus? Amet deleniti
                            eveniet illum optio quae quam quas quasi repellat sapiente, suscipit! Aperiam aut cumque
                            dolorem doloremque, eligendi ex ullam! Consequuntur in itaque pariatur sequi vitae. Alias
                            aliquam consequuntur delectus deleniti eius exercitationem expedita explicabo harum illo
                            incidunt, ipsum nam nesciunt nostrum numquam perferendis quidem vel voluptas.
                        </div>
                    </div>
                    <div class="col-lg-6 animate__animated animate__fadeInRight">
                        <img :src="'/assets/img/about/background-1.png'"
                             class="img-fluid object-fit-cover rounded-4 about-img w-100" alt="about">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 about-screen-governance">
            <div class="container">
                <div class="fs-4 mb-3 text-white animate__animated animate__fadeInLeft">
                    Governance
                    <hr class="border bg-white mt-2 border-white" style="width: 39px">
                </div>
                <div class="governance-title text-white animate__animated animate__fadeInLeft">
                    Santa's Security and Policy teams establish policies and controls, monitor compliance with those
                    controls, and prove our security and compliance to third-party auditors.
                </div>
                <div class="governance-description text-white mt-5 animate__animated animate__fadeInRight">
                    Our policies are based on the following fundamentals principles
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-md-6 p-2 h-100 animate__animated animate__fadeInLeft" style="animation-delay: 0.2s">
                                    <div class="w-100 p-4 bg-white rounded-4">
                                        <div class="mb-3 governance-box-title">
                                            01.
                                        </div>
                                        <div class="governance-box-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, eaque iusto maiores nam nesciunt nisi nobis obcaecati omnis voluptate. Assumenda commodi exercitationem harum nihil unde.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-2 h-100 animate__animated animate__fadeInLeft" style="animation-delay: 0.4s">
                                    <div class="w-100 p-4 bg-white rounded-4">
                                        <div class="mb-3 governance-box-title">
                                            02.
                                        </div>
                                        <div class="governance-box-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, eaque iusto maiores nam nesciunt nisi nobis obcaecati omnis voluptate. Assumenda commodi exercitationem harum nihil unde.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-2 h-100 animate__animated animate__fadeInLeft" style="animation-delay: 0.6s">
                                    <div class="w-100 p-4 bg-white rounded-4">
                                        <div class="mb-3 governance-box-title">
                                            03.
                                        </div>
                                        <div class="governance-box-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, eaque iusto maiores nam nesciunt nisi nobis obcaecati omnis voluptate. Assumenda commodi exercitationem harum nihil unde.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-2 h-100 animate__animated animate__fadeInLeft" style="animation-delay: 0.8s">
                                    <div class="w-100 p-4 bg-white rounded-4">
                                        <div class="mb-3 governance-box-title">
                                            04.
                                        </div>
                                        <div class="governance-box-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, eaque iusto maiores nam nesciunt nisi nobis obcaecati omnis voluptate. Assumenda commodi exercitationem harum nihil unde.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 p-2">
                            <div class="w-100 p-5 governance-box-container rounded-4 h-100 d-flex justify-content-between align-items-start flex-column animate__animated animate__fadeInRight" style="animation-delay: 1s">
                                <div>
                                    <div class="governance-box-text text-white mb-3">
                                        Security and compliance at vanta
                                    </div>
                                    <div class="text-white mb-3 governance-box-description">
                                        vanta maintains a SOC 2 Type || attestation and an ISO 27001 compliance certification. Our SOC 2 Type || report and ISO 27001 are available on our
                                    </div>
                                    <div class="mb-3">
                                        <a href="javascript:void(0)" class="btn btn-lg fw-bold btn-outline-light py-3 px-4 w-100">
                                            Trusted company <i class="fas fa-arrow-right ms-3"></i>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-4 governance-box-text text-white">
                                        Vanta maintains
                                    </div>
                                    <div class="d-flex justify-content-around align-items-center flex-wrap gap-3">
                                        <div>
                                            <div class="trusted-company rounded-circle overflow-hidden"> HIPPA </div>
                                        </div>
                                        <div>
                                            <div class="trusted-company rounded-circle overflow-hidden"> GDPR </div>
                                        </div>
                                        <div>
                                            <div class="trusted-company rounded-circle overflow-hidden"> CCPA </div>
                                        </div>
                                        <div>
                                            <div class="trusted-company rounded-circle overflow-hidden"> PCI </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 governance-box-text">
                                        <a href="javascript:void(0)" class="btn btn-lg fw-bold btn-outline-light py-3 px-4 w-100">
                                            compliance with <i class="fas fa-arrow-right ms-3"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
