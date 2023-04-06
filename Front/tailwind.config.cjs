/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily:{
        'Roboto': ['Roboto', 'sans-serif'],
        'Inter': ['Inter', 'sans-serif'],
        'Geogrotesque': ['GeogrotesqueCyr-Regular', 'sans-serif']
      },
      colors:{
        'primary': '#362EBD',
        'secondary': '#899DE4',
        'morado-1-nc': '#9E98FB',
        'morado-2-nc': '#B5AAF9',
        'verde-nc': '#71F8AE',
        'gris-desactivado': '#9D9D9D',
        'verde-activado': '#2E9F47',
        'text-color-white': '#F6F6F6',
      },
      backgroundImage:{
        'azul-verde': 'linear-gradient(90deg, rgba(61, 141, 229) 30.79%, rgba(113, 248, 174) 89.01%)',
        'azul-morado':'linear-gradient(180deg, rgb(103, 48, 201) 0%, rgb(82, 71, 241) 50.52%, rgb(139, 38, 218) 100%);',
        'nuestros-perfiles': 'linear-gradient(180deg, rgb(137, 157, 228) 26.04%, rgba(137, 157, 228, 0) 100%);',
        'verticales': 'linear-gradient(180deg, rgb(255, 247, 180) 0%, rgba(228, 219, 137, 0) 86.98%)',
        'login-gradient': 'linear-gradient(156.78deg, rgb(54, 46, 189) 16.37%, rgb(95, 101, 208) 65.8%, rgb(137, 157, 228) 102.98%)'
        // 'test': 'linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%);'
      },
      boxShadow:{
        'dark': '0px 3px 8px rgba(0,0,0,0.24)',
        'light': '4px 4px 4px 0px rgba(255,255,255,255.25)'
      }
    },
  },
  plugins: [],
}