var gulp    = require('gulp'),
    gutil   = require('gulp-util'),
    uglify  = require('gulp-uglify'),    
    concat  = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    sourcemaps = require('gulp-sourcemaps'),
    watch      = require('gulp-watch'),
    minifyCss  = require('gulp-minify-css'),
    del        = require('del');

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
    css: [ 'css/*.css', 
           'css/**/*.css',
           'css/ihover/src/*.min.css',
           'js/bootstrap/css/*.min.css',
           'js/fancyBox/source/*.css',
           'js/fancyBox/source/helpers/*.css',
           
           'js/owl-carousel/*.css',
           
           '!css/all.min.css' 
    ],
    images: [ 'img_dev/**/*' ]
};

  
gulp.task('clean', function() {
  del(['js/build/','img/','css/all.min.css']);
});


gulp.task('scripts', [], function() {
  return gulp.src(paths.scripts)
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(concat('all.min.js'))
    .pipe(sourcemaps.write())    
    .pipe(gulp.dest('js/build'));
});


gulp.task('css', [], function() {
  return gulp.src(paths.css)
    .pipe(sourcemaps.init())
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(concat('all.min.css'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('css'));
});


gulp.task('images', [], function() {
  return gulp.src(paths.images)
    .pipe(imagemin({optimizationLevel: 5}))
    .pipe(gulp.dest('img'));
});


gulp.task('watch', function() {
  gulp.watch(paths.scripts, ['scripts']);
  gulp.watch(paths.css, ['css']);
  gulp.watch(paths.images, ['images']);
});

gulp.task('default', ['clean', 'watch', 'scripts', 'css', 'images']);