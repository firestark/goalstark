module.exports = [{
    entry: ['./resources/app.scss', './resources/app.js'],
    output: {
      // This is necessary for webpack to compile
      // But we never use style-bundle.js
      filename: './resources/bundle.js',
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
        },
        {
          test: /\.js$/,
          loader: 'babel-loader',
          query: {
            presets: ['es2015'],
          },
        }
      ]
    },
  }];