let mix = require('laravel-mix');
var SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */ 

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/theme.scss', 'public/css');

//this is what generates the service-worker.js file on your public folder
mix.webpackConfig({
    plugins: [
    new SWPrecacheWebpackPlugin({
        cacheId: 'pwa',
        filename: 'service-worker.js',
        staticFileGlobs: ['public/**/*.{css,eot,svg,ttf,woff,woff2,js,html}'],
        minify: true,
        stripPrefix: 'public/',
        handleFetch: true,
        dynamicUrlToDependencies: { 
         //'/': ['resources/views/pages/index.blade.php', 'resources/views/layouts/app.blade.php', 'resources/views/inc/navbar.blade.php', 'resources/views/inc/main.blade.php', 'resources/views/inc/footer.blade.php'],
         //'/palettes/catalog': ['resources/views/pages/palette/catalog/catalog.blade.php', 'resources/views/layouts/app.blade.php', 'resources/views/inc/navbar.blade.php', 'resources/views/inc/footer.blade.php'],
         //'/palettes/show': ['resources/views/pages/palette/catalog/show.blade.php'],
         //'/gradients/catalog': ['resources/views/pages/gradients/catalog/catalog.blade.php', 'resources/views/layouts/app.blade.php', 'resources/views/inc/navbar.blade.php', 'resources/views/inc/footer.blade.php'],
         //'/gradients/show': ['resources/views/pages/gradients/catalog/show.blade.php'],
         //'/login':['resources/views/auth/login.blade.php', 'resources/views/layouts/app.blade.php', 'resources/views/inc/navbar.blade.php', 'resources/views/inc/footer.blade.php'],
         //'/register':['resources/views/auth/register.blade.php', 'resources/views/layouts/app.blade.php', 'resources/views/inc/navbar.blade.php', 'resources/views/inc/footer.blade.php'],
         //'/home':['resources/views/home.blade.php', 'resources/views/layouts/app.blade.php', 'resources/views/inc/navbar.blade.php', 'resources/views/inc/footer.blade.php']
        },
        staticFileGlobsIgnorePatterns: [/\.map$/, /mix-manifest\.json$/, /manifest\.json$/, /service-worker\.js$/],
        
        runtimeCaching: [
            {
                urlPattern: /^https:\/\/fonts\.googleapis\.com\//,
                handler: 'cacheFirst'
            },
            {
                urlPattern: /^https:\/\/fonts\.gstatic\.com/,
                handler: 'cacheFirst'
            },
            {
                urlPattern: /^https:\/\/use\.fontawesome\.com\/releases\/v5.5.0\/css\/all\/.css/,
                handler: 'cacheFirst'
            },  
            {
                urlPattern: /^https:\/\/stackpath\.bootstrapcdn\.com\/bootstrap\/4.2.1\/css\/bootstrap\/.min\/.css/,
                handler: 'cacheFirst'
            },
        ],
        // importScripts: ['./js/push_message.js']
    })
    ]
});