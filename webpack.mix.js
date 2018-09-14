var dmn = 'mdb';
// var dmn = 'olympos';
// var dmn = 'gc000';
// var dmn = 'c57';
// var dmn = 'demo';

var mix = require('laravel-mix'),
theme='./themes/' + dmn;

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.setPublicPath(theme + '/assets/');

mix

.sass( theme + '/assets/sass/style.scss', 'dist/css')
.sass( theme + '/assets/sass/a.scss', 'dist/css')

.styles(
    [
        theme + '/assets/dist/css/style.css',
        theme + '/assets/dist/css/a.css'
    ],
    theme + '/assets/dist/css/all.css'   )
    
    .js(theme + '/assets/js/app.js',
    'dist/js')
    ;

mix.browserSync({
    proxy: 'c57',
    host: 'c57',
    notify: true,
    files: [
        theme + '/assets/sass/*.scss',
        './plugins/grcote7/**/*.htm',
        './plugins/grcote7/**/*.php',
        theme + '/**/*.htm',
        theme + '/assets/js/*.js'
    ]
})

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.less(src, output);
// mix.stylus(src, output);
// mix.browserSync('wl:3000');
// mix.combine(files, destination);
// mix.babel(files, destination); //<-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });
