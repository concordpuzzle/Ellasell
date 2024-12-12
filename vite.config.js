import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS files
                'node_modules/aos/dist/aos.css',
                'node_modules/swiper/swiper-bundle.min.css',
                'node_modules/magnific-popup/dist/magnific-popup.css',
                'node_modules/bootstrap-select/dist/css/bootstrap-select.min.css',
                'node_modules/leaflet/dist/leaflet.css',
                'node_modules/jarallax/dist/jarallax.css',
                'resources/scss/theme.scss',
                
                // Add your JS files here if needed
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources',
        },
    },
});
