module.exports = {
  content: [
    './index.html',
    './login.html',
    './pages/index.php',
    './src/**/*.{html,js}',
    './node_modules/flowbite/**/*.js', //  Flowbite
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin') //  Flowbite
  ],
}
