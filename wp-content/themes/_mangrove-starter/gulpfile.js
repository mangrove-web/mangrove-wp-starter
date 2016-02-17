var gulp       = require( 'gulp'              );
var sass       = require( 'gulp-sass'         );
var sourcemaps = require( 'gulp-sourcemaps'   );
var autoprefix = require( 'gulp-autoprefixer' );
var notify     = require( 'gulp-notify'       );
var plumber    = require( 'gulp-plumber'      );
var cssnano    = require( 'gulp-cssnano'      );
var uglify     = require( 'gulp-uglify'       );

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
	return gulp.src( 'library/styles/sass/*' )
		.pipe( plumber( { errorHandler: onError } ) )
		.pipe( sourcemaps.init()                    )
		.pipe( sass()                               )
		.pipe( autoprefix()                         )
		.pipe( cssnano()                            )
		.pipe( sourcemaps.write( '../maps/' )       )
		.pipe( gulp.dest('library/styles/css')      )
		.pipe( notify({
			title: "Gulp SASS",
			subtitle: 'Success',
			message: "SASS Compiled"
		}) )
});

gulp.task( 'javascript', function(){
	return gulp.src( 'library/js/src/*' )
		.pipe( plumber( { errorHandler: onError } ) )
		.pipe( sourcemaps.init()                    )
		.pipe( uglify()                             )
		.pipe( sourcemaps.write( '../maps' )        )
		.pipe( gulp.dest( 'library/js/min' )        )
		.pipe( notify( {
			title: "Gulp JavaScript",
			subtitle: "Success",
			message: "JavaScript minified"
		}))
})

//Watch task
gulp.task('default',function() {
	gulp.watch( 'library/styles/sass/**/*.{sass,scss}', ['styles']     );
	gulp.watch( 'library/js/src/**/*.js'              , ['javascript'] );
});
