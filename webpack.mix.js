let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('src/resources/assets/js/checklists.js', 'dist/js')
   .sass('src/resources/assets/sass/checklists.scss', 'dist/css');

if (mix.inProduction()) {
    mix.version();
}
