const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/dashboard.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .postCss('resources/css/tailwind.css','public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .sass('resources/css/login_register/no-scroll.scss', 'public/css/login_register')
    .sass('resources/css/login_register/login.scss', 'public/css/login_register')
    .sass('resources/css/login_register/register.scss', 'public/css/login_register')
    .postCss('resources/css/dashboard.css', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
