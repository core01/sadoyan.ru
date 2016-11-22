const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
var livereload = require('gulp-livereload');
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
elixir.config.sourcemaps = false;
elixir.config.notifications = false;
elixir(mix => {
    mix.sass([
        'app.sass'
    ], 'public/assets/css');
// Копируем шрифты
    mix.copy('node_modules/font-awesome/css', 'public/assets/font-awesome/css');
    mix.copy('node_modules/font-awesome/fonts', 'public/assets/font-awesome/fonts');

    mix.browserSync({
        proxy: 'sadoyan.dev'
    });
});


/*
gulp.on('task_start', function (e) {
    // only start LiveReload server if task is 'watch'
    if (e.task === 'watch') {
        livereload.listen();
    }
});
gulp.task('watch-lr-css', function () {
    // notify a CSS change, so that livereload can update it without a page refresh
    livereload.changed('app.css');
});
gulp.task('watch-lr', function () {
    // notify any other changes, so that livereload can refresh the page
    livereload.changed('app.js');
});
*/

