const mix = require('laravel-mix');

require('laravel-mix-bundle-analyzer');

if(mix.isWatching()) {
    mix.bundleAnalyzer()
}


mix.js('resources/js/app.js', 'public/js');