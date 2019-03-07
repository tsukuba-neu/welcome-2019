
const glob = require( 'glob' );
const path = require( 'path' );

const { VueLoaderPlugin } = require( 'vue-loader' );

const entries = {};

glob.sync( './src/app/*.ts' )
  .map( p => p.replace( /^\.\/src\/|\.ts$/g, "" ) )
  .forEach( p => entries[ p ] = './' + `${ p }.ts` );

module.exports = {

  mode: process.env.NODE_ENV || 'development',
  context: path.resolve( __dirname, 'src' ),

  entry: entries,
  output: {

    path: path.resolve( __dirname, 'dist' ),
    filename: '[name].js',

  },

  module: {
    rules: [

      {
        test: /\.sass$/,
        use: [
          'style-loader',
          'css-loader',
          'sass-loader?indentedSyntax',
        ],
      },

      {
        test: /\.(png|svg|jpg)$/,
        loader: 'file-loader',
      },

      {
        test: /\.ts$/,
        loader: 'ts-loader',
      },

      {
        test: /\.vue$/,
        loader: 'vue-loader',
      },

    ],
  },

  resolve: {

    extensions: [ ".js", ".ts", ".sass", ".json", ".vue" ],
    alias: {
      'vue$': 'vue/dist/vue.common.js'
    },

  },

  plugins: [

    new VueLoaderPlugin(),

  ],

};
