var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy(
        'node_modules/bootstrap-css-only/css/bootstrap.min.css',
        'resources/assets/css'
    );
    
    
    mix.styles([
        'fonts/fonts.css',
        'normalize.css',
        'jakstyles.css',
        'form.css'
     ], 'public/css/app.css');
     
     mix.styles([
        'mobile.css'
     ], 'public/css/mob.css');
     
     mix.styles([
        'bootstrap.min.css',
        'fonts/fonts.css',
        'normalize.css',
        'prospect.css',
        'form.css'
     ], 'public/css/prospect.css');
     
     mix.styles([
        'prosmob.css'
     ], 'public/css/prosmob.css');
     
     mix.scripts([
        'jquery.js',
        'feedback-feed.js',
        'feedback-feed-ind.js',
        'mobile-nav.js'
     ], 'public/scripts/jquery.js')
     
     .scripts([
        'mootools-core.js',
        'mootools-more.js'
     ], 'public/scripts/mootools.js')
     
     .scripts([
        'modernizr.js',
        'selectivizr-min.js'
     ], 'public/scripts/modernizr.js');
    
    mix.version([
        'public/css/app.css',
        'public/css/mob.css',
        'public/css/prospect.css',
        'public/css/prosmob.css'
    ]);
});


