module.exports = {
  purge: [
    './*.php'
  ],
  theme: {
    
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }
    },
    extend: {
      height: theme => ({
        'screen/2': '50vh',
        'screen-7': 'calc(100vh - 7rem)',
      }),
    },
  },
  variants: {},
  plugins: [],
};
