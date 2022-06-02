const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            fontSize: {
                "5xl": "3rem",
                "6xl": "3.75rem",
            },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            amber: colors.amber,
            black: '#000',
            custom_blue: '#0078bb',
            blue: colors.blue,
            sky: colors.sky,
            blueGray: colors.blueGray,
            coolGray: colors.coolGray,
            cyan: colors.cyan,
            emerald: colors.emerald,
            fuchsia: colors.fuchsia,
            gray: colors.gray,
            slate: colors.slate,
            green: colors.green,
            indigo: colors.indigo,
            lightBlue: colors.lightBlue,
            lime: colors.lime,
            orange: colors.orange,
            pink: colors.pink,
            purple: colors.purple,
            red: colors.red,
            rose: colors.rose,
            teal: colors.teal,
            trueGray: colors.trueGray,
            violet: colors.violet,
            warmGray: colors.warmGray,
            white: '#FFF',
            yellow: colors.yellow,
            neutral: colors.neutral,
            zinc: colors.zinc,
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
