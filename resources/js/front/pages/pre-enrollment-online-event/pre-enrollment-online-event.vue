<template>

    <br><br><br><br>

    <section class="w-100 py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center px-lg-5 w-100">
                <div class="col-12 col-lg-7">
                    <form @submit.prevent="applyNow()" class="w-100">
                        <h2 class="mb-4 text-center">
                            Online Open Events Pre Enrolment Form
                        </h2>
                        <div class="border p-4 p-md-5 shadow">
                            <p v-if="error !== ''" class="alert alert-danger">{{ error }}</p>
                            <p v-if="success !== ''" class="alert alert-success">{{ success }}</p>
                            <div class="mb-3">
                                <label for="course_name" class="form-label"> Course You Want to Attend <span class="text-danger">*</span> </label>
                                <select name="course_name" id="course_name" v-model="param.course_name" class="form-select bg-secondary-subtle py-2 px-3" required autocomplete="off">
                                    <option value="">--click here to select a course--</option>
                                    <option value="access-to-he-nursing-midwifery">Access to HE Nursing &amp; Midwifery</option>
                                    <option value="access-to-he-nursing">Access to HE Nursing</option>
                                    <option value="access-to-he-health-professions">Access to HE Health Professions</option>
                                    <option value="access-to-he-health-sciences">Access to HE Health Sciences</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="time_slot" class="form-label"> Select A Time Slot Below <span class="text-danger">*</span> </label>
                                <select name="time_slot" id="time_slot" v-model="param.time_slot" class="form-select bg-secondary-subtle py-2 px-3" required autocomplete="off">
                                    <option value="">--click here to select a time slot--</option>
                                    <option value="Wednesday 18th December 2025">Wednesday 18th December 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 8th January 2025">Wednesday 8th January 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 15th January 2025">Wednesday 15th January 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 22nd January 2025">Wednesday 22nd January 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 29th January 2025">Wednesday 29th January 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 5th February 2025">Wednesday 5th February 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 12th February 2025">Wednesday 12th February 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 19th February 2025">Wednesday 19th February 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 26th February 2025">Wednesday 26th February 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 5th March 2025">Wednesday 5th March 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 12th March 2025">Wednesday 12th March 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 19th March 2025">Wednesday 19th March 2025 - (6:30pm - 7:30pm)</option>
                                    <option value="Wednesday 26th March 2025">Wednesday 26th March 2025 - (6:30pm - 7:30pm)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label"> Name <span class="text-danger">*</span> </label>
                                <input id="name" type="text" name="name" v-model="param.name" class="form-control bg-secondary-subtle py-2 px-3" placeholder="Enter your Name" required autocomplete="off"/>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"> Email <span class="text-danger">*</span> </label>
                                <input id="email" type="email" name="email" v-model="param.email" class="form-control bg-secondary-subtle py-2 px-3" placeholder="Enter your Email" required autocomplete="off"/>
                            </div>
                            <div class="mb-3">
                                <label for="contact_number" class="form-label"> Phone Number <span class="text-danger">*</span> </label>
                                <input id="contact_number" type="text" name="contact_number" v-model="param.contact_number" class="form-control bg-secondary-subtle py-2 px-3" placeholder="Enter your Phone Number" required autocomplete="off"/>
                            </div>
                            <div class="mb-3 d-flex justify-content-end">
                                <div class="g-recaptcha" data-sitekey="6LcZiaMqAAAAANeSRNkTqgcZqVv4N-Rmw4Nlh5xx"></div>
                            </div>
                            <div class="mb-3 d-flex justify-content-end">
                                <button type="submit" class="btn btn-theme py-2 px-3">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            error: '',
            success: '',
            param: {
                course_name: '',
                time_slot: '',
                name: '',
                email: '',
                contact_number: '',
                recaptcha_token: '',
            },
        }
    },
    mounted() {
        const script = document.createElement('script');
        script.src = "https://www.google.com/recaptcha/api.js";
        script.async = true;
        script.defer = true;
        document.head.appendChild(script);
    },
    methods: {
        applyNow() {
            this.error = ''
            this.success = ''
            this.param.recaptcha_token = grecaptcha.getResponse();
            if (this.param.recaptcha_token !== '') {
                axios.post('/action/pre-enrollment-online-event', this.param, {
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
    }
}

</script>
