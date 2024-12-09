<template>
    <div class="contact-screen">

        <div class="breadcrumb-content w-100 animate__animated animate__fadeIn" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/breadcrumb.jpg)' }">
            <div class="breadcrumb-content-left"></div>
            <div class="container">
                <div class="breadcrumb-left">
                    <h1 class="w-100 text-white animate__animated animate__fadeInLeft">
                        Contact Us
                    </h1>
                    <ul class="breadcrumb w-100 d-flex justify-content-start align-items-center fs-4 animate__animated animate__fadeInLeft">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)" class="text-decoration-none text-white p-0 m-0">
                                Home
                            </a>
                        </li>
                        <li class="text-white mx-3">
                            /
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)" class="text-decoration-none text-white p-0 m-0">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="w-100 py-5 contact-screen-container">
            <div class="container">
                <div class="d-flex justify-content-around align-items-center text-white flex-wrap">
                    <div class="contact-box text-center d-flex justify-content-center align-items-center flex-column p-5">
                        <div class="mb-2 fs-1"> <i class="fas fa-solid fa-map"></i> </div>
                        <div class="text-center mb-3 fs-4"> Current Address </div>
                        <div class="fs-6"> Mediprospects, Hawley House 5-7 High Street London E13 0AD, UK </div>
                    </div>
                    <div class="contact-box text-center d-flex justify-content-center align-items-center flex-column p-5">
                        <div class="mb-2 fs-1"> <i class="fas fa-solid fa-phone"></i> </div>
                        <div class="text-center mb-3 fs-4"> Phone Number </div>
                        <div class="fs-6">  <a href="tel:02084726060" class="text-decoration-none text-white"> 02084726060 </a> </div>
                    </div>
                    <div class="contact-box text-center d-flex justify-content-center align-items-center flex-column p-5">
                        <div class="mb-2 fs-1"> <i class="fas fa-solid fa-envelope"></i> </div>
                        <div class="text-center mb-3 fs-4"> Email Address </div>
                        <div class="fs-6"><a href="mailto:info@mediprospects.ac.uk" class="text-decoration-none text-white">info@mediprospects.ac.uk</a> </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 w-100 get-in-touch-screen-container bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title">
                            How should we get in touch?
                        </div>
                        <div class="mt-1">
                            <div class="maps-wrapper w-100">
                                <iframe class="iframe-container w-100" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=Mediprospects%20Hawley%20House%2C%205-7%20High%20St%2C%20London%20E13%200AD%2C%20United%20Kingdom&zoom=10&maptype=roadmap"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="w-100">
                            <div class="form-group mb-2">
                                <label for="full-name" class="form-label fs-4"> Name <span class="ms-1 text-danger">*</span> </label>
                                <input id="full-name" type="text" name="name" placeholder="Enter your name" class="form-control px-3 py-2" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="email-address" class="form-label fs-4"> Email Address <span class="ms-1 text-danger">*</span> </label>
                                <input id="email-address" type="email" name="email" placeholder="Enter your email address" class="form-control px-3 py-2" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="phone-number" class="form-label fs-4"> Mobile / Cell Phone Number <span class="ms-1 text-danger">*</span> </label>
                                <input id="phone-number" type="text" name="phone_number" placeholder="Enter your phone number" class="form-control px-3 py-2" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="company" class="form-label fs-4"> Company <span class="ms-1 text-danger">*</span> </label>
                                <input id="company" type="text" name="company_name" placeholder="Enter your company name" class="form-control px-3 py-2" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="job-title" class="form-label fs-4"> Job Title <span class="ms-1 text-danger">*</span> </label>
                                <input id="job-title" type="text" name="job_title" placeholder="Enter your job title" class="form-control px-3 py-2" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-2">
                                <label for="agree" class="form-check-label">
                                    <input type="checkbox" name="agree" id="agree" class="form-checkbox me-2" />
                                    I agree to receive about canonical products and services. By submitting this form, i confirm that i have read and agree to
                                    <a href="javascript:void(0)" class="text-decoration-none text-link">
                                        canonical privacy & policy
                                    </a>
                                </label>
                            </div>
                            <div class="w-100">
                                <button type="submit" class="btn btn-theme px-4 py-2">
                                    Submit
                                </button>
                            </div>
                        </form>
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
