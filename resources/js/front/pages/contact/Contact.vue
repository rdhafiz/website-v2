<template>
    <div class="contact-screen">

        <div class="breadcrumb-content w-100 animate__animated animate__fadeIn">
            <div class="breadcrumb-content-left">
                <span class="shadow-1"></span>
                <span class="shadow-2"></span>
                <span class="shadow-3"></span>
            </div>
            <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/contact.png?v=1.3)' }"></div>
            <div class="container-fluid">
                <div class="breadcrumb-left">
                  <div class="px-0 px-sm-5 w-100">
                    <div class="w-100 px-1 px-sm-5 position-relative z-2">
                      <h1 class="w-100 text-white animate__animated animate__fadeInLeft">
                        Contact Us
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
                          <router-link :to="{name: 'Contact'}" class="text-decoration-none text-white p-0 m-0">
                            Contact us
                          </router-link>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <section class="w-100 py-5 contact-screen-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-white d-flex justify-content-center align-items-center flex-wrap mb-5">
                        <div class="contact-box rounded-circle text-center d-flex justify-content-center align-items-center flex-column">
                            <div class="mb-2 fs-1"> <i class="fas fa-solid fa-map"></i> </div>
                            <div class="text-center mb-3 fs-4"> Current Address </div>
                            <div class="fs-6"> Mediprospects, Hawley House 5-7 High Street London E13 0AD, UK </div>
                        </div>
                        <div class="contact-box rounded-circle text-center d-flex justify-content-center align-items-center flex-column">
                            <div class="mb-2 fs-1"> <i class="fas fa-solid fa-phone"></i> </div>
                            <div class="text-center mb-3 fs-4"> Phone Number </div>
                            <div class="fs-6">
                                <div class="mb-3">
                                    <a href="tel:02084726060" class="text-decoration-none text-white"> 02084726060</a>
                                </div>
                                <div>
                                    *The office is open from <br>
                                    9:30-17:30 Mon-Fri <br>
                                    9:30-15:00 Sat
                                </div>
                            </div>
                        </div>
                        <div class="contact-box rounded-circle text-center d-flex justify-content-center align-items-center flex-column">
                            <div class="mb-2 fs-1"> <i class="fas fa-solid fa-envelope"></i> </div>
                            <div class="text-center mb-3 fs-4"> Email Address </div>
                            <div class="fs-6"><a href="mailto:info@mediprospects.ac.uk" class="text-decoration-none text-white">info@mediprospects.ac.uk</a> </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="get-in-touch-screen-container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="w-100 mb-4 d-inline-block">
                                        <h2>Contact Us</h2>
                                        <p>Your email address will not be published. Required fields are marked.</p>
                                    </div>
                                    <form @submit.prevent="contactNow()" class="w-100">
                                        <p v-if="error !== ''" class="alert alert-danger">{{ error }}</p>
                                        <p v-if="success !== ''" class="alert alert-success">{{ success }}</p>
                                        <div class="form-group mb-3">
                                            <label for="full-name" class="form-label fs-6"> Name <span class="ms-1 text-danger">*</span> </label>
                                            <input id="full-name" type="text" name="name" v-model="param.name" placeholder="Enter your name" class="form-control px-3 py-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email-address" class="form-label fs-6"> Email <span class="ms-1 text-danger">*</span> </label>
                                            <input id="email-address" type="email" name="email" v-model="param.email" placeholder="Enter your email address" class="form-control px-3 py-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="subject" class="form-label fs-6"> Subject <span class="ms-1 text-danger">*</span> </label>
                                            <input id="subject" type="text" name="subject" v-model="param.subject" placeholder="Enter your subject" class="form-control px-3 py-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="message" class="form-label fs-6"> Message <span class="ms-1 text-danger">*</span> </label>
                                            <textarea id="message" name="message" v-model="param.message" cols="30" rows="7" required autocomplete="off" class="form-textarea px-3 py-2" placeholder="Enter your message"></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="town/city" class="form-label fs-6"> Town/City <span class="ms-1 text-danger">*</span> </label>
                                            <input id="town/city" type="text" name="town/city" v-model="param.city" placeholder="Enter your town/city" class="form-control px-3 py-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="contact_number" class="form-label fs-6"> Phone Number <span class="ms-1 text-danger">*</span> </label>
                                            <input id="contact_number" type="text" name="contact_number" v-model="param.contact_number" placeholder="Enter your phone number" class="form-control px-3 py-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="how-did-you-find-out-about-us" class="form-label fs-6"> How did you find out about us? <span class="ms-1 text-danger">*</span> </label>
                                            <select id="how-did-you-find-out-about-us" name="know_us" v-model="param.know_us" class="form-select px-3 py-3" required autocomplete="off">
                                                <option value="--">--</option>
                                                <option value="Have used Mediprospects Previously">Have used Mediprospects Previously</option>
                                                <option value="Search Engine">Search Engine</option>
                                                <option value="Word of Mouth">Word of Mouth</option>
                                                <option value="Email">Email</option>
                                                <option value="Advertisement">Advertisement</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3 d-flex justify-content-end">
                                            <div class="g-recaptcha" data-sitekey="6LcxyfMfAAAAAHSWxtSr_o9QMbD9Fi5e_qxlxEQ-"></div>
                                        </div>
                                        <div class="form-group mb-3 text-end">
                                            <button type="submit" class="btn btn-theme py-3 px-5">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
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

import axios from "axios";

export default {
    data() {
        return {
            error: '',
            success: '',
            param: {
                name: '',
                email: '',
                subject: '',
                message: '',
                city: '',
                contact_number: '',
                know_us: '',
                recaptcha_token: '',
            }
        }
    },
    methods: {
        contactNow() {
            this.error = ''
            this.success = ''
            this.param.recaptcha_token = grecaptcha.getResponse();
            if (this.param.recaptcha_token !== '') {
                axios.post('/action/contact-us', this.param, {
                    headers: {
                        'Content-Type': 'application/json',
                    },
                }).then(response => {
                    const res = response.data;
                    if (res.success !== undefined) {
                        this.success = res.msg
                        setTimeout(() => {
                            location.reload()
                        }, 1000)
                    } else if (res.error !== undefined) {
                        this.error = res.error
                    }
                })
            }
        }
    },
    mounted() {
        const script = document.createElement('script');
        script.src = "https://www.google.com/recaptcha/api.js";
        script.async = true;
        script.defer = true;
        document.head.appendChild(script);
    }
}
</script>
