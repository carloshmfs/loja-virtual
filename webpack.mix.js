let mix = require('laravel-mix');

mix.sass('resources/sass/app.sass', 'css/')
    .js('resources/js/app.js', 'js/')
    .setPublicPath('public');
