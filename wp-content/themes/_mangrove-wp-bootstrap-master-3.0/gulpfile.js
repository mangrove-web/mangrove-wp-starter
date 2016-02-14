var gulp       = require( 'gulp'              );
var less       = require( 'gulp-less'         );
var sourcemaps = require( 'gulp-sourcemaps'   );
var autoprefix = require( 'gulp-autoprefixer' );
var notify     = require( 'gulp-notify'       );
var plumber    = require( 'gulp-plumber'      );
var cssnano    = require( 'gulp-cssnano'      );

function onError( error ){
	notify.onError( {
		title:    "Gulp",
		subtitle: "Failure!",
		message:  "Error: <%= error.message %>",
		sound:    "Beep"
	} )( error );
	this.emit('end');
}

gulp.task('styles', function() {
	gulp.src( ['library/styles/less/*.less', '!library/styles/less/_*'] )  // compile all .less files except those that start with _
		.pipe( plumber( { errorHandler: onError } ) )
		.pipe( sourcemaps.init()                    )
		.pipe( less()                               )
		.pipe( autoprefix()                         )
		.pipe( cssnano()                            )
		.pipe( sourcemaps.write( '../maps/' )       )
		.pipe( gulp.dest('library/styles/css')      )
		.pipe( notify({
			title: "Gulp",
			subtitle: 'Success',
			message: "gulp complete"
		}) )
});

//Watch task
gulp.task('default',function() {
	gulp.watch('library/styles/less/**/*.less',['styles']);
});
