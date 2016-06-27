var autoprefix = require( 'gulp-autoprefixer' );
var concat 		 = require( 'gulp-concat'			  );
var cssnano    = require( 'gulp-cssnano'      );
var gulp       = require( 'gulp'              );
var modernizr  = require( 'gulp-modernizr'    );
var notify     = require( 'gulp-notify'       );
var plumber    = require( 'gulp-plumber'      );
var sass       = require( 'gulp-sass'         );
var sourcemaps = require( 'gulp-sourcemaps'   );
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

gulp.task( 'javascript-static', function(){
	return gulp.src( 'library/js/src-static/*.js' )
		.pipe( plumber( { errorHandler: onError } ) )
		.pipe( uglify()                             )
		.pipe( gulp.dest( 'library/js/min' )        )
		.pipe( notify( {
			title: "Gulp JavaScript Static",
			subtitle: "Success Static",
			message: "JavaScript Static minified"
		}))
})

gulp.task( 'javascript-concat', function(){
	return gulp.src( 'library/js/src-concat/*.js')
		.pipe( plumber( { errorHandler: onError } ) )
		.pipe( sourcemaps.init()                    )
		.pipe( concat( 'mangrove-custom.js' )		  	)
		.pipe( uglify()                             )
		.pipe( sourcemaps.write( '../maps' )        )
		.pipe( gulp.dest( 'library/js/min' )        )
		.pipe( notify( {
			title: "Gulp JavaScript Concatonated",
			subtitle: "Success JS Concatonated",
			message: "JavaScript Minified & Concatonated"
		}))
})

gulp.task( 'modernizr', ['javascript-static', 'javascript-concat'], function(){
	/* This detects Modernizr features used in .js files in /library/js/src and
	 * builds a custom minified modernizr.js file with only the detected tests.
	 * If you are using a Modernizr API option, you will need to add that to the
	 * options array.
	 */
	return gulp.src([ 'library/js/src-concat/*.js', 'library/js/src-static/*.js' ])
		.pipe(
			modernizr(
				{
					"files": [ "library/js/src-concat/*.js", 'library/js/src-static/*.js' ],
					"options": [
						// this is not a complete list.
						// "setClasses
						// "addTest
						// "html5printshiv",
						// "testProp
						// "fnBind",
						// "hasEvent
					]
				}
			)
		)
		.pipe( uglify() )
		.pipe( gulp.dest("library/js/min") )
})

//Watch task
gulp.task('default',function() {
	gulp.watch( 'library/styles/sass/**/*.{sass,scss}'			 , ['styles']     );
	gulp.watch( 'library/js/src-concat/**/*.js'              , ['modernizr']  );
	gulp.watch( 'library/js/src-static/**/*.js'              , ['modernizr']  );
});

//Build task
gulp.task('build', ['styles','modernizr']);
