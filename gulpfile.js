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
        'fonts/fonts.css',
        'normalize.css',
        'prospect.css',
        'form.css'
     ], 'public/css/prospect.css');
     
     mix.styles([
        'prosmob.css'
     ], 'public/css/prosmob.css');
    
    mix.version([
        'public/css/app.css',
        'public/css/mob.css',
        'public/css/prospect.css',
        'public/css/prosmob.css'
    ]);
});


