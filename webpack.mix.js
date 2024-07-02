const mix = require('laravel-mix');

mix.setPublicPath('public')
   .js('resources/js/app.js', 'js')
   .sass('resources/sass/app.scss', 'css');

// Add this line if you have custom assets for Laratrust
mix.sass('resources/sass/laratrust.scss', 'public/vendor/laratrust/laratrust.css');
