import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',     
                'resources/css/app2.css',    
                'resources/css/background.css', 
                'resources/js/app.js',
                'resources/css/login.css'      
            ],
            refresh: true,
        }),
    ],
});

