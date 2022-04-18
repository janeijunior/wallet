// Generated on 2014-10-18 using generator-angular 0.9.8
'use strict';

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to recursively match all subfolders:
// 'test/spec/**/*.js'

module.exports = function (grunt) {

  // Load grunt tasks automatically
  require('load-grunt-tasks')(grunt);

  // Time how long tasks take. Can help when optimizing build times
  require('time-grunt')(grunt);

  // Configurable paths for the application
  var appConfig = {
    app: require('./bower.json').appPath || 'app',
    dist: 'dist'
  };

  // Define the configuration for all the tasks
  grunt.initConfig({

    // Project settings
    chain: appConfig,

    // Watches files for changes and runs tasks based on the changed files
    watch: {
      bower: {
        files: ['bower.json'],
        tasks: ['wiredep']
      },
      js: {
        files: ['<%= chain.app %>/scripts/{,*/}*.js'],
        tasks: ['newer:jshint:all'],
        options: {
          livereload: '<%= connect.options.livereload %>'
        }
      },
      jsTest: {
        files: ['test/spec/{,*/}*.js'],
        tasks: ['newer:jshint:test', 'karma']
      },
      less: {
        files: ['less/{,*/}*.less'],
        tasks: ['less']
      },
      styles: {
        files: ['<%= chain.app %>/styles/{,*/}*.css'],
        tasks: ['newer:copy:styles', 'autoprefixer']
      },
      gruntfile: {
        files: ['Gruntfile.js']
      },
      livereload: {
        options: {
          livereload: '<%= connect.options.livereload %>'
        },
        files: [
          '<%= chain.app %>/{,*/}*.html',
          '.tmp/styles/{,*/}*.css',
          '<%= chain.app %>/images/{,*/}*.{png,jpg,jpeg,gif,webp,svg}'
        ]
      }
    },

    // The actual grunt server settings
    connect: {
      options: {
        port: 9000,
        // Change this to '0.0.0.0' to access the server from outside.
        hostname: 'localhost',
        livereload: 35729
      },
      livereload: {
        options: {
          open: true,
          middleware: function (connect) {
            return [
              connect.static('.tmp'),
              connect().use(
                '/bower_components',
                connect.static('./bower_components')
              ),
              connect.static(appConfig.app)
            ];
          }
        }
      },
      test: {
        options: {
          port: 9001,
          middleware: function (connect) {
            return [
              connect.static('.tmp'),
              connect.static('test'),
              connect().use(
                '/bower_components',
                connect.static('./bower_components')
              ),
              connect.static(appConfig.app)
            ];
          }
        }
      },
      dist: {
        options: {
          open: true,
          base: '<%= chain.dist %>'
        }
      }
    },

    // Make sure code styles are up to par and there are no obvious mistakes
    jshint: {
      options: {
        jshintrc: '.jshintrc',
        reporter: require('jshint-stylish')
      },
      all: {
        src: [
          'Gruntfile.js',
          '<%= chain.app %>/scripts/{,*/}*.js'
        ]
      },
      test: {
        options: {
          jshintrc: 'test/.jshintrc'
        },
        src: ['test/spec/{,*/}*.js']
      }
    },

    // Make sure less codes are up to par and there are no obvious mistakes
    lesslint: {
      build: {
        src: ['less/main.less'],
        options: {
          csslint: {
            'box-model': false,
            'adjoining-classes': false,
            'important': false,
            'outline-none': false,
            'qualified-headings': false,
            'unique-headings': false,
            'fallback-colors': false,
            'overqualified-elements': false,
            'duplicate-background-images': false,
            'font-sizes': false,
            'floats': false
          },
          imports: ['less/*.less']
        }
      }
    },

    // Compiles LESS to CSS
    less: {
      dev: {
        files: {
          '<%= chain.app %>/styles/main.css' : 'less/main.less'
        }
      }
    },

    // Empties folders to start fresh
    clean: {
      dist: {
        files: [{
          dot: true,
          src: [
            '.tmp',
            '<%= chain.dist %>/{,*/}*',
            '!<%= chain.dist %>/.git*'
          ]
        }]
      },
      server: '.tmp'
    },

    // Add vendor prefixed styles
    autoprefixer: {
      options: {
        browsers: ['last 1 version']
      },
      dist: {
        files: [{
          expand: true,
          cwd: '.tmp/styles/',
          src: '{,*/}*.css',
          dest: '.tmp/styles/'
        }]
      }
    },

    // Automatically inject Bower components into the app
    wiredep: {
      app: {
        src: ['<%= chain.app %>/index.html'],
        ignorePath:  /\.\.\//,
        exclude: [
          'bower_components/weather-icons/css/weather-icons.min.css',
          'bower_components/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
          'bower_components/ckeditor/ckeditor.js'
        ]
      }
    },

    // Renames files for browser caching purposes
    // filerev: {
    //   dist: {
    //     src: [
    //       '<%= chain.dist %>/scripts/*.js',
    //       '<%= chain.dist %>/styles/{,*/}*.css',
    //       '<%= chain.dist %>/images/*.{png,jpg,jpeg,gif,webp,svg}',
    //       '<%= chain.dist %>/styles/fonts/*'
    //     ]
    //   }
    // },

    // Reads HTML for usemin blocks to enable smart builds that automatically
    // concat, minify and revision files. Creates configurations in memory so
    // additional tasks can operate on them
    useminPrepare: {
      html: '<%= chain.app %>/index.html',
      options: {
        dest: '<%= chain.dist %>',
        flow: {
          html: {
            steps: {
              js: ['concat', 'uglifyjs'],
              css: ['cssmin']
            },
            post: {}
          }
        }
      }
    },

    // Performs rewrites based on filerev and the useminPrepare configuration
    usemin: {
      html: ['<%= chain.dist %>/{,*/}*.html'],
      css: ['<%= chain.dist %>/styles/{,*/}*.css'],
      options: {
        assetsDirs: ['<%= chain.dist %>','<%= chain.dist %>/images']
      }
    },

    // The following *-min tasks will produce minified files in the dist folder
    // By default, your `index.html`'s <!-- Usemin block --> will take care of
    // minification. These next options are pre-configured if you do not wish
    // to use the Usemin blocks.
    // cssmin: {
    //   dist: {
    //     files: {
    //       '<%= chain.dist %>/styles/main.css': [
    //         '.tmp/styles/{,*/}*.css'
    //       ]
    //     }
    //   }
    // },
    // uglify: {
    //   dist: {
    //     files: {
    //       '<%= chain.dist %>/scripts/scripts.js': [
    //         '<%= chain.dist %>/scripts/scripts.js'
    //       ]
    //     }
    //   }
    // },
    // concat: {
    //   dist: {}
    // },

    imagemin: {
      dist: {
        files: [{
          expand: true,
          cwd: '<%= chain.app %>/images',
          src: '{,*/}*.{png,jpg,jpeg,gif}',
          dest: '<%= chain.dist %>/images'
        }]
      }
    },

    svgmin: {
      dist: {
        files: [{
          expand: true,
          cwd: '<%= chain.app %>/images',
          src: '{,*/}*.svg',
          dest: '<%= chain.dist %>/images'
        }]
      }
    },

    htmlmin: {
      dist: {
        options: {
          collapseWhitespace: true,
          conservativeCollapse: true,
          collapseBooleanAttributes: true,
          removeCommentsFromCDATA: true,
          removeOptionalTags: true
        },
        files: [{
          expand: true,
          cwd: '<%= chain.dist %>',
          src: ['*.html', 'views/{,*/}*.html'],
          dest: '<%= chain.dist %>'
        }]
      }
    },

    // ng-annotate tries to make the code safe for minification automatically
    // by using the Angular long form for dependency injection.
    ngAnnotate: {
      dist: {
        files: [{
          expand: true,
          cwd: '.tmp/concat/scripts',
          src: ['*.js', '!oldieshim.js'],
          dest: '.tmp/concat/scripts'
        }]
      }
    },

    // Replace Google CDN references
    cdnify: {
      dist: {
        html: ['<%= chain.dist %>/*.html']
      }
    },

    // Copies remaining files to places other tasks can use
    copy: {
      dist: {
        files: [{
          expand: true,
          dot: true,
          cwd: '<%= chain.app %>',
          dest: '<%= chain.dist %>',
          src: [
            '*.{ico,png,txt}',
            '.htaccess',
            '*.html',
            'views/{,*/}*.html',
            'images/{,*/}*.{webp}',
            'fonts/*'
          ]
        }, {
          expand: true,
          cwd: '.tmp/images',
          dest: '<%= chain.dist %>/images',
          src: ['generated/*']
        }, {
          expand: true,
          cwd: 'bower_components/bootstrap/dist',
          src: 'fonts/*',
          dest: '<%= chain.dist %>'
        }, {
          expand: true,
          cwd: 'bower_components/weather-icons',
          src: 'fonts/*',
          dest: '<%= chain.dist %>'
        }, {
          expand: true,
          cwd: 'bower_components/fontawesome',
          src: 'fonts/*',
          dest: '<%= chain.dist %>'
        }, {
          expand: true,
          cwd: 'app',
          src: 'data/*',
          dest: '<%= chain.dist %>'
        }, {
          expand: true,
          cwd: 'app/styles',
          src: 'ckeditor/**/*',
          dest: '<%= chain.dist %>/styles'
        }
      ]},
      styles: {
        expand: true,
        cwd: '<%= chain.app %>/styles',
        dest: '.tmp/styles/',
        src: '{,*/}*.css'
      },
      ckeditor: {
        expand: true,
        cwd: 'bower_components/ckeditor',
        src: ['adapters/*','lang/*','plugins/**/*', 'config.js','ckeditor.js','styles.js'],
        dest: '<%= chain.dist %>/scripts/ckeditor'
      }
    },

    // Run some tasks in parallel to speed up the build process
    concurrent: {
      server: [
        'copy:styles'
      ],
      test: [
        'copy:styles'
      ],
      dist: [
        'copy:styles',
        'imagemin',
        'svgmin'
      ]
    },

    // Test settings
    karma: {
      unit: {
        configFile: 'test/karma.conf.js',
        singleRun: true
      }
    }
  });


  grunt.registerTask('serve', 'Compile then start a connect web server', function (target) {
    if (target === 'dist') {
      return grunt.task.run(['build', 'connect:dist:keepalive']);
    }

    grunt.task.run([
      'clean:server',
      'wiredep',
      'less',
      'concurrent:server',
      'autoprefixer',
      'connect:livereload',
      'watch'
    ]);
  });

  grunt.registerTask('server', 'DEPRECATED TASK. Use the "serve" task instead', function (target) {
    grunt.log.warn('The `server` task has been deprecated. Use `grunt serve` to start a server.');
    grunt.task.run(['serve:' + target]);
  });

  grunt.registerTask('test', [
    'clean:server',
    'concurrent:test',
    'autoprefixer',
    'connect:test',
    'karma'
  ]);

  grunt.registerTask('build', [
    'clean:dist',
    'wiredep',
    'less',
    'useminPrepare',
    'concurrent:dist',
    'autoprefixer',
    'concat',
    'ngAnnotate',
    'copy:dist',
    'cdnify',
    'cssmin',
    'uglify',
    //'filerev',
    'usemin',
    'htmlmin',
    'copy:ckeditor'
  ]);

  grunt.registerTask('default', [
    'newer:jshint',
    'newer:lesslint',
    'build'
  ]);
};
