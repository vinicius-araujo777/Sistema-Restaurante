/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Outfit"', "sans-serif"],
        serif: ['"Cormorant Garamond"', "serif"],
      },
      colors: {
        orange: {
          50: "#FEF0E7",
          100: "#FDD9C0",
          200: "#FAB990",
          400: "#F5845A",
          500: "#E8621A",
          600: "#C04E10",
          700: "#7C3200",
        },
      },
    },
  },
  plugins: [],
};
