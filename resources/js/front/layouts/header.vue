<template>
    <div class="header" :class="{'header-light': isHeaderLight }">
        <div class="container-fluid px-xxl-5 px-0">
            <div class="w-100 d-flex justify-content-between align-items-center">
                <div class="col-2">
                    <div class="website-name">
                        <h1 class="m-0">
                            <router-link :to="{name: 'Home'}">
                                Mediprospects
                            </router-link>
                        </h1>
                    </div>
                </div>
                <div class="col-10">
                    <div class="main-menu">
                        <ul>
                            <li>
                                <router-link :to="{name: 'Home'}">
                                    Home
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'Courses'}">
                                    Courses
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'Excellence'}">
                                    Excellence
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'FeesFunding'}">
                                    Fees & Funding
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'Pathways'}">
                                    Pathways
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'News'}">
                                    News & Events
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'About'}">
                                    About Us
                                </router-link>
                            </li>
                            <li>
                                <router-link :to="{name: 'Contact'}">
                                    Contact
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
            headerLight: false
        }
    },
    methods: {},
    mounted() {
        const THIS = this;
        window.addEventListener('scroll', () => {
            THIS.headerLight = window.scrollY > 200;
        });
    },
}
</script>
