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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': {
                    '100': '#feb1dd',
                    '200': '#ff79c5',
                    '300': '#fd32a9',
                    '400': '#fd32a9',
                    '500': '#f60077',
                },
                'secondary': {
                    '100': '#b6ffd1',
                    '200': '#79ffb3',
                    '300': '#13fc96',
                    '400': '#00f582',
                    '500': '#00ef6d',
                },
                'tertiary': {
                    '900': '#0e1117',
                    '800': '#282a36',
                },
                'light': {
                    '100': '#FFFFFF',
                    '200': '#F5F5F5'
                },
            }
        },
    },

    plugins: [forms],
};
