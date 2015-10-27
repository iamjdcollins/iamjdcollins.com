module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      normalize: {
        options: {
          style: 'expanded'
        },
        files: {
          'bower_components/foundation/scss/normalize.css': 'bower_components/foundation/scss/normalize.scss'
        }
      },
      app: {
        options: {
          style: 'expanded',
          compass: true,
        },
        files: {
          'sytlesheets/app.css': 'scss/app.scss'
        }
      },
    },
    cssmin: {
      normalize: {
        files: [{
          expand: true,
          cwd: 'bower_components/foundation/scss',
          src: ['*.css', '!*.min.css'],
          dest: 'bower_components/foundation/scss',
          ext: '.min.css'
        }]
      },
      app: {
        files: [{
          expand: true,
          cwd: 'stylesheets',
          src: ['*.css', '!*.min.css'],
          dest: 'stylesheets',
          ext: '.min.css'
        }]
      },
    },
<<<<<<< HEAD
    uglify: {
      modernizr: {
        options: {
          mangle: false
        },
        files: {
          'js/mondernizr.min.js': ['bower_components/modernizr/modernizr.js']
        }
      },
      app: {
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
      foundationmincss: {
        files: [
          // includes files within path
          {src: ['stylesheets/app.min.css'], dest: '../css/foundation.min.css'},
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
          {src: ['bower_components/foundation/foundation.min.js'], dest: '../js/foundation.min.js'},
        ],
      },
      foundationappminjs: {
        files: [
          // includes files within path
          {src: ['js/app.min.js'], dest: '../js/foundation.app.min.js'},
=======
    copy: {
      main: {
        files: [
          // includes files within path
          {src: 'bower_components/foundation/scss/normalize.min.css', dest: '../css/normalize.min.css'},
          {src: ['stylesheets/app.min.css'], dest: '../css/foundation.min.css'}, 
          {src: ['bower_components/modernizr/modernizr.js'], dest: '../js/modernizr.js'},
          {src: ['bower_components/jquery/dist/jquery.min.js'], dest: '../js/jquery.min.js'},
          {src: ['bower_components/foundation/foundation.min.js'], dest: '../js/foundation.min.js'},
          {src: ['js/app.js'], dest: '../js/foundation.app.js'},
>>>>>>> 0beaf78e02275c0250ee6e49f2506f0fc0fbfdfe
        ],
      },
    },

  });

  // Load the plugin that provides the "copy" task.
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Load the plugin that provides the "sass" task.
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Load the plugin that provides the "cssmin" task.
  grunt.loadNpmTasks('grunt-contrib-cssmin');

<<<<<<< HEAD
  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['sass:normalize','sass:app','cssmin:normalize','cssmin:app','uglify:modernizr','uglify:app','copy']);
=======
  // Default task(s).
  grunt.registerTask('default', ['sass:normalize','sass:app','cssmin:normalize','cssmin:app','copy']);
>>>>>>> 0beaf78e02275c0250ee6e49f2506f0fc0fbfdfe

};
