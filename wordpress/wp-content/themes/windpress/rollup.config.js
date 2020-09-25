import resolve from 'rollup-plugin-node-resolve';
import postcss from 'rollup-plugin-postcss';
import postcssImport from 'postcss-import';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';
import postcssNested from 'postcss-nested';
import postcssUrl from 'postcss-url';

// postcss-url options
const options = {
    url: 'copy',
    // dir to copy assets
    assetsPath: '../dist/img',
    // using hash names for assets (generates from asset content)
    useHash: true
};


export default {
    input: {
        main:'src/main.js', 
    },
    output: {
        dir: 'dist/',
        format: 'esm'
    },
    plugins: [
        resolve(),
        postcss({
            plugins: [
                postcssImport(),
                postcssNested(),
                postcssUrl(options),
                tailwindcss(),
                autoprefixer(),
            ],
            sourceMap: true,
            modules: false,
            extract: true,
        }),
    ]
  };