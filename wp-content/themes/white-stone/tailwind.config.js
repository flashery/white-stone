/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit', // Enable Just-In-Time mode
    content: [
      "./*.php",
      "./**/*.php",
      "./assets/js/**/*.js"
    ],
    theme: {
      extend: {
        fontFamily: {
          raleway: ["Raleway", "sans-serif"],
        },
        colors: {
          'ws-blue': '#273675', // Custom text color
        },
      },
    },
    plugins: [],
  };
  