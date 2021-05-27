module.exports = function () {
  $.gulp.task('php', function () {
    return $.gulp.src('**/*.php')
        .on('end', $.browserSync.reload);
  });
};