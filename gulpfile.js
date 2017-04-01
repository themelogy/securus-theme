var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';

var publicPath = '../../public';
var themePath = publicPath + '/themes/securus';
var cssPath = themePath + '/css';
var jsPath =  themePath + '/js';

var Task = elixir.Task;

elixir.extend('del', function(path) {
    new Task('del', function() {
        return del(path, {force:true});
    });
});

elixir.extend('stylistPublish', function() {
    new Task('stylistPublish', function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {

    mix.del(['assets/css', 'assets/js']);
    mix.del(themePath+'/**');

    mix.sass('bootstrap.scss', 'resources/assets/css/bootstrap.min.css')
        .sass('normalize.scss', 'resources/assets/css/bootstrap.css')
        .sass('advisor.scss', 'resources/assets/css/advisor.min.css')
        .sass('color-default.scss', 'resources/assets/css/color-default.css');

    mix.styles([
       'bootstrap.css',
       'font-awesome.min.css',
       'icons.css',
       'advisor.min.css',
       'plugins.css',
       'color-default.css',
       'settings.css',
       'responsive.css'
    ], 'resources/assets/css/advisor.css');

    mix.scripts([
        'jquery-2.2.0.js',
        'smooth-scroll.js',
        'bootstrap.min.js',
        'counter.js',
        'common.js',
        'scripts.js'
    ], 'resources/assets/js/all.js');

    mix.copy('resources/assets', 'assets');

    mix.version([
        'css/advisor.css',
        'js/all.js'
    ], 'assets');

    mix.stylistPublish();

});