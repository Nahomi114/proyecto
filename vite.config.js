import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
<<<<<<< HEAD
    build: {
        manifest: true,
      },
=======
>>>>>>> 6afbe6eb9cd726c453a1700c1346c64cf67d33e8
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
