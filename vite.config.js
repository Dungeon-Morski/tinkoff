import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/scss/normalize.scss','resources/scss/app.scss', 'resources/js/app.js',
                'resources/js/invoice.js',
                'resources/js/payment.js',
            'resources/js/refill.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$': '$'
        },
    },
});
