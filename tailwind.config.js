/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily:{
        'poopins':['Poppins', "sans-serif"],
        'open-sans':['Open Sans', 'sans-serif'],
        'titleFont':['title-font']
      }
    },
  },
  plugins: [
    require('flowbite/plugin')

  ],
}

