const mix = require('laravel-mix');


const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin');
const CaseSensitivePathsPlugin = require('case-sensitive-paths-webpack-plugin');


var webpackConfig = {
    plugins: [
        new CaseSensitivePathsPlugin(),
        new VuetifyLoaderPlugin()
    ]

}


mix.webpackConfig(webpackConfig);



mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/index.js', 'public/js')
   .js('resources/js/paper-dashboard.min.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/index.scss', 'public/css')
   .sass('resources/sass/paper-dashboard.scss', 'public/css')
   .sass('resources/sass/login.scss', 'public/css')
   .sass('resources/sass/register.scss', 'public/css').version();
