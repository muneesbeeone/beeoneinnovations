/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
    "./node_modules/tw-elements/js/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', 'sans-serif'],
      },
      backgroundImage: {
        'custom-gradient': 'linear-gradient(to right, rgba(255, 255, 255, 0.3), transparent, rgba(255, 255, 255, 0.1))',
        'custom-gradient-hover': 'linear-gradient(to right, rgba(255, 255, 255, 0.5), transparent, rgba(255, 255, 255, 0.3))',
      },
      transitionDuration: {
        '1000': '1000ms',
      },
    },
    variants: {
      extend: {
        backgroundImage: ['hover'],
      },
    },
  },
  darkMode: "class",
  plugins: [require("tw-elements/plugin.cjs")]
}