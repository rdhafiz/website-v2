<template>

    <div class="about-screen">
        <div class="breadcrumb-content w-100 animate__animated animate__fadeIn">
            <div class="breadcrumb-content-left">
                <span class="shadow-1"></span>
                <span class="shadow-2"></span>
                <span class="shadow-3"></span>
            </div>
            <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/about.png)' }"></div>
            <div class="container-fluid">
                <div class="breadcrumb-left">
                    <div class="px-0 px-md-5 w-100">
                        <div class="px-1 px-md-5 position-relative z-2 col-lg-6">
                            <h1 class="w-100 breadcrumb-title text-white animate__animated animate__fadeInLeft mt-5">
                                Since 2007, Mediprospects
                            </h1>
                            <div class="breadcrumb-description mb-3 text-white">
                                has been delivering learning, skills and employability services for vocational sectors: helping Apprentices, Learners, Employers and Employees in developing skills and securing a better, brighter future.
                            </div>
                            <div class="breadcrumb-description text-white mb-3">
                                The values we believe:
                            </div>
                            <ul class="breadcrumb-sub-description text-white">
                                <li class="mt-1"> Respect – respect others, and recognise and value their contribution. </li>
                                <li class="mt-1"> To be accountable – inculcate personal responsibility for the success of our company and ourselves as individuals. </li>
                                <li class="mt-1"> To be inclusive – take into account the different needs, values, beliefs and aspirations of others. </li>
                                <li class="mt-1"> To challenge paradigms – confidently express our opinions while remaining open to the views of others and learn from the process. </li>
                                <li class="mt-1"> To empower – assist others in achieving the best they can be and to realise their potential. </li>
                                <li class="mt-1"> To pursue excellence – share best practice, learn from others, and develop continually. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="w-100 about-screen-container bg-white">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-6 py-5 contain-box px-4">
                        <div class="vision-title">
                            Our Vision
                        </div>
                        <div class="introduction-description">
                            To be recognised as a leading and exemplary authority in the field of training, employability and community development.
                        </div>
                    </div>
                    <div class="col-lg-6 py-5 contain-box px-4">
                        <div class="mission-title">
                            Our Mission
                        </div>
                        <div class="introduction-description">
                            To make a long-lasting and tangible impact on young people and adults alike through excellent learning provision, career opportunities and pastoral support.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 w-100 about-screen-container bg-white">
            <div class="container">

                <div class="w-100">
                    <div class="w-100">
                        <div class="w-100 p-5 about-screen-text-container rounded-3">
                            <div class="text-white text-center introduction-title fs-1 fw-bold">
                                We have been an Ofsted Inspected Training Provider since 2007
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="w-100 mt-5">
                            <h2 class="text-secondary fw-bold mb-4">In August 2024, Ofsted said: </h2>
                            <h4 class="text-secondary fw-normal mb-4 position-relative p-4 py-md-4 px-md-5 shadow rounded-3 introduction-description">
                                <i class="fas fa-quote-left fs-2 text-secondary text-opacity-50 position-absolute"></i>
                                    <span class="ms-5 mt-3 d-inline-block">Learners</span> are taught in respectful and calm environments. Learners, many of whom are parents of young children, value the opportunity that trainers provide to study at times that fit around their family and work placement commitments. For example, trainers offer learners choices of lessons in evenings or at weekends. This allows learners to balance their work and family lives with their education. As a result, most learners have high attendance and stay on their course to complete their studies.
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4 position-relative p-4 py-md-4 px-md-5 shadow rounded-3 introduction-description">
                                <i class="fas fa-quote-left fs-2 text-secondary text-opacity-50 position-absolute"></i>
                                    <span class="ms-5 mt-3 d-inline-block">Learners</span> participate in a good range of additional courses and gain extra useful qualifications. These courses help learners to develop knowledge and skills beyond the core curriculum, and prepare them for their next steps such as work placement, employment or further study. For example, most early years learners gain safeguarding qualifications that employers value.
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4 position-relative p-4 py-md-4 px-md-5 shadow rounded-3 introduction-description">
                                <i class="fas fa-quote-left fs-2 text-secondary text-opacity-50 position-absolute"></i>
                                    <span class="ms-5 mt-3 d-inline-block">Access</span> to HE learners gain valuable knowledge and skills throughout their course that prepare them well to study at university to become midwives or nurses.
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4 position-relative p-4 py-md-4 px-md-5 shadow rounded-3 introduction-description">
                                <i class="fas fa-quote-left fs-2 text-secondary text-opacity-50 position-absolute"></i>
                                    <span class="ms-5 mt-3 d-inline-block">Trainers</span> are well-qualified and experts in the subjects they teach
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4 position-relative p-4 py-md-4 px-md-5 shadow rounded-3 introduction-description">
                                <i class="fas fa-quote-left fs-2 text-secondary text-opacity-50 position-absolute"></i>
                                    <span class="ms-5 mt-3 d-inline-block">Most</span> Access to HE learners achieve distinctions for their work
                            </h4>
                            <h4 class="text-secondary fw-normal mb-4 position-relative p-4 py-md-4 px-md-5 shadow rounded-3 introduction-description">
                                <i class="fas fa-quote-left fs-2 text-secondary text-opacity-50 position-absolute"></i>
                                    <span class="ms-5 mt-3 d-inline-block">Trainers</span> discuss a range of universities and career pathways with learners. As a result, learners make informed decisions about their next steps and careers
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
