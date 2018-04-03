var gulp = require('gulp');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');

gulp.task('css', function() {
	var plugins = [
		cssnext()
	];
	return gulp.src('./src/*.css')
		.pipe(postcss(plugins))
		.pipe(gulp.dest('./min'));
});

gulp.task('watch', ['css'], function() {
	gulp.watch('./src/*.css', ['css']);
});

gulp.task('default', ['watch']);
