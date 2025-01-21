<template>

    <br><br><br><br>

    <section class="w-100 py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center px-lg-5 w-100">
                <div class="col-12 col-lg-7">
                    <form @submit.prevent="applyNow()" class="w-100">
<!--                        <h2 class="mb-4 text-center">
                            Apply for Interest
                        </h2>-->
                        <div class="border p-4 p-md-5 shadow">
                            <p v-if="error !== ''" class="alert alert-danger">{{ error }}</p>
                            <p v-if="success !== ''" class="alert alert-success">{{ success }}</p>
                            <div class="mb-3">
                                <label for="course_name" class="form-label"> Course You are Interested to <span class="text-danger">*</span> </label>
                                <select name="course_name" id="course_name" v-model="param.course_name" class="form-select bg-secondary-subtle py-3 px-3" required autocomplete="off">
                                    <option value="">--select a course--</option>
                                    <option value="access-to-he-nursing-midwifery">Access to HE Nursing & Midwifery</option>
                                    <option value="access-to-he-nursing">Access to HE Nursing</option>
                                    <option value="access-to-he-health-professions">Access to HE Health Professions</option>
                                    <option value="access-to-he-health-science">Access to HE Health Science</option>
                                    <option value="early-years-educator">Diploma for Working in the Early Years Sector (Early Years Educator)</option>
                                    <option value="teaching-and-learning">Diploma in Supporting Teaching and Learning</option>
                                    <option value="adult-care">Adult Care</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label"> Name <span class="text-danger">*</span> </label>
                                <input id="name" type="text" name="name" v-model="param.name" class="form-control bg-secondary-subtle py-3 px-3" placeholder="Enter your Name" required autocomplete="off"/>
                            </div>
                            <div class="mb-3">
                                <label for="contact_number" class="form-label"> Phone Number <span class="text-danger">*</span> </label>
                                <input id="contact_number" type="text" name="contact_number" v-model="param.contact_number" class="form-control bg-secondary-subtle py-3 px-3" placeholder="Enter your Phone Number" required autocomplete="off"/>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"> Email <span class="text-danger">*</span> </label>
                                <input id="email" type="email" name="email" v-model="param.email" class="form-control bg-secondary-subtle py-3 px-3" placeholder="Enter your Email" required autocomplete="off"/>
                            </div>
                            <div class="mb-3">
                                <label for="postcode" class="form-label"> Postcode</label>
                                <input type="text" class="form-control bg-secondary-subtle py-3 px-3" name="postcode" placeholder="Postcode" v-model="param.postcode">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Preferred Method of Communication</label>
                                <select class="form-control bg-secondary-subtle py-3 px-3" ref="preferred_communication_method" name="preferred_communication_method" id="preferred_communication_method" v-model="param.preferred_communication_method">
                                    <option value="">--select a communication method--</option>
                                    <option value="WhatsApp"> WhatsApp</option>
                                    <option value="Email"> Email</option>
                                    <option value="Call"> Call</option>
                                </select>
                            </div>
                            <div class="mb-3 d-flex justify-content-end">
                                <div class="g-recaptcha" data-sitekey="6LcxyfMfAAAAAHSWxtSr_o9QMbD9Fi5e_qxlxEQ-"></div>
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
                full_course_name: '',
                name: '',
                email: '',
                contact_number: '',
                postcode: '',
                preferred_communication_method: '',
                recaptcha_token: '',
            },
            courseMapping: {
                'access-to-he-nursing-midwifery': 'Access to HE Nursing & Midwifery',
                'access-to-he-nursing': 'Access to HE Nursing',
                'access-to-he-health-professions': 'Access to HE Health Professions',
                'access-to-he-health-science': 'Access to HE Health Science',
                'early-years-educator': 'Diploma for Working in the Early Years Sector (Early Years Educator)',
                'teaching-and-learning': 'Diploma in Supporting Teaching and Learning',
                'adult-care': 'Adult Care',
            }
        }
    },
    created() {
        const courseName = window.location.pathname.split('/')[2];
        if (courseName) {
            this.param.course_name = courseName;
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
            this.param.full_course_name = this.courseMapping[this.param.course_name] || '';
            this.param.recaptcha_token = grecaptcha.getResponse();
            if (this.param.recaptcha_token !== '') {
                axios.post('/action/apply-for-interest', this.param, {
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
        },
    }
}

</script>
