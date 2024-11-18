<template>
    <div class="header" :class="{'header-light': headerLight === true}">
        <div class="container-fluid px-5">
            <div class="w-100 d-flex justify-content-between align-items-center">
                <div class="col-3">
                    <div class="website-name">
                        <h1 class="m-0"><a href="">Mediprospects</a></h1>
                    </div>
                </div>
                <div class="col-6">
                    <div class="main-menu">
                        <ul>
                            <li><a class="active" href="">Home</a></li>
                            <li><a href="">Courses</a></li>
                            <li><a href="">News & Events</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3">
                    <div class="header-action">
                        <a class="btn btn-primary px-4 rounded-pill btn-lg me-3 shadow">Login</a>
                        <a class="btn btn-warning px-4 btn-lg rounded-pill shadow" href="">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    data() {
        return {
            headerLight: false
        }
    },
    methods: {},
    mounted() {
        const THIS = this;
        window.addEventListener('scroll', () => {
            if(window.scrollY > 200){
                THIS.headerLight = true;
            } else {
                THIS.headerLight = false;
            }
        });
    }
}
</script>
