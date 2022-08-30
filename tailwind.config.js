
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/components/*.vue",
  ],
  theme: {
        extend: {
            fontSize: {
                'base': '14px'
            },
            colors: {
              'dgrey': '#464646',
            },
            fontFamily: {
                sans: ['Campton','sans-serif'],
            },
        },
        container: {
          center: true,
          padding: '3rem',
          // screens: {
          //     md: '688px',
          //     lg: '920px',
          //     xl: '1120px',
          //     '2xl': '1380px',
          // },
        }
  },
    plugins: [
        require('tailwind-scrollbar')
    ],
    variants: {
        scrollbar: ['rounded']
    }
}
