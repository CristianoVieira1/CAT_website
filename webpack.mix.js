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

mix
    .styles([
        'resources/views/front/cursos/assets/css/animate.min.css',
        'resources/views/front/cursos/assets/css/bootstrap.min.css',
        'resources/views/front/cursos/assets/css/owl.carousel.min.css',
        'resources/views/front/cursos/assets/css/owl.theme.default.min.css',
        'resources/views/front/cursos/assets/css/magnific-popup.css',
        'resources/views/front/cursos/assets/css/vegas.min.css',
    ], 'public/front/assets/css/vendor.css')

.styles([
    'resources/views/front/cursos/assets/css/style.css',
], 'public/front/assets/css/style.css')

.styles([
    'resources/views/front/cursos/assets/css/responsive.css',
], 'public/front/assets/css/responsive.css')

.styles([
    'resources/views/front/cursos/assets/fontsAwesome/css/all.css',
], 'public/front/assets/css/all.css')

.scripts([
    'resources/views/front/cursos/assets/js/jquery.min.js',
    'resources/views/front/cursos/assets/js/bootstrap.bundle.min.js',
    'resources/views/front/cursos/assets/js/owl.carousel.min.js',
    'resources/views/front/cursos/assets/js/waypoints.min.js',
    'resources/views/front/cursos/assets/js/jquery.counterup.min.js',
    'resources/views/front/cursos/assets/js/TweenMax.min.js',
    'resources/views/front/cursos/assets/js/wow.js',
    'resources/views/front/cursos/assets/js/jquery.magnific-popup.min.js',
    'resources/views/front/cursos/assets/js/countdown.min.js',
    'resources/views/front/cursos/assets/js/vegas.min.js',
], 'public/front/assets/js/vendor.js')

.scripts([
    'resources/views/front/cursos/assets/js/theme.js',
], 'public/front/assets/js/theme.js')

.scripts([
    'resources/views/front/cursos/assets/fontsAwesome/js/all.min.js',
], 'public/front/assets/js/all.min.js')

.copyDirectory('resources/views/front/cursos/assets/images', 'public/front/assets/images')
    .copyDirectory('resources/views/front/cursos/assets/fontsAwesome/sprites', 'public/front/assets/fonts/icons/sprites')
    .copyDirectory('resources/views/front/cursos/assets/fontsAwesome/svgs', 'public/front/assets/fonts/icons/svgs')
    .copyDirectory('resources/views/front/cursos/assets/fontsAwesome/webfonts', 'public/front/assets/fonts/icons/webfonts')

// FACULDADE

.styles([
    'resources/views/front/faculdade/assets/css/app.min.css'
], 'public/front/faculdade/assets/css/vendor.css')

.styles([
    'resources/views/front/faculdade/assets/css/carousel.min.css'
], 'public/front/faculdade/assets/css/carousel.min.css')

.scripts([
    'resources/views/front/faculdade/assets/js/app.min.js'
], 'public/front/faculdade/assets/js/vendor.js')

.scripts([
    'resources/views/front/faculdade/assets/js/detalhe-curso.js'
], 'public/front/faculdade/assets/js/detalhe-curso.js')

.scripts([
    'resources/views/front/faculdade/assets/js/jquery-3.3.1.min.js',
    'resources/views/front/faculdade/assets/js/jquery-ui.min.js',
], 'public/front/faculdade/assets/js/jquery.js')

.copyDirectory('resources/views/front/faculdade/assets/images', 'public/front/faculdade/assets/images')
    .copyDirectory('resources/views/front/faculdade/assets/fonts', 'public/front/faculdade/assets/fonts')

.options({
    processCssUrls: false
});


// .svg-inline--fa