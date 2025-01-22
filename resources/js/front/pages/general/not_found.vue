<template>

    <br><br><br><br>

    <section class="w-100 py-5 d-flex h-100 text-center">
        <div class="container">
            <div class="cover-container d-flex w-100 h-100 p-5 mx-auto flex-column rounded-3">

                <main class="px-3">
                    <h1>Page Not Found!</h1>
                    <p class="lead">
                        Mediprospects's website have been updated and some links from the old website might not work
                        anymore. Also, please check if you've entered the URL correctly.
                    </p>
                    <p class="lead">
                        And, you can always go to the Homepage by clicking the link below.
                    </p>
                    <p class="lead">
                        <router-link to="/" class="btn btn-lg btn-theme fw-bold px-5 py-3 fs-4">
                            <i class="fa fa-home"></i> Go to Homepage
                        </router-link>
                    </p>
                </main>

            </div>
        </div>
    </section>

</template>

<script>
export default {
    name: 'NotFound',
    data() {
        return {}
    },
    mounted() {
        setTimeout(() => {
            const preloader = $('.preloader');
            const app = $('#app')
            preloader.fadeOut()
            app.fadeIn();
        }, 750);
    }
}
</script>

<style scoped>
.cover-container {
    max-width: 800px;
    width: 100%;
    display: block;
    background-color: rgb(20, 26, 69);
    border-radius: 10px;
    padding: 50px;
    color: white;
}
</style>
