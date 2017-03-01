const elixir = require('laravel-elixir');

const gulp = require('gulp');
const uncss = require('gulp-uncss');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourceMaps = require('gulp-sourcemaps');
const changed = require('gulp-changed');
const imagemin = require('gulp-imagemin');
const imageminPngquant = require('imagemin-pngquant');
const sequence = require('gulp-sequence');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');
const babel = require('gulp-babel');
//const browserSync = require('laravel-elixir-browsersync-official');

let config = {
    dist: 'public/',
    src: 'resources/assets/',
    imgin: 'resources/assets/img/**/*.{jpg,jpeg,png,gif}',
    imgout: 'public/img/',
    scssin: 'resources/assets/sass/**/*.scss',
    cssout: 'public/css/',
    jsin: [
        'resources/assets/js/bootstrap.js',
        'resources/assets/js/app.js'
    ],
    jsout: 'public/js/',
    htmlin: 'src/*.html',
    notnode: '!node_modules/**'
};
//
//gulp.task('default', function() {
//    console.log("Add a gulp's parameter!");
//});
//
gulp.task('css', function() {
    return gulp.src(config.scssin)
        .pipe(sourceMaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 3 versions']
        }))
        .pipe(sourceMaps.write())
        .pipe(cleanCSS())
        .pipe(gulp.dest(config.cssout))
});

gulp.task('js', function() {
    return gulp.src(config.jsin)
        .pipe(sourceMaps.init())
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(concat('app.js'))
        .pipe(rename('app.min.js'))
        .pipe(sourceMaps.write())
        .pipe(uglify().on('error', function(e){
            console.log(e);
        }))
        .pipe(gulp.dest(config.jsout))
});
gulp.task('img', function() {
    return gulp.src(config.imgin)
        .pipe(changed(config.imgout))
        .pipe(imagemin({
            progressive: true,
            use: [imageminPngquant()]
        }))
        .pipe(gulp.dest(config.imgout));
});

gulp.task('config', function() {
    sequence(['css', 'js']);
});

gulp.task('reload', function() {
    browserSync.reload();
});

gulp.task('build', ['config'], function() {
    browserSync({
        server: config.dist
    });

    gulp.watch(config.jsin, ['js', 'reload']);
    gulp.watch(config.scssin, ['css', 'reload']);
});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(config.scssin, config.cssout);
    mix.webpack(config.jsin, config.jsout);
    mix.browserSync({
        proxy: '127.0.0.1:8000'
    });
});
