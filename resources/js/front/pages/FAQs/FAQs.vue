<template>

    <br><br><br><br>

    <section v-if="course_type === 'access'" class="w-100 py-5 faq_screen">
        <div class="container">
            <div class="faqs-title mb-3 fw-bold"> Frequently Asked Questions </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. Are there any entry requirements for the access course?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            To join our course, you will need GCSE English Grade C/4 or above or Functional Skills Level
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. How many credits of science are available?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            Access to HE Health Science – 39 Credits.
                            <br><br>
                            Access to Nursing, Access to HE Nursing & Midwifery, Access to HE Health Professions - 24
                            Credits.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. Can I get funding to cover the whole cost of the Access to HE course?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            If you live in the UK, you may be entitled to a non-means-tested Student Loan to cover the
                            course's entire cost. This loan and any interest are written off once you complete your
                            degree. Read more here:
                            <a href="https://www.gov.uk/advanced-learner-loan" class="text-decoration-none link"
                               target="_blank">https://www.gov.uk/advanced-learner-loan</a>.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4. What funding is available for me to study for a degree?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            <a href="https://www.gov.uk/student-finance" class="text-decoration-none link"
                               target="_blank">
                                www.gov.uk/student-finance.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5. When does the course begin?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            We have 4 courses starting in Spring 2025. You can study on Tuesdays from 9.30 – 4pm, or
                            Saturdays from 9.30 – 4pm, or Tuesdays and Thursday evenings from 6.30 – 9.30pm. Courses start in spring and Autumn each year.
                        </div>
                    </div>
                </div>
