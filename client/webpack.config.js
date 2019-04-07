module.exports = [{
    entry: './resources/app.scss',
    output: {
      // This is necessary for webpack to compile
      // But we never use style-bundle.js
      filename: 'resources/-.js',
    },
    module: {
      rules: [
        {
          test: /\.scss$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                name: 'resources/bundle.css',
              },
            },
            { loader: 'extract-loader' },
            { loader: 'css-loader' },
            {
              loader: 'sass-loader',
              options: {
                includePaths: ['./node_modules']
              }
            }
          ]
        }
      ]
    },
  }];