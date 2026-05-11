import fs from 'node:fs';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

const devHost = process.env.VITE_DEV_HOST || 'kingblack.test';
const devHttps = process.env.VITE_DEV_HTTPS !== 'false';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',
        port: 5174,
        strictPort: true,
        https: devHttps ? {
            key: fs.readFileSync('C:/laragon/etc/ssl/kingblack.test/kingblack.test.key'),
            cert: fs.readFileSync('C:/laragon/etc/ssl/kingblack.test/kingblack.test.crt'),
        } : false,
        hmr: {
            host: devHost,
            protocol: devHttps ? 'wss' : 'ws',
            port: 5174,
        },
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
