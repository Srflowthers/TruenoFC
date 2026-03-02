import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                title: ['Oswald', 'sans-serif'],
            },
            colors: {
                brand: {
                    black: '#0a0a0a',
                    red: '#CF142B',
                    darkred: '#991B1B'
                }
            }
        },
    },

    plugins: [forms],
};
