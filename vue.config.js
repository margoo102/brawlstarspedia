module.exports = {
    pages: {
        index: {
            entry: 'resources/js/main.js',
            template: 'public/index.html',
        }
    },
    devServer: {
        historyApiFallback: true
    }
}
