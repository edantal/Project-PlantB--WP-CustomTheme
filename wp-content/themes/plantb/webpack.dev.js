const path = require('path');

let config = {
  mode: 'development',
  entry: {
    scripts: path.resolve(__dirname, './assets/js/scripts.js'),
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: ['babel-loader']
      },
      {
        test: /\.(s(a|c)ss|css)$/,
        use: ['style-loader', 'css-loader', 'sass-loader']
      }
    ]
  },
  resolve: {
    extensions: ['*', '.js', '.jsx']
  },
  devtool: 'eval-source-map',
  output: {
    filename: 'scripts.js',
    publicPath: 'http://localhost:3000/'
  },
  plugins: [
    
  ],
  devServer: {
    before: function (app, server) {
      // server._watch(['./**/*.php', './**/*.js'])
      server._watch(['./**/*.php', '!./functions.php'])
    },
    public: 'http://localhost:3000',
    publicPath: 'http://localhost:3000/',
    disableHostCheck: true,
    contentBase: path.join(__dirname),
    contentBasePublicPath: 'http://localhost:3000/',
    hot: true,
    port: 3000,
    headers: {
      'Access-Control-Allow-Origin': '*'
    }
  }
}

module.exports = config;