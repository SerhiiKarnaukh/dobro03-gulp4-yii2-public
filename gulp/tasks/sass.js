module.exports = function () {
  $.gulp.task('sass', function () {
    return $.gulp.src('sass/style.scss')
        .pipe($.gp.plumber())
        .pipe($.gp.sourcemaps.init())
        .pipe($.gp.sass())
        .pipe($.gp.autoprefixer({
            cascade: false
        }))
        .pipe($.gp.csso())
        .pipe($.gp.rename('style.min.css'))
        .pipe($.gp.sourcemaps.write(''))
        .pipe($.gulp.dest('css'))
        .pipe($.browserSync.stream());
  });
};