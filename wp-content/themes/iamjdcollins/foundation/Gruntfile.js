module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
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

  // Load the plugin that profiles the "copy" task.
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Default task(s).
  grunt.registerTask('default', ['copy']);

};
