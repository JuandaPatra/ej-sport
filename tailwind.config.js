/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                foobar: ["Foobar-Pro-Black-Oblique", "cursive"],
                DelaGothic: ["DelaGothicOne-Regular", "cursive"],
                Montserrat: ["Montserrat-SemiBold", "cursive"]
            },
            backgroundImage: {
                'mekanisme-desktop': "url('/images/bg-footer.png')",
                'mekanisme-mobile': "url('/images/bg-mekanisme-mobile.jpg')",
              }
        },
    },
    plugins: [require("flowbite/plugin")],
};
