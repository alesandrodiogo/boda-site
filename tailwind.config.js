module.exports = {
  content: [
    '<?=URL?>/public/index.php',
    '<?=URL?>/app/views/**/*',
  ],
  theme: {
    extend: {
      screens: {
        'sm': {'min': '330px', 'max': '320px'},
      },
      colors:{
        primary:'#04B3C8',
        secundary:{
          100:'#E8E8E8',
          200:'#FFFFFF'
        }
      }
    },
  },
  plugins: [],
}
