const mix = require('laravel-mix');

mix
    .js('assets/src/js/app.js', 'assets/dist/js')
    .sass('assets/src/scss/app.scss', 'assets/dist/css')
    //.copy('assets/src/fonts', 'assets/dist/fonts')



//.sass('assets/src/scss/fonts.scss', 'assets/dist/fonts')
//mix.config.fileLoaderDirs.fonts = 'dist/font';