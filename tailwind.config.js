/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html", "./assets/js/**/*.js"],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "#d941f2",
        "primary-dark": "#b02ec5",
        "primary-light": "#fce9fe",
        "primary-content": "#ffffff",
        "background-light": "#f8f6f8",
        "background-dark": "#1f1022",
        "neutral-light": "#e4dbe6",
        "neutral-dark": "#4a3a4d",
        "surface-light": "#ffffff",
        "surface-dark": "#2d1b32",
        "text-main": "#171118",
        "text-muted": "#846189",
        "border-light": "#e4dbe6",
        "border-dark": "#4a3550"
      },
      fontFamily: {
        display: ["Sora", "sans-serif"]
      },
      borderRadius: {
        DEFAULT: "0.5rem",
        lg: "1rem",
        xl: "1.5rem",
        full: "9999px"
      }
    }
  },
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/container-queries")]
};
