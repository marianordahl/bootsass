var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    livereload = require('gulp-livereload'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    plumber = require('gulp-plumber');

var config = {
    vendorPath: ""
};

var jsFiles = [
    config.vendorPath + '/jquery/dist/jquery.js',
    'app/assets/js/lms.admin.user.courses.js'
];


function combineCss(files, outputPath) {

      return sass('sass/main.sass')
        .pipe(plumber())
        //.pipe(sourcemaps.init())
        
        .pipe(autoprefixer({
            browser: ['last 3 versions'],
            cascade: false
        }))
        //.pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(outputPath))
        .pipe(livereload());
}

gulp.task('css:frontend', function () {
    combineCss([
        "sass/main.sass"
    ], 'css/');
});

/** JAVASCRIPT **/
gulp.task('scripts', function () {
    gulp.src(jsFiles)
        .pipe(concat({path: 'main.js'}))
        .pipe(gulp.dest('js/'))
        .pipe(livereload());
});

gulp.task('uglify', function () {

    gulp.src('js/main.js')
        .pipe(uglify())
        .pipe(gulp.dest('js/'));
});

gulp.task('watch', function () {
    livereload.listen();

    gulp.watch('sass/**/*.{scss,sass}', ['css:frontend']);
    /* Watches the sass folder for changes (in .scss or .sass files) and executes the css:frontend task. 
    To add more tasks as default add them like this: ['css:frontend, other:task'] */
    //gulp.watch('app/assets/js/**/*.js', ['build-js']);
});

/** QUICK COMMANDS */

gulp.task('default', ['watch']);

gulp.task('build', ['css:frontend', 'scripts', 'uglify']);