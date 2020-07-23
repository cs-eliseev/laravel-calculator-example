const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .extract(['vue', 'axios', 'lodash'], 'public/js/vendor.js');
