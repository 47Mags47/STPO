import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

const env = loadEnv('all', process.cwd());

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.sass',
                'resources/sass/export/pages/main/dashboard.sass',
                'resources/sass/export/pages/CSVI/appeal-chat.sass',

                'resources/js/app.js',
                'resources/js/ui/pages/main/dashboard.js',
                'resources/js/ui/pages/CSVI/appeal-chat.js',
                'resources/js/ui/pages/CSVI/appeals.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
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
