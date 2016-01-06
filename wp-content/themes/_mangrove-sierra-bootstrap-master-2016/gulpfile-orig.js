var gulp         = require('gulp'),
    plumber      = require('gulp-plumber'),
    rename       = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss    = require('gulp-minify-css'),
    less         = require('gulp-less'),
    notify       = require('gulp-notify'),
    notifier     = require('node-notifier'),
    sourcemaps   = require('gulp-sourcemaps');

function onError( error ){
    notify.onError( {
        title:    "Gulp",
        subtitle: "Failure!",
        message:  "Error: <%= error.message %>",
        sound:    "Beep"
  } )( error );
    this.emit('end');
}

gulp.task('styles', function(){
  gulp.src(['library/less/wp.less'])
    .pipe( plumber( { errorHandler: onError } ) )
    .pipe( sourcemaps.init() )
    .pipe( less() )
    .pipe( autoprefixer('last 2 versions') )
    .pipe( gulp.dest('library/css/') )
    .pipe( rename({suffix: '.min'}) )
    .pipe( minifycss() )
    .pipe( sourcemaps.write() )
    .pipe( gulp.dest('library/css/') )
    .pipe( notify({
            title: "Gulp",
            subtitle: 'Success',
            message: "gulp complete"
        }) )

});


gulp.task('default', function(){
  gulp.watch("library/less/**/*.less", ['styles']);
  notifier.notify( {
    title: 'Gulp Ready',
    message: 'Watching LESS files'
  } );
});
