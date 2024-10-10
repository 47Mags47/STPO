import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

const env = loadEnv('all', process.cwd());

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.sass',
                'resources/sass/imports/font.sass',
                'resources/sass/imports/lib.sass',
                'resources/js/app.js',

                'resources/sass/page/error.sass',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        port: env.VITE_ASSET_PORT,
        strictPort: true,
        hmr: {
            host: env.VITE_ASSET_HOST,
            port: env.VITE_ASSET_PORT,
        },
    },
});