<!--                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">-->
<!--                    <h2 class="accordion-header">-->
<!--                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"-->
<!--                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">-->
<!--                            6. When are the following courses if I can’t join the September 24 course?-->
<!--                        </button>-->
<!--                    </h2>-->
<!--                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">-->
<!--                        <div class="accordion-body bg-light border-top px-5">-->
<!--                            September 2025.-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            6. How long does the course last?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            Approximately 9 months.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            7. How will the course be assessed? Are there any exams?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            There are a range of different assessments to prepare you for university, reports, essays,
                            tests, written questions & answers and posters.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            8. Do I need to have good computer skills?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            We will support you with the use of Teams, you will need a fairly good understanding of IT,
                            use of the internet, sending emails, attaching documents to emails, using a spellchecker for
                            example. If you don’t have fairly good IT Skills, we recommend you take a beginners course
                            with your local college or Adult Education Centre.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            9. Will I get help to apply for university?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            Absolutely, we will take you through the whole process. We are a registered UCAS Centre and
                            will submit your application along with a reference from us, electronically.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            10. Will I have to travel to lessons?
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            No, all of our lessons are delivered live online by our team of trainers.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            11. Can I apply for the course if I need additional support with my studies?
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            You will need a good standard of English to achieve the grades required for entry to
                            university. If you need additional support with spoken and written English due it being a
                            second or other language for you, we will signpost you to organisations providing support.
                            For learners with learning differences, including Dyslexia, Dyspraxia, Autism, ADHD and
                            other hidden disabilities, we make reasonable adjustments to support you.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThirteen" aria-expanded="false"
                                aria-controls="collapseThirteen">
                            12. How long is the Access course valid for?
                        </button>
                    </h2>
                    <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            The majority of universities ask for you to demonstrate study within the last 3 to 5 years.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFourteen" aria-expanded="false"
                                aria-controls="collapseFourteen">
                            13. Is there an age limit to studying a Health-related degree at university?
                        </button>
                    </h2>
                    <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            Not in the UK, but you can check with your chosen university to be sure.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                            14. What will I study in the Access course
                        </button>
                    </h2>
                    <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            An exciting range of science, sociology, psychology and skills development units are
                            available.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                            15. How long does a degree take to complete?
                        </button>
                    </h2>
                    <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            Usually 3 years full-time and 4 years part-time.
                        </div>
                    </div>
                </div>

                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeventeen" aria-expanded="false"
                                aria-controls="collapseSeventeen">
                            16. Will I get support with learning differences such as Dyslexia at university?
                        </button>
                    </h2>
                    <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            Absolutely, read more about funding <a class="text-decoration-none link" href="https://www.gov.uk/disabled-students-allowance-dsa">here</a> and guidance <a class="text-decoration-none link" href="https://www.ucas.com/undergraduate/applying-university/individual-needs/disabled-students">here</a>.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEighteen" aria-expanded="false"
                                aria-controls="collapseEighteen">
                            17. How much can I earn as a health professional in the NHS?
                        </button>
                    </h2>
                    <div id="collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            <a href="https://www.healthcareers.nhs.uk/" class="text-decoration-none link"
                               target="_blank">
                                www.healthcareers.nhs.uk/
                            </a>.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNineteen" aria-expanded="false"
                                aria-controls="collapseNineteen">
                            18. Is it true that Midwifery places are hard to find in the UK?
                        </button>
                    </h2>
                    <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            There aren’t as many places for Midwifery as there are for other professions; this is why we
                            have a pathway for Midwifery on our course, giving you the opportunity to study additional
                            Midwifery units to make your application stronger.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                            19. Can I apply for jobs with an Access to HE Diploma if I don’t go to university?
                        </button>
                    </h2>
                    <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            Yes, of course, it's a Level 3 Qualification and equivalent to 3 A Levels.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwentyOne" aria-expanded="false"
                                aria-controls="collapseTwentyOne">
                            20. Is the course recognised by UK universities?
                        </button>
                    </h2>
                    <div id="collapseTwentyOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            The majority of universities accept Access to HE courses, there are very few that don't. We
                            are registered with the Quality Assurance Agency for Higher Education.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwentyTwo" aria-expanded="false"
                                aria-controls="collapseTwentyTwo">
                            21. Do you have any open events where I can ask questions or meet the team?
                        </button>
                    </h2>
                    <div id="collapseTwentyTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            We have a one-hour webinar every Wednesday at 6.30pm, during which we give an overview of
                            the course and answer any questions. You can watch the video or read the notes if you can't
                            make it. Here is the <a class="text-decoration-none link" href="https://mediprospects.ac.uk/pre-enrolment-online-events/courses/access-to-he-nursing-midwifery">link</a> to book a place.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwentyThree" aria-expanded="false"
                                aria-controls="collapseTwentyThree">
                            22. Do I need experience in Health or Care work?
                        </button>
                    </h2>
                    <div id="collapseTwentyThree" class="accordion-collapse collapse"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            You don’t have to have formal health or care experience – it all counts if you care for a
                            family member or a friend. You could consider volunteering with the NHS to strengthen your
                            university application:

                            <div class="mb-3">
                                <a href="https://www.england.nhs.uk/get-involved/get-involved/volunteering/"
                                   class="text-decoration-none link d-block" target="_blank">
                                    https://www.england.nhs.uk/get-involved/get-involved/volunteering/
                                </a>
                            </div>

                            <div class="mb-3">
                                <a href="https://www.volunteer.scot.nhs.uk/" class="text-decoration-none link d-block"
                                   target="_blank">
                                    https://www.volunteer.scot.nhs.uk/
                                </a>
                            </div>

                            <div class="mb-3">
                                <a href="https://www.nidirect.gov.uk/articles/becoming-volunteer"
                                   class="text-decoration-none link d-block" target="_blank">
                                    https://www.nidirect.gov.uk/articles/becoming-volunteer
                                </a>
                            </div>

                            <div>
                                <a href="https://volunteering-wales.net/" class="text-decoration-none link d-block"
                                   target="_blank">
                                    https://volunteering-wales.net/.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwentyFour" aria-expanded="false"
                                aria-controls="collapseTwentyFour">
                            23. How do I apply?
                        </button>
                    </h2>
                    <div id="collapseTwentyFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            Click <a class="text-decoration-none link" href="https://mediprospects.ac.uk/learner/register-interest">here</a> to express your interest.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section v-if="course_type === 'vocational'" class="w-100 py-5 faq_screen">
        <div class="container">
            <div class="faqs-title mb-3 fw-bold"> Frequently Asked Questions </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. What does blended learning mean?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            Blended learning combines traditional face-to-face teaching and learning practices with online learning tools.
                            For these courses, unless you are exempt,
                            you must attend more than half of the teaching sessions in person.
                            Exemptions may apply if you meet specific criteria, such as location or personal circumstances,
                            allowing you to attend all sessions online via live lessons on Microsoft Teams.
                            Alternatively, you can opt to attend all lessons face-to-face if that suits your preferences.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. Do I need to do a work placement with this course?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            The work placement is an essential part of the course – it will enable you to put what you learn in the taught sessions into practice. Assignments will draw on your work experience and assessment includes observation in the workplace.
                            How many hours you need to do as part of your course, depends on the qualification you are enrolling on. This can be undertaken in either paid employment or as a volunteer within a setting appropriate to your course. For example, if you are enrolling on the Level 3 Diploma in Adult Care, you will need to be an employee or volunteer in an adult care setting.
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. How can I get support with paying for this course?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            If you live in the UK, you may be entitled to a non-means-tested Student Loan to cover the course's entire cost. For more information,
                            read here:
                            <a href="https://www.gov.uk/advanced-learner-loan" target="_blank" class="text-decoration-none link">https://www.gov.uk/advanced-learner-loan.</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4. What are the entry requirements for this course?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            To join this course, you will need to be aged 19 or over and have GCSE English Grade C/4 or above or Functional Skills Level 1 (or be willing to study towards it).
                        </div>
                    </div>
                </div>
                <div class="accordion-item shadow-sm border border-secondary border-opacity-25">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5. How will this course be assessed?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light border-top px-5">
                            You will be assessed through coursework and written assignments. Your practical skills will also be assessed through observations carried out by your tutor at your work placement. Your tutor will guide you on how to prepare the portfolio and will give you feedback on your work (both class-based and placement based work).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>

export default {
    data() {
        return {
            course_type: '',
        }
    },
    mounted() {
        this.course_type = localStorage.getItem('course_type');
    },
    methods: {}
}

</script>
