module.exports = function () {
  $.gulp.task('build', $.gulp.series('sass', 'scripts', 'images', 'webp', 'svg'));
};