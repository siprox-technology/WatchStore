const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

//css bundle
mix.combine([
    'resources/plugins/bootstrap/bootstrap.min.css',
    'resources/plugins/slick/slick.css',
    'resources/plugins/venobox/venobox.css',
    'resources/plugins/animate/animate.css',
    'resources/plugins/aos/aos.css',
    'resources/plugins/bootstrap-touchspin-master/jquery.bootstrap-touchspin.min.css',
    'resources/plugins/nice-select/nice-select.css',
    'resources/plugins/bootstrap-slider/bootstrap-slider.min.css',
    'resources/plugins/fontawesome-free-5.15.1-web/css/all.css',
    'resources/css/style.css'
], 'public/css/app.css');

//js bundle
mix.combine([
    "resources/plugins/jQuery/jquery.min.js",
    "resources/plugins/bootstrap/bootstrap.min.js",
    "resources/plugins/slick/slick.min.js",
    "resources/plugins/venobox/venobox.min.js",
    "resources/plugins/aos/aos.js",
    "resources/plugins/syotimer/jquery.syotimer.js",
    "resources/plugins/instafeed/instafeed.min.js",
    "resources/plugins/zoom-master/jquery.zoom.min.js",
    "resources/plugins/bootstrap-touchspin-master/jquery.bootstrap-touchspin.min.js",
    "resources/plugins/nice-select/jquery.nice-select.min.js",
    "resources/plugins/bootstrap-slider/bootstrap-slider.min.js",
    "resources/plugins/google-map/gmap.js",
    "resources/js/script.js",
], 'public/js/app.js');

mix.combine(["resources/js/charge.js"], 'public/js/charge.js');
