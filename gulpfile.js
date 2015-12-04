var gulp         = require('gulp')               // the main guy
var rename       = require('gulp-rename')        // rename files in a stream
var stylus       = require('gulp-stylus')        // turn stylus code into css
var plumber      = require('gulp-plumber')       // handle errors
var sourcemap    = require('gulp-sourcemaps')    // write sourcemaps
var minifycss    = require('gulp-minify-css')    // minify css code
var autoprefix   = require('gulp-autoprefixer')  // prefix any css with low support
var elixir 		 = require('laravel-elixir');

elixir(function(mix) {

    // Application Scripts
    mix.scripts([
        '../../../resources/scripts/app.js'
    ], 'public/js/app.js');

});


gulp.task('css', function(){
	var stream = gulp.src('resources/assets/stylus/main.styl')      // grab our stylus file
		.pipe(plumber())                         // stop syntax errors crashing the watch
		.pipe(sourcemap.init())                  // get ready to write a sourcemap
		.pipe(stylus())                          // turn the stylus into css
		.pipe(sourcemap.write())                 // write the sourcemap
		.pipe(autoprefix('last 2 versions'))     // autoprefix the css code
		.pipe(gulp.dest('public/dist/css'))                // save it into the dist folder
		.pipe(minifycss())                       // minify it (removes the sourcemap)
		.pipe(sourcemap.write())                 // write the sourcemap again
		.pipe(rename('style.min.css'))           // add .min to the filename
		.pipe(gulp.dest('public/dist/css/'))                // save it into the dist folder
	
	return stream
})

gulp.task('watch', ['css'], function(){
	gulp.watch(['resources/assets/stylus/main.styl'], ['css'])      // watch for changes and run the css task
})

gulp.task('default', ['css'])