module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                transparent: "transparent",
                current: "currentColor",
                primary: "#13242C",
                secondary: "#edbd58",
                pink: "#D95975",
                white: "#FFFFFF",
                gray: "#999999",
                dblue: "#233A85",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
