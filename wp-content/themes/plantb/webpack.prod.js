const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const { WebpackManifestPlugin } = require('webpack-manifest-plugin');
const fse = require('fs-extra');

class RunAfterCompile {
  apply(compiler) {
    compiler.hooks.done.tap('Update functions.php', function() {
      const manifest = fse.readJsonSync('./bundled-assets/manifest.json');

      fse.readFile('./functions.php', 'utf8', function (err, data) {
        if(err) {
          console.log(err);
        }

        const scriptsRegEx = new RegExp("/bundled-assets/scripts.+?'", "g");
        const vendorsRegEx = new RegExp("/bundled-assets/vendors.+?'", "g");
        const cssRegEx = new RegExp("/bundled-assets/styles.+?'", "g");

        let result = data.replace(scriptsRegEx, `/bundled-assets/${manifest['scripts.js']}'`).replace(vendorsRegEx, `/bundled-assets/${manifest['vendors.js']}'`).replace(cssRegEx, `/bundled-assets/${manifest['scripts.css']}'`);

        fse.writeFile('./functions.php', result, 'utf8', function (err) {
          if(err) return console.log(err);
        });
      });
    });
  }
}

let config = {
  mode: 'production',
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
        test: /\.(scss|css)$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
      }
    ]
  },
  resolve: {
    extensions: ['*', '.js', '.jsx']
  },
  output: {
    publicPath: '/wp-content/themes/plantb/bundled-assets/',
    filename: '[name].[chunkhash].js',
    chunkFilename: '[name].[chunkhash].js',
    path: path.resolve(__dirname, './bundled-assets'),
  },
  optimization: {
    splitChunks: {
      cacheGroups: {
        vendor: {
          test: /[\\/]node_modules[\\/]/,
          name: 'vendors',
          chunks: 'all',
        }
      }
    }
  },
  plugins: [
    new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: 'styles.[chunkhash].css',
    }),
    new WebpackManifestPlugin({
      publicPath: ''
    }),
    new RunAfterCompile()
  ],
  devServer: {
    contentBase: path.resolve(__dirname, './bundled-assets'),
  },
  performance: {
    hints: false,
    maxEntrypointSize: 512000,
    maxAssetSize: 512000
  }
}

module.exports = config;
