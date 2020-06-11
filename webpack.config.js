var Encore = require('@symfony/webpack-encore');

Encore
    // directory where compiled assets will be stored
    .setOutputPath('web/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    //JAVASCRIPT
    .addEntry('app', './assets/js/app.js')
    .addEntry('navbar', './assets/js/navbar.js')
    .addEntry('home_page', './assets/js/home_page.js')
    .addEntry('footer', './assets/js/footer.js')
    .addEntry('post_page', './assets/js/post_page.js')

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()

    // enable just the one you want

    // processes files ending in .scss or .sass
    .enableSassLoader()

    // processes files ending in .less
    .enableLessLoader()

    // processes files ending in .styl
    .enableStylusLoader()

    //.enableReactPreset()
;

module.exports = Encore.getWebpackConfig();