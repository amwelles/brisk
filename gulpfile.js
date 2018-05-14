// Require packages
var gulp = require('gulp');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');
var minify = require('gulp-minify-css');
var babelMinify = require('gulp-babel-minify');
var rename = require('gulp-rename');

// Do CSS things
gulp.task('css', function() {
	var plugins = [
		cssnext()
	];
	return gulp.src('./style.css')
		.pipe(postcss(plugins))
		.pipe(minify({ keepBreaks: true }))
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('./'))
});

// Do JS things
gulp.task('js', function() {
	return gulp.src('./functions.js')
		.pipe(babelMinify())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('./'))
});

// Watch things
gulp.task('watch', function() {
	gulp.watch(['./style.css', './functions.js'], gulp.parallel('css', 'js'));
});

gulp.task('default', gulp.series(gulp.parallel('css', 'js'), 'watch'));
