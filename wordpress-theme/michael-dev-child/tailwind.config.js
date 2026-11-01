/**
 * Tailwind CSS v3 config. The Stitch index is the source for utility discovery.
 */
const path = require('path');

module.exports = {
  content: [
    path.resolve(__dirname, '../../../michael-dev-stitch/index.html'),
    path.resolve(__dirname, './**/*.php'),
  ],
  important: '#md-header-scope',
  corePlugins: {
    preflight: false,
  },
  theme: {
    extend: {
      colors: {
        brand: {
          darkest: '#050a18',
          dark: '#070f26',
          navy: '#0b1638',
          cardDark: '#0e1c45',
          blue: '#2563eb',
          blueHover: '#1d4ed8',
          lightBlue: '#38bdf8',
          badgeBg: '#e0f2fe',
          badgeText: '#0284c7',
          badgeDarkBg: 'rgba(56, 189, 248, 0.12)',
          borderDark: '#1e293b',
        },
      },
      fontFamily: {
        sans: [
          'Inter',
          'system-ui',
          '-apple-system',
          'BlinkMacSystemFont',
          'Segoe UI',
          'Roboto',
          'sans-serif',
        ],
        handwriting: ['Caveat', 'Dancing Script', 'cursive'],
      },
    },
  },
};
