<template>

    <div class="w-100 py-4"></div>
    <Awards/>

</template>

<script>
import Awards from "../home/widgets/Awards.vue";

export default {
    components: {
        Awards
    },
    data(){
        return {

        }
    },
    mounted() {
        setTimeout(() => {
            AOS.init({
                duration: 1000
            });
        }, 500)
    },
    methods: {

    }
}

</script>
