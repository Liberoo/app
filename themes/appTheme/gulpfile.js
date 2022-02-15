var gulp = require('gulp');
var browserSync = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));
gulp.task('sass', function () {
    return gulp.src("./scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("./css"))
        .pipe(browserSync.stream());
});
gulp.task('editor', function () {
    return gulp.src("./editor-style.scss")
        .pipe(sass())
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
});
gulp.task('blocks', function () {
    return gulp.src("blocks/scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("blocks/css/"))
        .pipe(browserSync.stream());
});

gulp.task('serve', gulp.series('sass', function () {
    browserSync.init({
        proxy: 'app.test'
    });

    gulp.watch("./scss/*.scss", gulp.series('sass'));
    gulp.watch("./editor-style.scss", gulp.series('editor'));
    gulp.watch("./blocks/scss/*.scss", gulp.series('blocks'));
    gulp.watch("page.php").on('change', browserSync.reload);
    gulp.watch("./themeSection/section-header.php").on('change', browserSync.reload);
    gulp.watch("./themeSection/section-footer.php").on('change', browserSync.reload);

}));

gulp.task('default', gulp.series('serve'));