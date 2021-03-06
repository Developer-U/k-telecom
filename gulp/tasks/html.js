import fileInclude from 'gulp-file-include'         // соединяет файлы между собой
import webpHtmlNosvg from 'gulp-webp-html-nosvg'    // подключение форматов webp
import htmlMin from 'gulp-htmlmin'

export const html = () => {
  return app.gulp.src(app.path.src.html)
    .pipe(app.plugins.plumber(
      app.plugins.notify.onError({
        title: 'HTML',
        message: 'Error: <%= error.message %>'
      })
    ))
    // .pipe(fileInclude())
    // .pipe(app.plugins.replace(/@img\//g, 'img/'))
    // .pipe(app.plugins.if(app.isBuild, webpHtmlNosvg()))
    .pipe(htmlMin({
      collapseWhitespace: true
    }))
    .pipe(app.gulp.dest(app.path.build.html))
    .pipe(app.plugins.browserSync.stream())
}
