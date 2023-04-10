/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.scss',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      padding: '20px',
      center: true,
    },
    extend: {},
  },
  plugins: [],
}

