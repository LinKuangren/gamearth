'use strict'; // eslint-disable-line

const webpack = require('webpack');
const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const StyleLintPlugin = require('stylelint-webpack-plugin');
const ESLintPlugin = require('eslint-webpack-plugin');
const { WebpackManifestPlugin } = require('webpack-manifest-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');

const rootPath = process.cwd();

const assetPath = path.join(rootPath, 'assets');
const distPath = path.join(rootPath, 'dist');
const publicPath = '/wp-content/themes/gamearth/dist/';

module.exports = {
  context: assetPath,
  cache: true,
  entry: {
    'vendor': [
      './styles/vendor.scss',
    ],
    'main': [
      './scripts/main.js',
      './styles/main.scss',
    ],
  },
  optimization: {
    usedExports: true,
    splitChunks: {
      cacheGroups: {
        commons: {
          test: /[\\/]node_modules[\\/]/,
          name: 'vendors',
          chunks: 'all',
        },
      },
    },
  },
  output: {
    path: distPath,
    filename: 'scripts/[name].js',
    publicPath: publicPath,
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        loader: 'esbuild-loader',
        options: {
          target: 'es2015',
        },
      },
      {
        test: /\.scss$/,
        include: assetPath,
        use: [
          MiniCssExtractPlugin.loader,
          { loader: 'css-loader', options: { sourceMap: true } },
          { loader: 'postcss-loader', options: { sourceMap: true } },
          { loader: 'resolve-url-loader', options: { sourceMap: true } },
          { loader: 'sass-loader', options: { sourceMap: true } },
        ],
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(),
    new ESLintPlugin(),
    new RemoveEmptyScriptsPlugin(),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery',
      Util: 'exports?Util!bootstrap/js/dist/util',
    }),
    new WebpackManifestPlugin({
      fileName: 'assets-manifest.json',
      publicPath: '',
    }),
    new StyleLintPlugin({
      failOnError: false,
    }),
  ],
};
