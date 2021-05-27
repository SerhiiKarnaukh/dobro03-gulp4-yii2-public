global.$ = {
  gulp: require('gulp'),
  gp: require('gulp-load-plugins')(),
  browserSync: require('browser-sync').create(),
  del: require('del'),
  imageminJpegRecompress: require('imagemin-jpeg-recompress'),
  pngquant: require('imagemin-pngquant'),
  path: {
    config: require('./gulp/config'),
    jquery: './js_all/jquery.js',
    js: './js_all/**/*.js',
  }
};

$.path.config.forEach(function (path) {
  require(path)();
});