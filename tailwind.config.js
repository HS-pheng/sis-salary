import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#ebeef9",
                    100: "#c4cbed",
                    200: "#9da8e1",
                    300: "#7685d5",
                    400: "#4f62c9",
                    500: "#3648b0",
                    600: "#2a3889",
                    700: "#2c3b90",
                    800: "#2c3b90",
                    900: "#2c3b90",
                    950: "#2c3b90",
                },
            },
        },
    },

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    fontFamily: {
        lato: ["Lato", "Hanuman", "-apple-system"],
    },

    plugins: [forms, require("flowbite/plugin")],
};
