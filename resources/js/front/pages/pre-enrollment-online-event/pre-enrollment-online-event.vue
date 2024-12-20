<template>

    <br><br><br><br>

    <section class="w-100 py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center px-lg-5 w-100">
                <div class="col-12 col-lg-7">
                    <form method="POST" action="https://httpbin.org/post" class="w-100">
                        <h2 class="mb-4 text-center">
                            Online Open Events Pre Enrolment Form
                        </h2>
                        <div class="border p-4 p-md-5 shadow">
                            <div class="mb-3">
                                <label for="course-you-want-to-attend" class="form-label"> Course You Want to Attend <span class="text-danger">*</span> </label>
                                <select name="course_you_want_to_attend" id="course-you-want-to-attend" class="form-select bg-secondary-subtle py-2 px-3" required autocomplete="off">
                                    <option value="">--click here to select a course--</option>
                                    <option value="access-to-he-nursing-midwifery">Access to HE Nursing &amp; Midwifery</option>
                                    <option value="access-to-he-nursing">Access to HE Nursing</option>
                                    <option value="access-to-he-health-professions">Access to HE Health Professions</option>
                                    <option value="access-to-he-health-sciences">Access to HE Health Sciences</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="select-a-time-clot-below" class="form-label"> Select A Time Slot Below <span class="text-danger">*</span> </label>
                                <select name="select_a_time_clot_below" id="select-a-time-clot-below" class="form-select bg-secondary-subtle py-2 px-3" required autocomplete="off">
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
                                <input id="name" type="text" name="name" class="form-control bg-secondary-subtle py-2 px-3" placeholder="Enter your Name" required autocomplete="off" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"> Email <span class="text-danger">*</span> </label>
                                <input id="email" type="email" name="email" class="form-control bg-secondary-subtle py-2 px-3" placeholder="Enter your Email" required autocomplete="off" />
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label"> Phone Number <span class="text-danger">*</span> </label>
                                <input id="phone" type="text" name="phone" class="form-control bg-secondary-subtle py-2 px-3" placeholder="Enter your Phone Number" required autocomplete="off" />
                            </div>
                            <div class="mb-3">
                                <div class="g-recaptcha" :data-sitekey="siteKey"></div>
                            </div>
                            <button type="submit" class="btn btn-theme py-2 px-3">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</template>

<script>

export default {
    data(){
        return {
            siteKey: '6LephJ4qAAAAAGYqiW7vrlosbbYojCq0MLA3gcJb',
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

    }
}

</script>
