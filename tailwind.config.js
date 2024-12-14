/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontSize: {
        '8px': '8px',
        '10px': '10px',
        '12px': '12px',
        '13px': '13px',
        '40px': '40px',
        '44px': '44px', 
      },
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],
        literata: ['Literata', 'serif'],
      },
      colors: {
        'primary': 'rgb(48,25,52)',
        'gold':'rgb(255,238,0)',
        'light-blue-1': 'rgb(239, 245, 250)',
        'light-blue-2': 'rgb(247, 249, 251)',
        'light-blue-3': 'rgb(248, 248, 248)',
        'light-blue-4': 'rgb(249, 249, 249)',
        'dark-blue': 'rgb(49, 65, 133)',
        'light-grey': 'rgb(229, 236, 241)',
        'light-grey-1': 'rgb(245, 245, 245)',
        'light-grey-2': 'rgb(230, 230, 230)',
        'light-pink': 'rgb(255, 247, 227)',
        'dark-purple': 'rgb(46, 2, 73)',
        'light-yellow': '#f3e9d6',
      },
      backgroundImage: {
        'certified-banner': "url('/images/Certified-bnr.png')",
        'bespoke-banner': "url('/images/bespoke-bnr.webp')",
      }
    },
  },
  plugins: [],
}

