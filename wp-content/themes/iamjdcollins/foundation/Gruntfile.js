module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'bower_components/foundation/scss/normalize.css': 'bower_components/foundation/scss/normalize.scss'
        }
      },
    },
    cssmin: {
      target: {
        files: [{
          src: ['bower_components/foundation/scss/normalize.css'],
          dest: ['bower_components/foundation/scss/normalize.min.css'],
        }]
      }
    },
    copy: {
      main: {
        files: [
          // includes files within path
          {src: ['stylesheets/app.css'], dest: '../css/foundation.css'}, 
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

  // Default task(s).
  grunt.registerTask('default', ['sass','copy']);

};
