/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                xs: "279px", // Galaxy Fold
                vvs: "359px", // Galaxy S8+
                vs: "374px", // iPhone SE
            },
            colors: {
                primary: "#222831", //dark
                secondary: "#393E46", //gray
                tertiary: "#00ADB5", //blue teal
                background: "#EEEEEE", // baltic white
            },
            fontFamily: {
                roboto: ["Roboto"],
                display: ["Righteous"],
            },
        },
    },
    plugins: [],
};
