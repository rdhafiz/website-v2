<template>

    <br><br><br><br>

    <section class="w-100 py-5">
        <div class="container">
            <h1 class="mb-3 text-secondary fw-bold"> Cookie Policy </h1>
            <div class="d-flex justify-content-start align-items-center mb-4">
                <router-link :to="{name: 'Home'}" class="text-decoration-none text-secondary">
                    Home
                </router-link>
                <div class="mx-2"> / </div>
                <router-link :to="{name: 'About'}" class="text-decoration-none text-secondary">
                    About us
                </router-link>
                <div class="mx-2"> / </div>
                <router-link :to="{name: 'CookiePolicy'}" class="text-decoration-none text-secondary fw-medium">
                    Cookie Policy
                </router-link>
            </div>
            <div class="border rounded-3 p-5">
                <div>
                    <h2 class="text-secondary fw-bold"> About cookies </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> Cookies are essential in the running of most websites. Cookies are pieces of information that a website transfers to the cookie file on your computer’s hard disk. There are two types of cookies. <strong> Session cookies </strong> and <strong> Persistent cookies </strong>. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> What types of cookies are used on the MEDIPROSPECTS website? </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> Session cookies are essential features for most websites. Many websites wouldn’t function without this type of cookie. This website uses essential cookies in the running of its website. These are temporary cookies, which only exist in the period you access the website. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> Persistent Cookies </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> These are cookies, which remain on your device after you have visited a website. These cookies help us identify you as a unique visitor. The persistent cookies used on this website do not contain personal information, and cannot be used to identify you, and are used solely for our Google Analytics account. They track how visitors reach the MEDIPROSPECTS website and the route they take through it. These analytics help us to improve the website service we offer customers and analyse the effectiveness of our marketing campaigns.. </h5>
                </div>
                <div class="mt-5">
                    <h2 class="text-secondary fw-bold"> How to control and delete cookies </h2>
                    <h5 class="fs-6 text-secondary fw-normal"> MEDIPROSPECTS does not use cookies to collect personally identifiable information about you or any of its website users. However, if you wish to restrict or block the cookies, you can do this through your browser settings. How to do this varies in each browser, however most browsers will have a ‘help’ function which should allow you to control the use of cookies. For information on browsers on mobile devices you may need to visit your handset manual. </h5>
                </div>
            </div>
        </div>
    </section>

</template>

<script>

export default {
    data(){
        return {}
    },
    mounted() {

    },
    methods: {

    }
}

</script>
