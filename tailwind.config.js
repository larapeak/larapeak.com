const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    tailwindcss: {
        jit: true
    },

    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    darkMode: false, // media or class

    theme: {
        fontFamily: {
            sans: ['Inter var', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji']
        },
        extend: {
            colors: {
                'primary': '#185adbff',
            }
        },
    },

    variants: {
        extend: {},
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography')
    ],
};
