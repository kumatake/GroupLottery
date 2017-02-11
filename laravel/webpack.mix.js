const {mix} = require('laravel-mix');

var paths = {
    'jquery': 'bower_components/jquery/',
    'bootstrap': 'bower_components/bootstrap-sass/assets/',
    'materiallite': 'bower_components/material-design-lite/',
};

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

mix.js(['resources/assets/js/app.js', paths.jquery + 'dist/jquery.js', paths.materiallite + 'material.js'], 'public/js/app.js')
    .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')
     .sass('resources/assets/sass/app.scss', 'public/css')
    .combine([paths.materiallite + 'material.css', 'resources/assets/css/templetestyle.css'], 'public/css/base.css')
;