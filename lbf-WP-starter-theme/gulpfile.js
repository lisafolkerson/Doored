var gulp = require ( 'gulp' );
var sass = require ( 'gulp-sass' );
var notify = require ( 'gulp-notify' );


// Here we define the list of things to happen when we run gulp styles
gulp.task( 'styles', function() {
	gulp.src( 'wp-content/themes/LBF-Doored-Theme/styles/styles.scss' )
	.pipe( sass({errLogToConsole : true}))
	.pipe( gulp.dest('wp-content/themes/LBF-Doored-Theme/' ))
	.pipe( notify ( 'CSS Compiled' ));
	});

gulp.task( 'watch', function() {
	gulp.watch('wp-content/themes/LBF-Doored-Theme/styles/*.scss',['styles'])
	});