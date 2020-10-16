import postcss from 'rollup-plugin-postcss';
import postcssImport from 'postcss-import';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';
import postcssNested from 'postcss-nested';
import postcssUrl from 'postcss-url';
import commonjs from '@rollup/plugin-commonjs';
import resolve from '@rollup/plugin-node-resolve';
import purgecss from '@fullhuman/postcss-purgecss';
import cssnano from 'cssnano';

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
        main:'src/main.js'
    },
    output: {
        dir: 'dist/',
        format: 'iife'
    },
    plugins: [
        resolve({
            browser: true
        }),
        commonjs({
            include: 'node_modules/**',
        }),
        postcss({
            plugins: [
                postcssImport(),
                postcssNested(),
                postcssUrl(options),
                tailwindcss(),
                autoprefixer(),
                purgecss({
                    content: ['./*.php','./src/styles/*.css'],
                    defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
                }),
                cssnano({
                    preset: 'default',
                }),
            ],
            sourceMap: true,
            modules: false,
            extract: true,
        }),
    ]
  };