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

        <div class="py-5">
            <img :src="'/assets/img/contact/background.jpg'" class="background-cover" alt="background"/>
        </div>

        <section class="py-5 w-100 contact-screen-container bg-white">
            <div class="container">
                <div class="large-title mb-5">
                    Useful contact details
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Contact Information for general enquiries
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="description">
                                    <div class="fw-semibold d-block mb-2">
                                        Address
                                    </div>
                                    <div class="my-3 fs-4">
                                        Hawley House
                                    </div>
                                    <div class="my-3 fs-4">
                                        5-7 High Street
                                    </div>
                                    <div class="my-3 fs-4">
                                        London E13 0AD, UK
                                    </div>
                                    <div class="fw-semibold d-block my-3">
                                        Phone
                                    </div>
                                    <div class="my-3 fs-4">
                                        02084726060
                                    </div>
                                    <div class="my-3 fs-4">
                                        *The office is open from
                                    </div>
                                    <div class="my-3 fs-4">
                                        9:30-17:30 Mon-Fri
                                    </div>
                                    <div class="my-3 fs-4">
                                        9:30-15:00 Sat
                                    </div>
                                    <div class="fw-semibold d-block my-3">
                                        Email
                                    </div>
                                    <div class="my-3 fs-4">
                                        info@mediprospects.ac.uk
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Useful contact information for current students
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="description">
                                    <div class="fw-semibold d-block mb-2">
                                        Address
                                    </div>
                                    <div class="my-3 fs-4">
                                        Mediprospects
                                    </div>
                                    <div class="my-3 fs-4">
                                        Hawley House
                                    </div>
                                    <div class="my-3 fs-4">
                                        5-7 High Street
                                    </div>
                                    <div class="my-3 fs-4">
                                        London E13 0AD, UK
                                    </div>
                                    <div class="fw-semibold d-block my-3">
                                        Phone
                                    </div>
                                    <div class="my-3 fs-4">
                                        02084726060
                                    </div>
                                    <div class="my-3 fs-4">
                                        *The office is open from
                                    </div>
                                    <div class="my-3 fs-4">
                                        9:30-17:30 Mon-Fri
                                    </div>
                                    <div class="my-3 fs-4">
                                        9:30-15:00 Sat
                                    </div>
                                    <div class="fw-semibold d-block my-3">
                                        Email
                                    </div>
                                    <div class="my-3 fs-4">
                                        info@mediprospects.ac.uk
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    </div>
                    <div class="col-lg-6">
                        <form class="w-100">
                            <div class="form-group mb-4">
                                <label for="first-name" class="form-label"> First Name <span class="ms-1 text-danger">*</span> </label>
                                <input id="first-name" type="text" name="first_name" placeholder="Enter your first name" class="form-control px-4 py-3" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="last-name" class="form-label"> Last Name <span class="ms-1 text-danger">*</span> </label>
                                <input id="last-name" type="text" name="last_name" placeholder="Enter your last name" class="form-control px-4 py-3" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="company" class="form-label"> Company <span class="ms-1 text-danger">*</span> </label>
                                <input id="company" type="text" name="company_name" placeholder="Enter your company name" class="form-control px-4 py-3" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="job-title" class="form-label"> Job Title <span class="ms-1 text-danger">*</span> </label>
                                <input id="job-title" type="text" name="job_title" placeholder="Enter your job title" class="form-control px-4 py-3" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="email-address" class="form-label"> Email Address <span class="ms-1 text-danger">*</span> </label>
                                <input id="email-address" type="email" name="email" placeholder="Enter your email address" class="form-control px-4 py-3" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="phone-number" class="form-label"> Mobile / Cell Phone Number <span class="ms-1 text-danger">*</span> </label>
                                <input id="phone-number" type="text" name="phone_number" placeholder="Enter your phone number" class="form-control px-4 py-3" required autocomplete="off" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="agree" class="form-check-label">
                                    <input type="checkbox" name="agree" id="agree" class="form-checkbox me-2" />
                                    I agree to receive about canonical products and services. By submitting this form, i confirm that i have read and agree to
                                    <a href="javascript:void(0)" class="text-decoration-none text-link">
                                        canonical privacy & policy
                                    </a>
                                </label>
                            </div>
                            <div class="w-100">
                                <button type="submit" class="btn btn-theme px-5 py-3">
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
