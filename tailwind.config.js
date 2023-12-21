/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    fontFamily: {
      body: ['Josefin Sans', 'serif'],
      'lora': ['Lora', 'serif'],
      
    },
    extend: {
      colors:{
        customGray: '#F7F7F7',
        customBrown: '#A39081',
        customGreen: '#00E540',
        customRed: '#7A2D2D' ,
      },
      spacing: {
        '50p': '50%',
      },
    },

  },
  plugins: [],
}

