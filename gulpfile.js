var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/c57/assets/';
elixir.config.publicPath = 'themes/c57/assets/compiled/';

elixir(function (mix) {

    mix.sass('style.scss');

    mix.scripts([
        'jquery.js',
        'app.js'
    ]);

    mix.livereload([
        'themes/c57/assets/compiled/css/style.css',
        'themes/c57/**/*.htm',
        'themes/c57/assets/compiled/js/*.js'
    ]);

});
