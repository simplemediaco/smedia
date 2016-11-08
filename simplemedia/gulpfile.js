// include modules
require('jshint-stylish');
var gulp = require('gulp');
var	sass = require('gulp-sass');
var	sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var imagemin = require('gulp-imagemin');

var cssInput = './src/scss/**/*.scss';
var cssOutput = './dist/css';
var jsOutput = './dist/js';
var jsInput = [
	'./src/js/radio.js',
	'./src/js/checkboxOne.js',
	'./src/js/checkboxTwo.js',
	'./src/js/select.js',
	'./src/js/accordion.js',
	'./src/js/add-more-page.js',
	'./src/js/image-grid.js',
	'./src/js/navigation-menu.js',
	'./src/js/order.js',
	'./src/js/slick.js'
];

// CSS output [compressed, nested, expanded, compact]
var sassOptions = {
	errLogToConsole: true,
	outputStyle: 'compressed'
};

// sass task
gulp.task('sass', function() {
	gulp.src(cssInput)
		.pipe(sourcemaps.init())
		.pipe(sass(sassOptions).on('error', sass.logError))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest(cssOutput));
});

// js task
gulp.task('js', function() {
	gulp.src(jsInput)
		.pipe(jshint())
		.pipe(jshint.reporter('jshint-stylish'))
		.pipe(concat('main.js'))
		.pipe(uglify())
		.pipe(gulp.dest(jsOutput));
});

// imagemin task
gulp.task('imagemin', function() {
	gulp.src('dist/img/*')
		.pipe(imagemin())
		.pipe(gulp.dest('dist/img'));
});

// default gulp task this process will remain active and react to your file changes
// you won't need to type it again.
gulp.task('default', ['sass', 'js'], function() {
	// watch for scss changes
	gulp.watch(cssInput, function() {
		gulp.start('sass');
	});

	// watch for js changes
	gulp.watch(jsInput, function() {
		gulp.start('js');
	});
});
