import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/js/app.js','resources/js/works_slider.js','resources/js/slider.js','resources/js/admin.js','resources/css/app.css'],
            refresh: true,
        }),
    ],
});
