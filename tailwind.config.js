/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./src/**/*.{html,js}",
  ],
  theme: {
    screens: {
      '2xl': {'max': '1535px'},
      // => @media (max-width: 1535px) { ... }

      'xl': {'max': '1279px'},
      // => @media (max-width: 1279px) { ... }

      'lg': {'max': '1023px'},
      // => @media (max-width: 1023px) { ... }

      'md': {'max': '767px'},
      // => @media (max-width: 767px) { ... }

      'sm': {'max': '639px'},
      // => @media (max-width: 640px) { ... }
    },
    fontFamily: {
      sans: ['Poppins', 'sans-serif'],
      serif: ['Roboto', 'serif'],
    },
    headers: {
      'h1': {
        fontSize: ['2rem', '3rem'],
      },
      'h2': {
        fontSize: ['1rem', '1.5rem']
      }
    }
  },
  purge: [
    './public/**/*.html',
    './src/**/*.{js,jsx,ts,tsx,vue}',
  ],
  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
  ],
}

