const mix = require('laravel-mix');

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

/*mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');*/

mix.copyDirectory('resources/curriculum', 'public/curriculum');
mix.copyDirectory('resources/img', 'public/img');

mix.styles([
	'resources/curriculum/lib/bootstrap/css/bootstrap.min.css',
	'resources/curriculum/lib/font-awesome/css/font-awesome.min.css',
	'resources/curriculum/lib/animate/animate.min.css',
	'resources/curriculum/lib/ionicons/css/ionicons.min.css',
	'resources/curriculum/lib/owlcarousel/assets/owl.carousel.min.css',
	'resources/curriculum/lib/lightbox/css/lightbox.min.css',
], 'public/curriculum/lib/cv.min.css');

