const gulp = require("gulp"),
    clean = require("gulp-clean"),
    concatCss = require("gulp-concat-css"),
    postcss = require("gulp-postcss"),
    rename = require("gulp-rename"),
    cssnano = require("cssnano");

const sass = require("gulp-sass")(require("sass"));

gulp.task("main", function () {
    return gulp
        .src("assets/sass/main.scss")
        .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
        .pipe(
            rename(function (file) {
                file.basename = file.basename + ".min";
            })
        )
        .pipe(clean())
        .pipe(gulp.dest("assets/css"));
});

gulp.task("editor", function () {
    return gulp
        .src("assets/sass/editor.scss")
        .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
        .pipe(
            rename(function (file) {
                file.basename = file.basename + ".min";
            })
        )
        .pipe(clean())
        .pipe(gulp.dest("assets/css"));
});

gulp.task("watch", function () {
    gulp.watch(["assets/sass/**/*.scss"]).on(
        "change",
        gulp.series("main", "editor")
    );
});

gulp.task("build", gulp.series("main", "editor"));
gulp.task("default", gulp.series("main", "editor"));
