var gulp = require('gulp'),
    gutil = require('gulp-util'),
    compass = require('gulp-compass'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

//var sassSources = ['sites/all/modules/custom/anova_tcpdf/sass/anova_tcpdf_style.scss'];
var sassSources = ['sites/all/modules/custom/fntsite_mpdf/sass/fntsite_mpdf_style.scss'];

var config = {
  files: sassSources,
  proxy: "http://fntsite/",
}

gulp.task('log', function() {
  gutil.log('Workflow James')
});

gulp.task('compass', function() {
  gulp.src(sassSources)
    .pipe(compass({
      sass: 'sites/all/modules/custom/fntsite_mpdf/sass',
      style: 'expanded',
      sourceComments: 'map',
      sourcemap: true,
      line_comments: true
    })
      .on('error', gutil.log))
    .pipe(gulp.dest('sites/all/modules/custom/fntsite_mpdf/css'))
    .pipe(reload({stream:true}));
});

gulp.task('browser-sync', function(){
  browserSync(config);
});

gulp.task('watch', function(){
  gulp.watch(sassSources, ['compass']);
});

gulp.task('default', ['compass', 'browser-sync', 'watch']);