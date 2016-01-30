var gulp    = require('gulp'),
    gutil   = require('gulp-util'),
    uglify  = require('gulp-uglify'),    
    concat  = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    sourcemaps = require('gulp-sourcemaps'),
    del     = require('del');

var paths = {
    scripts: [ 'js/**/*.js', 
               'js/ie10-viewport-bug-workaround.js',
               'js/fancyBox/source/*.js',
               'js/fancyBox/**/*.js',
               
               '!js/build/*.js'
    ],
    images: ['img/logo/*']
};


gulp.task('clean', function(cb) {
  del(['build'], cb);
});


gulp.task('scripts', ['clean'], function() {
  return gulp.src(paths.scripts)
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(concat('all.min.js'))
    .pipe(sourcemaps.write())    
    .pipe(gulp.dest('js/build'));
});


gulp.task('images', ['clean'], function() {
  return gulp.src(paths.images)
    .pipe(imagemin({optimizationLevel: 5}))
    .pipe(gulp.dest('img/build'));
});


gulp.task('watch', function() {
  gulp.watch(paths.scripts, ['scripts']);
  gulp.watch(paths.images, ['images']);
});

gulp.task('default', ['watch', 'scripts', 'images']);