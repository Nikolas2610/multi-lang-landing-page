/** @type {import('tailwindcss').Config} */
module.exports = {
content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#41EFD2', 
        'secondary': '#7D4ACE', 
        'gray': {
          '100': '#F3F3F3',
          '200': '#EBEBEB', 
          '300': '#EEEEEE', 
          '400': '#666666'
        }, 
        'dark-cyan': '#31af9a'
      }, 
      container: {
        padding: {
          DEFAULT: '1rem',
          sm: '2rem',
          lg: '2rem',
          xl: '2rem',
          '2xl': '2rem',
        },
        center: true,
      },
      backgroundImage: {
        'custom-radial-gradient': "radial-gradient(61.95% 125.12% at 61.95% 52.16%, #7D4ACE 0%, #6525CC 100%)"
      },
      width: {
        'fit-content': 'fit-content',
      },
      fontSize: {
        xs: '10px',
        md: '14px',
        base: '16px',
        lg: '20px',
        xl: '24px',
        '2xl': '32px',
        '3xl': ['44px', '52px'],
        '4xl': '48px',
      },
      lineHeight: {
        '50': '50px',
      },
      filter: {
        'invert': 'invert(100%)',
      }, 
      fontFamily: {
        'gilroy': ['Gilroy', 'sans-serif'],
      }
    },
  },
  plugins: [],
}

