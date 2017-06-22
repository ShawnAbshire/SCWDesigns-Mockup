var gulp = require('gulp');
var sass = require('gulp-sass');
var notify = require('gulp-notify');
var gutil = require('gulp-util');
var plumber = require('gulp-plumber');
var webpack = require('gulp-webpack');

var paths = {
    styles: {
        src: {
            base: 'css/scss/**/*.scss',
            admin: 'css/scss/admin.scss',
        },
        dest: 'css',
    },
}

// Error Task
var reportError = function(error) {
    var lineNumber = (error.lineNumber) ? 'LINE ' + error.lineNumber + ' -- ' : '';

    notify({
        title: 'Task Failed [' + error.plugin + ']',
        message: lineNumber + 'See console.',
    }).write(error);

    // Pretty error reporting
    var report = '';
    var chalk = gutil.colors.white.bgRed;

    report += chalk('TASK:') + ' [' + error.plugin + ']\n';
    report += chalk('PROB:') + ' ' + error.message + '\n';
    if (error.lineNumber) {
        report += chalk('LINE:') + ' ' + error.lineNumber + '\n';
    }
    if (error.fileName) {
        report += chalk('FILE:') + ' ' + error.fileName + '\n';
    }
    console.error(report);

    // Prevent the 'watch' task from stopping
    this.emit('end');
}

gulp.task('compile-css', function() {
    gulp.src(paths.styles.src.admin)
        .pipe(plumber({
            errorHandler: reportError
        }))
        .pipe(sass({
            outputStyle: "compressed",
            noCache: true
        }))
        .pipe(gulp.dest(paths.styles.dest));

    notify({
        'title': '[SASS]',
        'message': 'Admin.scss compiled successfully.',
    }).write('');
});

// Compile ES6 with WebPack
gulp.task('compile:js', function() {
    return gulp.src('src/entry.js')
        .pipe(webpack(require('./webpack.config.js')))
        .pipe(gulp.dest('js/build/'));

    notify({
        'title': '[JavaScript]',
        'message': 'JavaScript compiled successfully.',
    }).write('');
});

// Watch Tasks
gulp.task('watch', function() {
    gulp.watch(paths.styles.src.base, ['compile-css']);
});

// Default Startup Task
gulp.task('default', ['watch']);

gulp.task('updateall', [
    'compile-css'
]);