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
        host: '192.168.1.104',
        proxy: {
            target: "https://bigtime.loc/wp-content/themes/bigtime/html/",
        },
        https: {
            key: "localhost-key.pem",
            cert: "localhost.pem"
        }
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
        .pipe(rename(function(path) {
            path.extname = ".php";
        }))
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
        .pipe(sourcemaps.write("source-maps"))
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
        .pipe(rename({ suffix: ".min" }))
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
    Version
/////////////////////////////////////////*/

const fs = require("fs");
function writeVersion(cb) {
    const now = new Date();
    const pad = (n) => n.toString().padStart(2, "0");
    const formatted = `${now.getFullYear()}-${pad(now.getMonth() + 1)}-${pad(now.getDate())}-${pad(now.getHours())}-${pad(now.getMinutes())}-${pad(now.getSeconds())}`;
    fs.writeFileSync("../version.txt", formatted + "\n");
    cb();
}

/*////////////////////////////////////////
    Watch PHP
/////////////////////////////////////////*/
function watchPhp() {
    gulp.watch("../**/*.php", browserSyncReload);
}

/*////////////////////////////////////////
    Process
/////////////////////////////////////////*/

// Watch files
function watchFiles() {
    gulp.watch(["page/**/*", "partial/**/*", "layout/**/*"], gulp.series(html, writeVersion));
    gulp.watch("styles/**/*", gulp.series(styles, stylesMaps, writeVersion));
    gulp.watch("styles-print/**/*", gulp.series(stylesPrint, writeVersion));
    gulp.watch("js/**/*.js", gulp.series(scripts, writeVersion));
    gulp.watch("js-copy/*.js", gulp.series(copyScripts, writeVersion));
    watchPhp();
}

const watch = gulp.parallel(watchFiles, browserSync);
const build = gulp.series(styles, stylesMaps, stylesPrint, scripts, copyScripts);

// export tasks
exports.watch = watch;
exports.build = build;
