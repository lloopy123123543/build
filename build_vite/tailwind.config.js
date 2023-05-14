/** @type {import('tailwindcss').Config} */
export default {
  // mode: 'jit',
  // purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}', './index.html'],
 
    content: ['./src/**/*.html', './src/**/*.js'],
    options: {
      safelist: [],
      watch: true,
      watchFiles: ['./src/**/*.{html,js}'],
      tailwindcss: {
        watchRefs: 'node',
      },
    },
  
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

