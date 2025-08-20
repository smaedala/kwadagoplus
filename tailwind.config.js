impoexport default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
            },
            colors: {
                'green': {
                    DEFAULT: '#16A34A',
                    dark: '#15803D',
                    light: '#22C55E',
                },
                'custom': {
                    primary: '#1b1b18',
                    secondary: '#706f6c',
                    'bg-primary': '#FDFDFC',
                    'bg-secondary': '#F5F5F3',
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};rom 'tailwindcss/defaultTheme';
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
        },
    },

    plugins: [forms],
};
