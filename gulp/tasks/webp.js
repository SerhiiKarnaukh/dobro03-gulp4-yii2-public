module.exports = function () {
  $.gulp.task('webp', function () {
    return $.gulp.src('files/*.{png,jpg}')
        .pipe($.gp.webp({quality: 90}))
        .pipe($.gulp.dest('files/img'));
  });
};