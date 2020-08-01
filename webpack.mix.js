const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
const glob = require('glob-all')
const PurgecssPlugin = require('purgecss-webpack-plugin')

class TailwindExtractor {
    static extract(content) {
        return content.match(/[A-z0-9-:\/]+/g)
    }
}

mix.postCss('resources/css/style.css', 'public/css', [
    require('tailwindcss'),
])

mix.postCss('resources/css/blog.css', 'public/css')
   .options({
        postCss: [
            tailwindcss('tailwind.js'),
        ]
   });

mix.webpackConfig({
    plugins: [
        new PurgecssPlugin({
            paths: glob.sync([
                path.join(__dirname, 'resources/views/**/*.blade.php'),
                path.join(__dirname, 'resources/assets/js/**/*.vue')
            ]),
            extractors: [{
                extractor: TailwindExtractor,
                extensions: ['html', 'js', 'php', 'vue']
            }]
        })
    ]
});
