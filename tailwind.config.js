const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./index.html",
        "./src/**/*.{vue,js,ts,jsx,tsx}",
        './templates/**/*.html'
    ],    

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        mytheme: {
            "white": "#ffffff",
          
            "primary": "#6419E6",
                     
            "secondary": "#D926A9",
                     
            "accent": "#1FB2A6",
                     
            "neutral": "#191D24",
                     
            "base-100": "#2A303C",
                     
            "info": "#3ABFF8",
                     
            "success": "#36D399",
                     
            "warning": "#FBBD23",
                     
            "error": "#F87272",
                     },
    },

    plugins: [
                 require('@tailwindcss/forms'),
                 require('@tailwindcss/typography'),
                 require("daisyui"),
                 require('flowbite/plugin')
                ],
    daisyui: {
                                            styled: true,
                                            themes: true,
                                            base: true,
                                            utils: true,
                                            logs: true,
                                            rtl: false,
                                            prefix: "",
                                            darkTheme: "dark",
                                        },
         
};
