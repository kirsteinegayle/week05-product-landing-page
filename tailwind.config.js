/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        daloy: {
          black: '#16110d',
          espresso: '#3d2620',
          coffee: '#6e4a34',
          cream: '#f4ead9',
          beige: '#dcc4a3',
          paper: '#faf6ef',
        },
      },
      fontFamily: {
        display: ['Montserrat', 'sans-serif'],
        sans: ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}