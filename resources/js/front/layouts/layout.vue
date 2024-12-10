<template>
    <Header/>
    <div class="w-100">
        <router-view/>
    </div>
    <Footer/>
</template>
<script>
import Header from "./header.vue";
import Footer from "./footer.vue";

export default {
    components: {Header, Footer},
    data() {
        return {}
    },
    methods: {},
    mounted() {
        setTimeout(() => {
            const preloader = $('.preloader');
            const app = $('#app')
            preloader.fadeOut()
            app.fadeIn();
        }, 1000)
    },
    watch: {
        '$route.name': (routeName) => {
            window.scrollTo(0, 0);
        }
    }
}
</script>
