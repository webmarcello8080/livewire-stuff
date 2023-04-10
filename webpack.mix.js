let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss'); /* Add this line at the top */

mix.js('resources/js/app.js', 'js')
    .sass('resources/sass/app.scss', 'css')
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .sourceMaps();
