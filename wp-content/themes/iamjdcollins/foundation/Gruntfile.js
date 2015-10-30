module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      normalizescss: {
        options: {
          style: 'expanded'
        },
        files: {
          'bower_components/foundation/scss/normalize.css': 'bower_components/foundation/scss/normalize.scss'
        }
      },
      appscss: {
        options: {
          style: 'expanded',
          compass: true,
        },
        files: {
          'sytlesheets/app.css': 'scss/app.scss'
        }
      },
      stylesscss: {
        options: {
          style: 'expanded',
          compass: true,
        },
        files: {
          '../css/styles.css': '../scss/styles.scss'
        }
      },
    },
    cssmin: {
      normalizecss: {
        files: [{
          expand: true,
          cwd: 'bower_components/foundation/scss',
          src: ['*.css', '!*.min.css'],
          dest: 'bower_components/foundation/scss',
          ext: '.min.css'
        }]
      },
      appcss: {
        files: [{
          expand: true,
          cwd: 'stylesheets',
          src: ['*.css', '!*.min.css'],
          dest: 'stylesheets',
          ext: '.min.css'
        }]
      },
      stylescss: {
        files: [{
          expand: true,
          cwd: '../css',
          src: ['styles.css'],
          dest: '../css',
          ext: '.min.css'
        }]
      },
      fontasticcss: {
        files: [{
          expand: true,
          cwd: '../fontastic',
          src: ['fontastic.css'],
          dest: '../css',
          ext: '.min.css'
        }]
      },
    },
    uglify: {
      modernizrjs: {
        options: {
          mangle: false
        },
        files: {
          'js/mondernizr.min.js': ['bower_components/modernizr/modernizr.js']
        }
      },
      appjs: {
        options: {
          mangle: false
        },
        files: {
          'js/app.min.js': ['js/app.js']
        }
      },
    },
    copy: {
      normalizemincss: {
        files: [
          // includes files within path
          {src: 'bower_components/foundation/scss/normalize.min.css', dest: '../css/normalize.min.css'},
        ],
      },
      appmincss: {
        files: [
          // includes files within path
          {src: ['stylesheets/app.min.css'], dest: '../css/foundation.min.css'},
        ],
      },
      fontasticfonts: {
        files: [
          // includes files within path
          {cwd: '../fontastic/' , src: 'fonts/*', dest: '../', filter: 'isFile', flatten: true},
        ],
      },
      modernizrminjs: {
        files: [
          // includes files within path
          {src: ['js/mondernizr.min.js'], dest: '../js/modernizr.min.js'},
        ],
      },
      jqueryminjs: {
        files: [
          // includes files within path
          {src: ['bower_components/jquery/dist/jquery.min.js'], dest: '../js/jquery.min.js'},
        ],
      },
      foundationminjs: {
        files: [
          // includes files within path
          {src: ['bower_components/foundation/js/foundation.min.js'], dest: '../js/foundation.min.js'},
        ],
      },
      appminjs: {
        files: [
          // includes files within path
          {src: ['js/app.min.js'], dest: '../js/foundation.app.min.js'},
        ],
      },
    },
    watch: {
      normalizescss: {
        files: ['bower_components/foundation/scss/normalize.scss'],
        tasks: ['sass:normalizescss','cssmin:normalizecss','copy:normalizemincss'],
      },
      appscss: {
        files: ['scss/*.scss','bower_components/foundation/scss/**/*.scss','!bower_components/foundation/scss/normalize.scss'],
        tasks: ['sass:appscss','cssmin:appcss','copy:appmincss'],
      },
      stylesscss: {
        files: ['../scss/styles.scss'],
        tasks: ['sass:stylesscss','cssmin:stylescss'],
      },
      fontasticcss: {
        files: ['../css/fontastic.css'],
        tasks: ['cssmin:fontasticcss','fontasticfonts'],
      },
      mondernizrjs: {
        files: ['bower_components/modernizr/modernizr.js'],
        tasks: ['unglify:modernizrjs','copy:modernizrminjs'],
      },
      jqueryminjs: {
        files: ['bower_components/jquery/dist/jquery.min.js'],
        tasks: ['copy:jqueryminjs'],
      },
      jqueryminjs: {
        files: ['bower_components/foundation/js/foundation.min.js'],
        tasks: ['copy:foundationminjs'],
      }, 
      appjs: {
        files: ['js/app.js'],
        tasks: ['unglify:appjs','copy:appminjs'],
      },
    },
  });

  // Load the plugin that provides the "copy" task.
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Load the plugin that provides the "sass" task.
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Load the plugin that provides the "cssmin" task.
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Load the plugin that provides the "watch" task.
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['sass:normalizescss','sass:appscss','sass:stylesscss','cssmin:normalizecss','cssmin:appcss','cssmin:stylescss','cssmin:fontasticcss','uglify:modernizrjs','uglify:appjs','copy']);
};
