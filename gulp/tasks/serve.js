module.exports = function () {
  $.gulp.task('serve', function () {
    $.browserSync.init({
      proxy: "dobro03.local",
    });

    $.gulp.watch('sass/**/*.scss', $.gulp.series('sass'));
    $.gulp.watch('frontend/**/*.php', $.gulp.series('php'));
    $.gulp.watch('backend/**/*.php', $.gulp.series('php'));
    $.gulp.watch('common/**/*.php', $.gulp.series('php'));
    $.gulp.watch('js_all/**/*.js', $.gulp.series('scripts'));
    $.gulp.watch('files/*.{png,jpg}', $.gulp.series('allimg'));
    $.gulp.watch('files/*.{png,jpg,svg}', $.gulp.series('images'));
    $.gulp.watch('files/*.{png,jpg}', $.gulp.series('webp'));
    $.gulp.watch('files/*.{svg}', $.gulp.series('svg'));

  });
};