/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/Resources/**/*.blade.php"],

    theme: {
        extend: {
            colors: {
                darkGreen: '#40994A',
                darkBlue: '#0044F2',
                darkPink: '#F85156',
            },
        },
    },
    
    darkMode: 'class',
};
