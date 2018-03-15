let mix = require('laravel-mix');
mix.scripts([
    'resources/assets/js/jquery-1.11.1.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery.backstretch.min.js',
    'resources/assets/js/scripts.js'
], 'public/js/myjs.js');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/form-elements.css',
    'resources/assets/css/style.css'
], 'public/css/mycss.css');

mix.copyDirectory('resources/assets/img', 'public/img');
