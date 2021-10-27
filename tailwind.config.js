const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.{php,vue,js}',
      './safelist.txt'
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '0rem'
      },
    },
    extend: {
      colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
      zIndex: {
        '-1': '-1',
      },
      fontFamily: {
        'heading': ['Poppins', ...defaultTheme.fontFamily.sans],
      },
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': tailpress.theme('settings.layout.wideSize', theme)
    }
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
    tailpress.tailwind
  ],
};
