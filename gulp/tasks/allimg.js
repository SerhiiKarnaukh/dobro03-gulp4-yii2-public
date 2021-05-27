module.exports = function () {
  $.gulp.task('allimg', function () {
    return $.gulp.src('files/*.{jpg,png}')
        .pipe($.gulp.dest('files/img/'));
  });
};