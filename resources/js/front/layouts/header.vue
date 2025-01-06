<template>
    <div class="header" :class="{'header-light': isHeaderLight }">
        <div class="container-fluid px-xxl-5 px-0">
            <div class="w-100 d-flex justify-content-between align-items-center">
                <div class="col-6 col-lg-2">
                    <div class="website-name">
                        <h1 class="m-0">
                            <router-link :to="{name: 'Home'}">
                                Mediprospects
                            </router-link>
                        </h1>
                    </div>
                </div>
                <div class="col-6 col-lg-10">
                    <div class="d-flex d-lg-none justify-content-end">
                        <button type="button" class="sidebar-toggle" @click="sidebarToggle()">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <div class="main-menu" :class="{'active' : isSidebar}">
                        <ul>
                            <li class="d-flex justify-content-between align-items-center d-lg-none border-bottom py-2 px-3">
                                <div class="fs-3">Menu</div>
                                <button type="button" class="btn border-0 bg-transparent btn-close shadow-none" @click="sidebarToggle()"></button>
                            </li>
                            <li>
                                <router-link :to="{name: 'Home'}" @click="sidebarToggle()">
                                    Home
                                </router-link>
                            </li>
                            <li class="dropdown-custom">
                                <a href="javascript:void(0)" @click="dropdownToggle()">
                                    Courses <i class="fas fa-chevron-down ms-2"></i>
                                </a>
                                <ul class="dropdown-custom-menu" :class="{ 'active' : isDropdown}">
                                    <li>
                                        <router-link :to="{name: 'CourseAccessToHe'}" class="dropdown-item" @click="dropdownToggle();sidebarToggle()">
                                            Access to Higher Education
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{name: 'CourseVocationalTraining'}" class="dropdown-item" @click="dropdownToggle();sidebarToggle()">
                                            Vocational Courses & Training
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{name: 'EnglishMaths'}" class="dropdown-item" @click="dropdownToggle();sidebarToggle()">
                                            English & Maths
                                        </router-link>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <router-link :to="{name: 'Awards'}" @click="sidebarToggle()">
                                    Awards
                                </router-link>
                            </li>
<!--                            <li>-->
<!--                                <router-link :to="{name: 'NewsEvents'}" @click="sidebarToggle()">-->
<!--                                    News & Events-->
<!--                                </router-link>-->
<!--                            </li>-->
                            <li>
                                <router-link :to="{name: 'About'}" @click="sidebarToggle()">
                                    About Us
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'Contact'}" @click="sidebarToggle()">
                                    Contact
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'FAQs'}" @click="sidebarToggle()">
                                    FAQs
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'whyChooseUs'}" @click="sidebarToggle()">
                                    Why study with us?
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'FeesFunding'}" @click="sidebarToggle()">
                                    Fees & Funding
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'Pathways'}" @click="sidebarToggle()">
                                    Pathways
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    computed: {
        isHeaderLight() {
            const lightRoutes = ['Home'];
            return this.headerLight === true || lightRoutes.includes(this.$route.name) === false
        }
    },
    data() {
        return {
            headerLight: false,
            isDropdown: false,
            isSidebar: false,
        }
    },
    methods: {
        dropdownToggle() {
            this.isDropdown = !this.isDropdown;
        },
        sidebarToggle() {
            if(window.innerWidth <= 991) {
                this.isSidebar = !this.isSidebar;
            }
        },
    },
    mounted() {
        const THIS = this;
        window.addEventListener('scroll', () => {
            THIS.headerLight = window.scrollY > 200;
        });
    },
}
</script>
