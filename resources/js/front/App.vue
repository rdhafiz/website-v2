<template>
        <router-view/>
</template>
<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: 'app',
    mounted() {
        const tidioScript = document.createElement('script');
        tidioScript.src = "//code.tidio.co/bqufjctb7drjzoil2pcd1vfhxjuwd1be.js";
        tidioScript.async = true;
        tidioScript.defer = true;
        document.body.appendChild(tidioScript);
    },
    data() {
        return {
        }
    },
    watch: {
        $route: {
            immediate: true,
            handler(to, from) {
                document.title = to.meta.title || 'Mediprospects';
            }
        },
    }
})
</script>
