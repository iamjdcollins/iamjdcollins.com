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
        ],
      },
    },

  });

  // Load the plugin that profiles the "copy" task.
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Default task(s).
  grunt.registerTask('default', ['copy']);

};
