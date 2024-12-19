<template>
    <div class="contact-screen">

        <div class="breadcrumb-content w-100 animate__animated animate__fadeIn">
            <div class="breadcrumb-content-left">
                <span class="shadow-1"></span>
                <span class="shadow-2"></span>
                <span class="shadow-3"></span>
            </div>
            <div class="breadcrumb-content-right" :style="{ backgroundImage: 'url(/assets/img/breadcrumb/contact.png)' }"></div>
            <div class="container-fluid">
                <div class="breadcrumb-left">
                  <div class="w-100 px-5">
                    <div class="w-100 px-5 position-relative z-2">
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
                                <div class="col-md-5">
                                    <div class="w-100 mb-4 d-inline-block">
                                        <h2>Contact Us</h2>
                                        <p>Your email address will not be published. Required fields are marked.</p>
                                    </div>
                                    <form class="w-100">
                                        <div class="form-group mb-3">
                                            <label for="full-name" class="form-label fs-6"> Name <span class="ms-1 text-danger">*</span> </label>
                                            <input id="full-name" type="text" name="name" placeholder="Enter your name" class="form-control p-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email-address" class="form-label fs-6"> Email <span class="ms-1 text-danger">*</span> </label>
                                            <input id="email-address" type="email" name="email" placeholder="Enter your email address" class="form-control p-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="subject" class="form-label fs-6"> Subject <span class="ms-1 text-danger">*</span> </label>
                                            <input id="subject" type="text" name="subject" placeholder="Enter your subject" class="form-control p-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="message" class="form-label fs-6"> Message <span class="ms-1 text-danger">*</span> </label>
                                            <textarea id="message" name="message" cols="30" rows="7" required autocomplete="off" class="form-textarea p-3" placeholder="Enter your message"></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="town/city" class="form-label fs-6"> Town/City <span class="ms-1 text-danger">*</span> </label>
                                            <input id="town/city" type="text" name="town/city" placeholder="Enter your town/city" class="form-control p-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone-number" class="form-label fs-6"> Phone Number <span class="ms-1 text-danger">*</span> </label>
                                            <input id="phone-number" type="text" name="phone_number" placeholder="Enter your phone number" class="form-control p-3" required autocomplete="off" />
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="how-did-you-find-out-about-us" class="form-label fs-6"> How did you find out about us? <span class="ms-1 text-danger">*</span> </label>
                                            <select id="how-did-you-find-out-about-us" name="how_did_you_find_out_about_us" class="form-select p-3" required autocomplete="off">
                                                <option value="--">--</option>
                                                <option value="Have used Mediprospects Previously">Have used Mediprospects Previously</option>
                                                <option value="Search Engine">Search Engine</option>
                                                <option value="Word of Mouth">Word of Mouth</option>
                                                <option value="Email">Email</option>
                                                <option value="Advertisement">Advertisement</option>
                                                <option value="Other">Other</option>
                                            </select>
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

export default {
    data() {
        return {}
    },
    methods: {},
    async mounted() {
    }
}
</script>
