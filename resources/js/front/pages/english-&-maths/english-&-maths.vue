<template>

    <br><br><br><br>

    <section class="w-100 py-5">
        <div class="container">
            <h1 class="mb-3 text-secondary fw-bold"> English & Maths </h1>
            <div class="d-flex justify-content-start align-items-center mb-4">
                <router-link :to="{name: 'Home'}" class="text-decoration-none text-secondary">
                    Home
                </router-link>
                <div class="mx-2"> / </div>
                <router-link :to="{name: 'EnglishMaths'}" class="text-decoration-none text-secondary fw-medium">
                    English & Maths
                </router-link>
            </div>
            <div class="border rounded-3 p-3 p-md-5">
                <div>
                    <h2 class="text-secondary fw-bold">
                        Please take a few minutes to watch these short videos on Maths and English requirements and how to find courses.
                    </h2>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="p-3 col-xl-6">
                        <iframe class="w-100" height="350" src="https://www.youtube.com/embed/Beu-Il2OFDI" title="Finding a Maths Course" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="p-3 col-xl-6">
                        <iframe class="w-100" height="350" src="https://www.youtube.com/embed/2B_wE6lqJa8" title="Finding an English Course" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>

export default {
    data(){
        return {
        }
    },
    mounted() {
    },
    methods: {
    }
}

</script>
