"use strict";

/*////////////////////////////////////////
    Load plugins
/////////////////////////////////////////*/
const async = require("async");
const autoprefixer = require("autoprefixer");
const browsersync = require("browser-sync").create();
const cp = require("child_process");
const twig = require("gulp-twig");
const cssnano = require("cssnano");
const del = require("del");
const gulp = require("gulp");
const newer = require("gulp-newer");
const plumber = require("gulp-plumber");
const rename = require("gulp-rename");
const sass = require("gulp-sass")(require("sass"));
const sourcemaps = require("gulp-sourcemaps");
const postcss = require("gulp-postcss");
const consolidate = require("gulp-consolidate")
const concat = require("gulp-concat");
const uglify = require('gulp-uglify-es').default;
const copy = require("gulp-copy");
const htmlmin = require('gulp-htmlmin');

/*////////////////////////////////////////
    Borwsersync
/////////////////////////////////////////*/
function browserSync(done) {
    browsersync.init({
        server: {
            baseDir: "../"
        },
        port: 3000
    });
    done();
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}

/*////////////////////////////////////////
    HTML
/////////////////////////////////////////*/
function html() {
    return gulp
        .src(["page/**/*.twig"])
        .pipe(twig())
        .pipe(gulp.dest("../html"))
        .pipe(browsersync.stream());
}

/*////////////////////////////////////////
    Styles
/////////////////////////////////////////*/
function styles() {
    return gulp
        .src("styles/style.scss")
        .pipe(plumber())
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sass().on('error', sass.logError))
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(postcss([ autoprefixer("last 4 versions") ]))
        .pipe(gulp.dest("../assets/css/"))
        .pipe(browsersync.stream());
}

function stylesMaps() {
    return gulp
        .src("styles/style.scss")
        .pipe(plumber())
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sass().on('error', sass.logError))
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(postcss([ autoprefixer("last 4 versions") , cssnano() ]))
        .pipe(rename({ suffix: ".maps" }))
        .pipe(sourcemaps.write("source-maps"))
        .pipe(gulp.dest("../assets/css/"))
        .pipe(browsersync.stream());
}

/*////////////////////////////////////////
    Styles for print
/////////////////////////////////////////*/
function stylesPrint() {
    return gulp
        .src("styles-print/print.scss")
        .pipe(plumber())
        .pipe(sass().on('error', sass.logError))
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(postcss([cssnano() ]))
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest("../assets/css/"))
        .pipe(browsersync.stream());
}

/*////////////////////////////////////////
    Scripts
/////////////////////////////////////////*/
function scripts() {
    return gulp
        .src(["js/_vendor-plugin/*.js", "js/custom/*.js", "js/init/*.js"])
        .pipe(concat("compiled.js"))
        .pipe(gulp.dest("../assets/js"))
        .pipe(rename({suffix: ".min"}))
        .pipe(uglify())
        .pipe(gulp.dest("../assets/js"))
        .pipe(browsersync.stream());
}

/*////////////////////////////////////////
    Copy Scripts
/////////////////////////////////////////*/
function copyScripts() {
    return gulp
        .src("js-copy/*")
        .pipe(gulp.dest("../assets/js"))
        .pipe(browsersync.stream());
}

/*////////////////////////////////////////
    Copy fonts
/////////////////////////////////////////*/
function copyFonts() {
    return gulp
        .src("fonts/*")
        .pipe(gulp.dest("../assets/fonts"))
        .pipe(browsersync.stream());
}

/*////////////////////////////////////////
    Process
/////////////////////////////////////////*/

// Watch files
function watchFiles() {
    gulp.watch(["page/**/*", "partial/**/*", "layout/**/*"], html);
    gulp.watch("styles/**/*", gulp.series(styles, stylesMaps));
    gulp.watch("styles-print/**/*", stylesPrint);
    gulp.watch("js/**/*.js", scripts);
    gulp.watch("js-copy/*.js", copyScripts);
    gulp.watch("fonts/*", copyFonts);
}

const watch = gulp.parallel(watchFiles, browserSync);
const build = gulp.series(styles, stylesMaps, stylesPrint, scripts, copyScripts, copyFonts);

// export tasks
exports.watch = watch;
exports.build = build;
