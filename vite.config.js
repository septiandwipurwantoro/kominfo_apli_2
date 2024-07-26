import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/css/login.css', 
                'resources/js/login.js',
                'resources/js/dashboard.js',
                'resources/css/asset.css', 
                'resources/js/asset.js',
                'resources/css/asset-pending.css', 
                'resources/js/asset-pending.js',
                'resources/css/asset-removed.css', 
                'resources/js/asset-removed.js',
                'resources/css/create-asset.css', 
                'resources/js/create-asset.js',
                'resources/css/log.css', 
                'resources/js/log.js',
                'resources/css/master-user.css', 
                'resources/js/master-user.js',
                'resources/css/create-user.css', 
                'resources/js/create-user.js'
            ],
            refresh: true,
        }),
    ],
});
