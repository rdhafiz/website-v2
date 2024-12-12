<template>
    <div class="w-100">
        <Welcome/>
        <HECourses/>
        <Awards/>
        <Features/>
    </div>
</template>
<script>
import Welcome from "./widgets/Welcome.vue";
import Features from "./widgets/Features.vue";
import HECourses from "./widgets/HECourses.vue";
import Awards from "./widgets/Awards.vue";

export default {
    components: {Welcome, HECourses, Awards, Features},
    data() {
        return {}
    },
    methods: {},
    mounted() {
        setTimeout(() => {
            AOS.init({
                duration: 1000
            });
        }, 500)
    }
}
</script>
