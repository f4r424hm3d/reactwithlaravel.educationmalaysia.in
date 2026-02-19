import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig(({ mode }) => ({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        react(),
        tailwindcss(),
    ],
    server: {
        host: process.env.VITE_HOST || 'localhost',
        port: Number(process.env.VITE_PORT) || 5173,
        strictPort: false,
    },
    build: {
        outDir: 'public/build',
        assetsDir: 'assets',
        emptyOutDir: true,
        manifest: true,
    },
}));
