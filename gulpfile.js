var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');

   	mix.styles([
        'resources/css/bootstrap.css',
        'resources/css/font-awesome.css',
        'resources/css/sb-admin-2.css',
        'resource/css/metisMenu',
        'resources/css/timeline.css',
        'resources/css/dropzone.css',
        'resources/css/basic.css'
    ], 'public/assets/stylesheets/styles.css', './');
    mix.scripts([
        'resources/js/jquery.js',
        'resources/js/bootstrap.js',
        'resources/js/Chart.js',
        'resources/js/metisMenu.js',
        'resources/js/sb-admin-2.js',
        'resources/js/frontend.js',
        'resources/js/dropzone.js',
        'resources/js/dropzone-amd-module.js'
    ], 'public/assets/scripts/frontend.js', './');
});


