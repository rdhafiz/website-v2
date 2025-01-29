<template>

    <section class="course-details-cover w-100">
        <div class="w-100 px-0 px-md-5">
            <div class="w-100 px-2 px-md-5">
                <div class="container-fluid py-5">
                    <div class="course-details-title mb-3 fw-bold">
                        NCFE CACHE Level 3 Diploma in Supporting Teaching and Learning
                    </div>
                    <router-link :to="{name: 'ApplyForInterest', params: {course: 'teaching-and-learning'}}"
                                 class="btn px-3 py-2 btn-theme me-2">Learn More
                    </router-link>
                    <router-link :to="{name: 'ApplyForInterest', params: {course: 'teaching-and-learning'}}"
                                 class="btn px-3 py-2 btn-theme">Apply Now
                    </router-link>
                </div>
            </div>
        </div>
    </section>

    <section class="w-100 overview">
        <div class="w-100 px-0 px-md-5">
            <div class="w-100 px-2 px-md-5">
                <div class="container py-5">

                    <div class="w-100">
                        <h2 class="text-secondary fw-bold">Courses</h2>
                        <h5 class="text-secondary fw-normal">
                            <strong>New course starting spring 2025</strong>
                        </h5>
                    </div>

                    <div class="w-100 mt-5">
                        <h2 class="text-secondary fw-bold">Location: Online learning</h2>
                        <h5 class="text-secondary fw-normal">
                            Sessions are taught face-to-face at our training centre in Plaistow. Unless you are exempt
                            you will need to attend at least half of the face-to-face sessions.
                            <br><br>
                            You will be issued with a Mediprospects Office 365 account and will be able to attend the
                            balance of your course through live online lessons on Microsoft Teams.
                            <br><br>
                            You will attend 44 sessions, 4 hours a week, in addition you will need to allocate around 10
                            hours per week for home study and portfolio building.
                        </h5>
                    </div>

                    <div class="w-100 mt-5">
                        <h2 class="text-secondary fw-bold">Work experience</h2>
                        <h5 class="text-secondary fw-normal">
                            Work experience is an essential part of the course. You will need to attend at least 175
                            hours over the period of the course either employed or as a volunteer in a childcare
                            setting.
                        </h5>
                    </div>

                    <div class="w-100 mt-5">
                        <h2 class="text-secondary fw-bold">Entry Requirements</h2>
                        <h5 class="text-secondary fw-normal">
                            <strong class="p-0 fs-5">Minimum age: 19</strong><br><br>
                            <span class="p-0 fs-5">
                                <strong>Safeguarding:</strong> You will need to agree to a clearance check through the Disclosure and Barring Service prior to starting the course.
                                <br><br>
                                <strong>Previous experience:</strong> A level 2 early years qualification and/or experience in the sector is helpful but not essential. You will need to demonstrate enthusiasm for the subject and a commitment to meet the course requirements.
                                <br><br>
                                <strong>Level 1 English or above or willing to study towards it.</strong>
                                <br><br>
                                You will need to have written, reading and spoken English at a minimum of Level 1. If you have not already achieved this, we can support you while you study for your main qualification.
                                <br><br>
                            </span>
                            <span class="d-block fw-normal">
                                <router-link :to="{name: 'EnglishMaths'}"
                                             class="text-decoration-none text-theme d-block">
                                    How to find an English course?
                                </router-link>
                            </span>
                        </h5>
                    </div>

                    <div class="w-100 mt-5">
                        <h2 class="text-secondary fw-bold">Course Credits</h2>
                        <h5 class="text-secondary fw-normal">
                            53 credits
                        </h5>
                    </div>

                    <div class="w-100 mt-5">
                        <h2 class="text-secondary fw-bold">Course Fees</h2>
                        <h5 class="text-secondary fw-normal">
                            The course fee is £2,225. The course is eligible for Advanced Learner Loan. For more
                            information follow the link
                            <a class="text-decoration-underline" target="_blank"
                               href="https://www.gov.uk/advanced-learner-loan">here</a>.
                        </h5>
                    </div>

                    <div class="w-100 mt-5">
                        <h2 class="text-secondary fw-bold">Course content</h2>
                        <h5 class="text-secondary fw-normal">
                            This qualification provides learners with an in-depth understanding of the knowledge and
                            skills needed when working directly with children and young people in school and college
                            environments.
                            <br><br>
                            It covers all aspects of specialist support, including: planning; delivering and reviewing
                            assessment strategies to support learning alongside the teacher; bilingual support; special
                            needs support; and personal development and reflective practice.
                            <br><br>
                            This NCFE CACHE Level 3 Award in Supporting Teaching and Learning qualification is ideal for
                            those looking to pursue a career as a teaching assistant.
                            <br><br>
                            All sessions are taught by experienced trainers who are subject specialists. You will be
                            joining other learners who are keen to start learning and working as teaching assistants.
                            You will have access to online resources, which will form part of the weekly teaching
                            sessions. You are also encouraged to use these resources outside of class time to expand
                            your knowledge and understanding.
                        </h5>
                    </div>

                    <div class="mt-5">
                        <h2 class="text-secondary fw-bold"> You will study 16 mandatory units </h2>
                        <div id="table-units" class="table-responsive">
                            <table class="table table-borderless table-striped">
                                <tr>
                                    <th>Unit Number</th>
                                    <th>Regulated Unit Number</th>
                                    <th>Unit Title</th>
                                    <th>Level</th>
                                    <th>Credit</th>
                                </tr>
                                <tr>
                                    <td>STL3C1</td>
                                    <td>T/616/5878</td>
                                    <td>Schools and colleges as organisations</td>
                                    <td>3</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>STL3C2</td>
                                    <td>A/616/5879</td>
                                    <td>Support health and safety in a learning environment</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>STL3C3</td>
                                    <td>M/616/5880</td>
                                    <td>Understand how to safeguard children and young people</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>STL3C4</td>
                                    <td>T/616/5881</td>
                                    <td>Develop professional relationships with children, young people and adults</td>
                                    <td>3</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>STL3C5</td>
                                    <td>A/616/5882</td>
                                    <td>Understand how children and young people develop</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>STL3C6</td>
                                    <td>F/616/5883</td>
                                    <td>Support positive behaviour in children and young people</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>STL3C7</td>
                                    <td>J/616/5884</td>
                                    <td>Support children and young people during learning activities</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>STL3C8</td>
                                    <td>L/616/5885</td>
                                    <td>Support English and maths skills</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>STL3C9</td>
                                    <td>M/616/5958</td>
                                    <td>Support the use of ICT in the learning environment</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>STL3C10</td>
                                    <td>J/616/5965</td>
                                    <td>Support assessment for learning</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>STL3C11</td>
                                    <td>L/616/5966</td>
                                    <td>Engage in personal and professional development</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>STL3D12</td>
                                    <td>D/616/5969</td>
                                    <td>Support children and young people’s speech, language and communication</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>STL3D13</td>
                                    <td>Y/616/5971</td>
                                    <td>Understand how to support bilingual learners</td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>STL3D14</td>
                                    <td>A/616/5977</td>
                                    <td>Understand how to support learning of children and young people with special
                                        educational needs and disabilities
                                    </td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>STL3D15</td>
                                    <td>F/616/5978</td>
                                    <td>Support children and young people during transitions</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>STL3D16</td>
                                    <td>J/616/5979</td>
                                    <td>Support the role of play, leisure and extra-curricular activities for children
                                        and young people
                                    </td>
                                    <td>3</td>
                                    <td>3</td>
                                </tr>
                            </table>
                        </div>

                        <div class="w-100 mt-5">
                            <h2 class="text-secondary fw-bold">Work placement</h2>
                            <h5 class="text-secondary fw-normal">
                                Work placement is an integral part of the course and without it you will be unable to
                                complete the course. You will draw on workplace experience during taught sessions and
                                apply what you have learned during classes in your work practice. Assignments draw on
                                your work experience and assessment includes observation in the workplace. If you are
                                struggling with finding a work placement our team may be able to help you.
                            </h5>
                        </div>

                        <div class="w-100 mt-5">
                            <h2 class="text-secondary fw-bold">Assessment</h2>
                            <h5 class="text-secondary fw-normal">
                                Course work is assessed and includes coursework and written assignments as well as
                                assessment of your practical skills in a childcare setting.
                            </h5>
                        </div>

                        <div class="w-100 mt-5">
                            <h2 class="text-secondary fw-bold">Next steps</h2>
                            <h5 class="text-secondary fw-normal">
                                At the end of the course, you may progress to work in education roles providing support
                                for students in primary, secondary or special schools and colleges.
                            </h5>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </section>

</template>
<style>
#table-units tr th {
    font-size: 1.5rem;
    --bs-text-opacity: 1;
    color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

#table-units tr td {
    font-size: 1.25rem;
    --bs-text-opacity: 1;
    color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}
</style>

<script>

export default {
    data() {
        return {}
    },
    mounted() {
    },
    methods: {}
}

</script>
