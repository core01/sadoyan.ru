const TailwindExtractor = require('./TailwindExtractor.js')
module.exports = ({ file, options, env }) => {
  const tailwind = require('tailwindcss')('./tailwind.js')
  const purgeCSS = require('@fullhuman/postcss-purgecss')({
    content: [
      './pages/**/*.vue',
      './layouts/**/*.vue',
      './components/**/*.vue'
    ],
    whitelist: ['html', 'body'],
    extractors: [
      {
        extractor: TailwindExtractor,
        // Specify the file extensions to include when scanning for
        // class names.
        extensions: ['html', 'js', 'vue']
      }
    ]
  })
  const autoprefixer = require('autoprefixer')({
    browsers: ['last 2 versions', 'iOS >= 8']
  })

  const plugins = [tailwind]
  if (env !== 'development') {
    plugins.push(purgeCSS)
  }
  plugins.push(autoprefixer)
  return {
    plugins: plugins
  }
}
