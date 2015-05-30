module.exports = function(grunt) {

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "../css/template.css": "../less/template.less"
                }
            }
        },

        concat: {
            js: {
                src: [
                    '../bootstrap/js/*.js',
                    '../js/*.js',

                ],
                dest: '../js/production.js'
            }
        },

        uglify: {
            js: {
                src: '../js/production.js',
                dest: '../js/production.min.js'
            }
        },

        cssmin: {
            combine: {
                files: {
                    '../css/production.css': ['../css/template.css']
                }
            }
        },

        imagemin: {
            png: {
                options: {
                    optimizationLevel: 7
                },
                files: [
                    {
                        expand: true,
                        cwd: '../images/unoptimized',
                        src: ['**/*.png'],
                        dest: '../images/',
                        ext: '.png'
                    }
                ]
            },
            jpg: {
                options: {
                    progressive: true
                },
                files: [
                    {
                        expand: true,
                        cwd: '../images/unoptimized',
                        src: ['**/*.jpg'],
                        dest: '../images/',
                        ext: '.jpg'
                    }
                ]
            }
        },

        watch: {
            styles: {
                files: ['../less/**/*.less', '../bootstrap/less/**/*.less'],
                tasks: ['less', 'cssmin'],
                options: {
                    nospawn: true,
                    livereload: true
                }
            },

            scripts: {
                files: ['../js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false
                }
            },

            images: {
                files: ['../images/**/*.{png,jpg,gif}'],
                tasks: ['newer:imagemin'],
                options: {
                    spawn: false
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['less', 'concat', 'uglify', 'cssmin', 'imagemin', 'watch']);

};