import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
                secondary: ['Itim', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'header-bg': "url('../img/background.jpg')",
                'hero': "url('../img/hero.jpg')",
                'ellipse': "url('../img/ellipse.svg')",
            },

            colors: {
                'blue-900' : '#002733',
                'blue-800' : '#014F65',
                'blue-700' : '#017698',
                'blue-600' : '#019DCB',
                'blue-500' : '#018EB7',
                'blue-400' : '#01C5FE',
                'blue-300' : '#34D0FE',
                'blue-200' : '#67DCFE',
                'blue-100' : '#CCF3FF',

                'yellow-900' : '#332500',
                'yellow-800' : '#624804',
                'yellow-700' : '#936C06',
                'yellow-600' : '#CC9300',
                'yellow-500' : '#FFB800',
                'yellow-400' : '#F7C33B',
                'yellow-300' : '#F9D26C',
                'yellow-200' : '#FFE399',
                'yellow-100' : '#FFF1CC',

            }
        },
    },

    plugins: [forms],
};
