var path = require("path");
var CommonsChunkPlugin = require("webpack/lib/optimize/CommonsChunkPlugin");

module.exports = {
    entry: {
        // dashboard: ['babel-polyfill', './js/ES6/dashboard'],
        dashboard: './js/ES6/dashboard',
    },
    output: {
        path: path.join(__dirname, "js/build"),
        publicPath: './js/build/',
        filename: "[name].bundle.js",
        chunkFilename: "[id].chunk.js"
    },
    plugins: [
        new CommonsChunkPlugin({
            filename: "commons.js",
            name: "commons"
        })
    ],
    module: {
        loaders: [{
            test: /.js$/,
            loader: 'babel-loader?presets[]=es2015'
        }]
    },
    devtool: "source-map"
}