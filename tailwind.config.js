import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],corePlugins: {
        // enabling rtl support
        direction: true,
    },
    theme: {
        extend: {
            screens: {
                phone: { max: "900px" },
                desktop: { min: "1280px" },
            },
            fontFamily: {
                inter: ["Inter", "sans-serif"],
                fustat: ["Fustat", "sans-serif"],
            },
            animation: {
                "loop-scroll": "loop-scroll 50s linear infinite",
                "loop-scroll-rtl": "loop-scroll-rtl 50s linear infinite",
                "loop-scroll-right": "loop-scroll-right 50s linear infinite",
                "loop-scroll-right-rtl": "loop-scroll-right-rtl 50s linear infinite",
            },
            keyframes: {
                "loop-scroll": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-50%)" },
                },
                "loop-scroll-right": {
                    from: { transform: "translateX(-50%)" },
                    to: { transform: "translateX(0)" },
                },
                "loop-scroll-rtl": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(50%)" },
                },
                "loop-scroll-right-rtl": {
                    from: { transform: "translateX(50%)" },
                    to: { transform: "translateX(0)" },
                },
            },
        },
    },
    plugins: [],
};
