var gulp    = require('gulp'),
    gutil   = require('gulp-util'),
    uglify  = require('gulp-uglify'),    
    concat  = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    sourcemaps = require('gulp-sourcemaps'),
    watch   = require('gulp-watch'),
    del     = require('del');

var paths = {
    scripts: [ 'js/fancyBox/source/*.js',
               'js/fancyBox/source/**/*.js',
               'js/fancyBox/lib/*.js',
               
               'js/scrollpage/**/*.js',
               
               'js/scrollup/**/*.js',
               
               'js/bootstrap/js/*.min.js',
                              
               'js/**/*.js',               
               '!js/build/*.js'
    ],
    images: [ 'img_dev/**/*'
    ]
};

  
gulp.task('clean', function() {
  del(['js/build/','img/']);
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
    .pipe(gulp.dest('img'));
});


gulp.task('watch', function() {
  gulp.watch(paths.scripts, ['scripts']);
  gulp.watch(paths.images, ['images']);
});

gulp.task('default', ['watch', 'scripts', 'images']);