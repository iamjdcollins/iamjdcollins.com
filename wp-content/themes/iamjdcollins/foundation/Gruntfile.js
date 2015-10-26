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

  // Default task(s).
  grunt.registerTask('default', ['sass:normalize','sass:app','cssmin:normalize','cssmin:app','copy']);

};
