/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
      ],
  theme: {
    extend: {
        screens: {
            'sm': '375px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
          }
    },
  },
  plugins: [],
}

