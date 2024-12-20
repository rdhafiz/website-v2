<template>
    <div class="award-screen py-5 border-top">
        <div class="w-100 d-inline-block">
            <div class="award-screen-content py-5">
                <div class="container-lg">
                    <div class="w-100">
                        <div class="w-100 d-inline-block mb-3">
                            <h1 class="h1-md fw-bold text-white text-center" data-aos="fade-up">Celebrating Excellence</h1>
                            <p class="fs-4 text-white text-center" data-aos="fade-up" data-aos-delay="500">Honouring the outstanding achievements of <br> our learners and educators who inspire and lead the way.</p>
                        </div>
                        <div class="w-100 mt-5">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="each-award">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-start align-items-center d-xl-none mb-5">
                                                    <img class="person-image rounded-circle" :src="'/assets/img/award/gemma-lee-award.jpg'" alt="gemma-lee-award" loading="lazy" />
                                                    <img class="person-image rounded-circle" :src="'/assets/img/award/Afroja_khan.jpg'" alt="Afroja_khan" loading="lazy" />
                                                    <img class="person-image rounded-circle" :src="'/assets/img/award/lesley-heaney.jpg'" alt="lesley-heaney" loading="lazy" />
                                                </div>
                                                <div class="col-12 col-xl-7 award-description">
                                                    <h1 class="h1-lg text-white text-shadow-sm">Learner of the Year</h1>
                                                    <h2 class="text-white text-shadow-sm">Recognizing Academic Excellence</h2>
                                                    <p class="fs-4 text-white text-shadow-sm">Awarded to a learner who has demonstrated exceptional dedication, achievement, and progress in their studies.</p>
                                                    <p class=""><a class="btn btn-lg btn-outline-light px-4"> Learn More <i class="fas fa-arrow-right ms-3"></i></a></p>
                                                </div>
                                                <div class="col-12 col-xl-5 d-none d-xl-inline">
                                                    <div class="w-100 award-images">
                                                        <img class="shadow" :src="'/assets/img/award/lesley-heaney.jpg'" alt="lesley-heaney" loading="lazy" />
                                                        <img class="shadow" :src="'/assets/img/award/Afroja_khan.jpg'" alt="Afroja_khan" loading="lazy" />
                                                        <img class="shadow" :src="'/assets/img/award/gemma-lee-award.jpg'" alt="gemma-lee-award" loading="lazy" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="each-award">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-start align-items-center d-xl-none gap-2 mb-5">
                                                    <img class="person-image rounded-circle" :src="'/assets/img/award/toy.png'" alt="toy">
                                                </div>
                                                <div class="col-xl-7 award-description">
                                                    <h1 class="h1-lg text-white text-shadow-sm">Teacher of the Year</h1>
                                                    <h2 class="text-white text-shadow-sm">Inspiring the Future</h2>
                                                    <p class="fs-4 text-white text-shadow-sm">Presented to an educator who has shown exemplary teaching, mentorship, and commitment to student success.</p>
                                                    <p class=""><a class="btn btn-lg btn-outline-light px-4"> Learn More <i class="fas fa-arrow-right ms-3"></i></a></p>
                                                </div>
                                                <div class="col-xl-5 d-none d-xl-inline">
                                                    <div class="w-100 award-images">
                                                        <img class="shadow" :src="'/assets/img/award/toy.png'" alt="toy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="each-award">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-start align-items-center d-xl-none gap-2 mb-5">
                                                    <img class="person-image rounded-circle" :src="'/assets/img/award/gemma-lee-award-02.jpg'" alt="gemma-lee-award-02">
                                                    <img class="person-image rounded-circle" :src="'/assets/img/award/gemma-lee-award-03.jpg'" alt="gemma-lee-award-03">
                                                    <img class="person-image rounded-circle" :src="'/assets/img/award/gemma-lee-award-04.jpg'" alt="gemma-lee-award-04">
                                                </div>
                                                <div class="col-xl-7 award-description">
                                                    <h1 class="h1-lg text-white text-shadow-sm">Keith Fletcher <br> Memorial Award</h1>
                                                    <h2 class="text-white text-shadow-sm">Excellence in Access Education</h2>
                                                    <p class="fs-4 text-white text-shadow-sm">Honors learners who have excelled in Access to Higher Education courses, named in memory of Keith Fletcher, a pioneer in this field.</p>
                                                    <p class=""><a class="btn btn-lg btn-outline-light px-4"> Learn More <i class="fas fa-arrow-right ms-3"></i></a></p>
                                                </div>
                                                <div class="col-xl-5 d-none d-xl-inline">
                                                    <div class="w-100 award-images">
                                                        <img class="shadow" :src="'/assets/img/award/gemma-lee-award-04.jpg'" alt="gemma-lee-award-04">
                                                        <img class="shadow" :src="'/assets/img/award/gemma-lee-award-03.jpg'" alt="gemma-lee-award-03">
                                                        <img class="shadow" :src="'/assets/img/award/gemma-lee-award-02.jpg'" alt="gemma-lee-award-02">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="each-award">
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-start align-items-center d-xl-none gap-2 mb-5">
                                                    <img class="person-image rounded-circle" :src="'/assets/img/award/elena.jpg'" alt="elena">
                                                </div>
                                                <div class="col-xl-7 award-description">
                                                    <h1 class="h1-lg text-white text-shadow-sm">Midwifery Student <br> of the Year</h1>
                                                    <h2 class="text-white text-shadow-sm">Compassion and Commitment</h2>
                                                    <p class="fs-4 text-white text-shadow-sm">Celebrates a midwifery student who has gone above and beyond in their training and care for others.</p>
                                                    <p class=""><a class="btn btn-lg btn-outline-light px-4"> Learn More <i class="fas fa-arrow-right ms-3"></i></a></p>
                                                </div>
                                                <div class="col-xl-5 d-none d-xl-inline">
                                                    <div class="w-100 award-images">
                                                        <img class="shadow" :src="'/assets/img/award/elena.jpg'" alt="elena">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    methods: {},
    mounted() {
    }
}
</script>
