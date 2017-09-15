const gulp = require('gulp')
const uglify = require('gulp-uglify')
const babel = require('gulp-babel')
const cssnano = require('cssnano')
const del = require('del')
const runSequence = require('run-sequence')
const postcss = require('gulp-postcss')
const autoprefixer = require('autoprefixer')
const cache = require('gulp-cache')
const imagemin = require('gulp-imagemin')
const concatCss = require('gulp-concat-css')
const htmlreplace = require('gulp-html-replace')

gulp.task('minifyjs', () => {
  return gulp
    .src('app/js/functions.js')
    .pipe(
      babel({
        presets: ['es2015']
      })
    )
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'))
})

gulp.task('minifycss', () => {
  const plugins = [autoprefixer({ browsers: ['last 1 version'] }), cssnano()]
  return gulp
    .src('app/css/**/*.css')
    .pipe(concatCss('bundle.css'))
    .pipe(postcss(plugins))
    .pipe(gulp.dest('dist/css'))
})

gulp.task('moveinc', () => {
  return gulp
    .src(['app/inc/**/*'])
    .pipe(
      htmlreplace({
        css: 'css/bundle.css'
      })
    )
    .pipe(gulp.dest('dist/inc'))
})

gulp.task('moverootphp', () => {
  return gulp.src(['app/*.php']).pipe(gulp.dest('dist'))
})

gulp.task('movevid', () => {
  return gulp.src(['app/vid/*']).pipe(gulp.dest('dist/vid'))
})

gulp.task('minifyimages', () => {
  return (
    gulp
      .src('app/img/**/*.+(png|jpg|jpeg|gif|svg)')
      // Caching images that ran through imagemin
      .pipe(cache(imagemin()))
      .pipe(gulp.dest('dist/img'))
  )
})

gulp.task('clean:dist', () => {
  return del.sync('dist')
})

gulp.task('build', callback => {
  runSequence(
    'clean:dist',
    [
      'minifycss',
      'minifyjs',
      'minifyimages',
      'movevid',
      'moveinc',
      'moverootphp'
    ],
    callback
  )
})
