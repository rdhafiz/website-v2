import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/front/app.js',
            ],
            refresh: true,
        }),
    ],
});
