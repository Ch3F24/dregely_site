/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
        extend: {},
        container: {
          center: true,
          padding: '1rem',
          // screens: {
          //     md: '688px',
          //     lg: '920px',
          //     xl: '1120px',
          //     '2xl': '1380px',
          // },
        }
  },
  plugins: [],
}
