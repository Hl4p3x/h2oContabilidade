var gulp = require("gulp");

// auto include plugins
// use like plugin.pluginname 
var plugins = require("gulp-load-plugins")({
	pattern: ['gulp-*', 'gulp.*', 'imagemin-jpeg-recompress', 'imagemin-pngquant'],
	replaceSting: /\bgulp[\-.]/,
	rename: {
		'gulp-ruby-sass': 'sass',
		'imagemin-jpeg-recompress': 'imageminJpeg',
		'imagemin-pngquant': 'imageminPng'
	}
});

// Js
// Concat + Minifiy Js Files and move to vendor folder
var jsFiles = ['assets/js/plugins/*.js'];
var jsDest = 'assets/js/';

gulp.task('js', function () {
	gulp.src(jsFiles)
		.pipe(plugins.order([
			'jquery.min.js',
			'bootstrap.min.js',
			'*.js',
		]))
		.pipe(plugins.concat('plugins.js'))
		.pipe(gulp.dest(jsDest))
		.pipe(plugins.rename({ suffix:'.min' }))
		.pipe(plugins.uglify())
		.pipe(gulp.dest(jsDest));
});

// Css
// Concat + Minifiy Css Files and move to vendor folder
var cssFiles = 'assets/css/plugins/*.css';
var cssDest = 'assets/css/';

gulp.task('css', function () {
	gulp.src(cssFiles)
		.pipe(plugins.order([
			'bootstrap.min.css',
			'*.css'
		]))
		.pipe(plugins.concat('plugins.css'))
		.pipe(gulp.dest(cssDest))
		.pipe(plugins.rename({ suffix:'.min' }))
		.pipe(plugins.cssmin())
		.pipe(gulp.dest(cssDest));
});

// Sass
var sassFile = 'assets/sass/style.scss';
var sassDest = 'assets/css/';
gulp.task('sass', function () {
	return plugins.sass(sassFile, {style: 'expanded'}) // compressed - compact - nested 
		.pipe(gulp.dest(sassDest));
});

// Images - Optimize jpeg and png images
gulp.task('imagemin', function () {
	return gulp.src('assets/images/**/*')
	    .pipe(plugins.imageminJpeg({loops: 3})())
	    .pipe(plugins.imageminPng({quality: '65-80', speed: 4})())
	    .pipe(gulp.dest('assets/images'));
});

// call - gulp htmlmin
// Html files minify 
// this will make your html files minified 
// make sure to copy all html files before using this
gulp.task('htmlmin', function () {
  return gulp.src('*.html')
    .pipe(plugins.htmlmin({
    	collapseWhitespace: true,
    	removeComments: true,
    	minifyJS: true, // minify js too
    	minifyCSS: true // minify css too
    }))
    .pipe(gulp.dest(''))
});

gulp.task('watch', function () {
	// watch js files
	gulp.watch(jsFiles, ['js']);
	// watch scss files
	gulp.watch('assets/sass/*.scss', ['sass']);
	// watch scss files
	gulp.watch(cssFiles, ['css']);
	// watch images not good to use like this and watch images
	// gulp.watch('assets/images/**/*', ['imagemin']);
});

// Default Task
gulp.task('default', ['watch']);