import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js','resources/js/works_slider.js','resources/js/slider.js'],
            refresh: true,
        }),
    ],
});
