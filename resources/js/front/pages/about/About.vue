<template>
    <div class="about-screen">
        <div class="breadcrumb w-100 d-flex justify-content-center align-items-center align-items-center flex-column">
            <h1 class="text-center text-white">
                About Us
            </h1>
            <div class="d-flex justify-content-center align-items-center gap-3 fs-4">
                <a href="javascript:void(0)" class="text-decoration-none text-white text-opacity-25">
                    Home
                </a>
                <div> /</div>
                <a href="javascript:void(0)" class="text-decoration-none text-white">
                    About us
                </a>
            </div>
        </div>

        <section class="py-5 w-100 about-screen-container bg-white">
            <div class="container">
                <div class="about-screen-image-relate">
                    <div class="position-relative">
                        <img :src="'/assets/img/about/background.png'" class="img-fluid object-fit-cover rounded-3"
                             alt="background"/>
                        <div class="position-absolute p-5 content-top-right">
                            <div class="p-5 about-screen-text-container rounded-3">
                                <div class="text-white mb-3 introduction-title">
                                    Introduction to the centre
                                </div>
                                <div class="text-white-50 introduction-description">
                                    the centre for advanced welsh and celtic is a dedicated research institute of the
                                    university of wales, located alongside the national library of wales in haberdashery
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
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
                    <div class="col-md-6">
                        <div class="introduction-title fw-bold">
                            Educating tomorrow's global citizens
                        </div>
                        <div class="mt-3 introduction-description">
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
                    <div class="col-md-6">
                        <img :src="'/assets/img/about/background-1.png'"
                             class="img-fluid object-fit-cover rounded-4 about-img w-100" alt="about">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 about-screen-governance">
            <div class="container">
                <div class="text-small mb-3 text-white-50">
                    Governance
                </div>
                <div class="governance-title text-white">
                    Santa's Security and Policy teams establish policies and controls, monitor compliance with those
                    controls, and <span class="text-green"> prove our security and compliance </span>
                    to third-party auditors.
                </div>
                <div class="governance-description text-white mt-5">
                    Our policies are based on the following fundamentals principles
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6 p-2 h-100">
                                    <div class="w-100 p-5 bg-white rounded-4">
                                        <div class="mb-3 governance-box-title">
                                            01.
                                        </div>
                                        <div class="governance-box-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, eaque iusto maiores nam nesciunt nisi nobis obcaecati omnis voluptate. Assumenda commodi exercitationem harum nihil unde.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-2 h-100">
                                    <div class="w-100 p-5 bg-white rounded-4">
                                        <div class="mb-3 governance-box-title">
                                            02.
                                        </div>
                                        <div class="governance-box-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, eaque iusto maiores nam nesciunt nisi nobis obcaecati omnis voluptate. Assumenda commodi exercitationem harum nihil unde.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-2 h-100">
                                    <div class="w-100 p-5 bg-white rounded-4">
                                        <div class="mb-3 governance-box-title">
                                            03.
                                        </div>
                                        <div class="governance-box-description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, eaque iusto maiores nam nesciunt nisi nobis obcaecati omnis voluptate. Assumenda commodi exercitationem harum nihil unde.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-2 h-100">
                                    <div class="w-100 p-5 bg-white rounded-4">
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
                        <div class="col-lg-6 p-2">
                            <div class="w-100 p-5 governance-box-container rounded-4 h-100 d-flex justify-content-between align-items-start flex-column">
                                <div>
                                    <div class="governance-box-text text-white mb-3">
                                        Security and compliance at vanta
                                    </div>
                                    <div class="text-white mb-5 governance-box-description">
                                        vanta maintains a SOC 2 Type || attestation and an ISO 27001 compliance certification. Our SOC 2 Type || report and ISO 27001 are available on our
                                        <a href="javascript:void(0)" class="text-decoration-none text-white-50">Trusted company</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3 text-white-50 governance-box-text">
                                        Vanta maintains <a href="javascript:void(0)" class="text-decoration-none text-white">compliance with </a>
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
