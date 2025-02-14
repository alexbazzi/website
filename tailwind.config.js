module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ], { dot: true }),
  theme: {
    extend: {
      colors: {
        'verde': '#10ff00'

      },
    },
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
};
