const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'primary': '#151515',
                'action': '#f19f40',
            },
            backgroundColor: {
                'primary': '#151515',
                'action': '#f19f40',
            },
            backgroundColor: ['responsive', 'hover', 'focus', 'group-hover'],
            opacity: ['responsive', 'hover', 'focus', 'group-hover'],
            visible: ['responsive', 'hover', 'focus', 'group-hover'],
            maxWidth:{
                '100': '100px',
                '200': '200px',
                '20' : '20px'
            },
            minWidth:{
                '100': '100px',
                '200': '200px',
                '300': '300px',
                '20' : '20px'
            },
            width:{
                '100': '100px',
                '150': '150px',
                '200': '200px',
            },
            boxShadow: {
                amit: '0 1px 10px #ad2e24',
            },
            order: {
               none: '0',
                '1': '1',
                '2': '2'
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
