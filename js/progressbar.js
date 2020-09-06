// progressbar.js@1.0.0 version is used
            // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
            setTimeout(() => {
                  // HTML
                  var htmlbar = new ProgressBar.Circle(html, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 4000,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  htmlbar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  htmlbar.text.style.fontWeight = 'bold';
                  htmlbar.text.style.fontSize = '1.5rem';

                  htmlbar.animate(1.0);  // Number from 0.0 to 1.0


                  // END HTML


                  // CSS
                  var cssbar = new ProgressBar.Circle(css, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 3500,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  cssbar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  cssbar.text.style.fontWeight = 'bold';
                  cssbar.text.style.fontSize = '1.5rem';

                  cssbar.animate(1.0);  // Number from 0.0 to 1.0
                  // END CSS

                  // JS
                  var jsbar = new ProgressBar.Circle(js, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 3800,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  jsbar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  jsbar.text.style.fontWeight = 'bold';
                  jsbar.text.style.fontSize = '1.5rem';

                  jsbar.animate(1.0);  // Number from 0.0 to 1.0
                  // END js


                  // jQuery
                  var jQuerybar = new ProgressBar.Circle(jquery, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 4400,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  jQuerybar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  jQuerybar.text.style.fontWeight = 'bold';
                  jQuerybar.text.style.fontSize = '1.5rem';

                  jQuerybar.animate(1.0);  // Number from 0.0 to 1.0
                  // END jQuery
                  

                  // ajax
                  var ajaxbar = new ProgressBar.Circle(ajax, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 4800,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  ajaxbar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  ajaxbar.text.style.fontWeight = 'bold';
                  ajaxbar.text.style.fontSize = '1.5rem';

                  ajaxbar.animate(1.0);  // Number from 0.0 to 1.0
                  // END jQuery


                         // react
                         var reactbar = new ProgressBar.Circle(react, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 5100,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  reactbar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  reactbar.text.style.fontWeight = 'bold';
                  reactbar.text.style.fontSize = '1.5rem';

                  reactbar.animate(1.0);  // Number from 0.0 to 1.0
                  // END react


                         // PHP
                         var phpbar = new ProgressBar.Circle(php, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 5100,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  phpbar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  phpbar.text.style.fontWeight = 'bold';
                  phpbar.text.style.fontSize = '1.5rem';

                  phpbar.animate(1.0);  // Number from 0.0 to 1.0
                  // END PHP


                  

                         // PHP
                         var anuglarbar = new ProgressBar.Circle(angular, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 5100,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  anuglarbar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  anuglarbar.text.style.fontWeight = 'bold';
                  anuglarbar.text.style.fontSize = '1.5rem';

                  anuglarbar.animate(1.0);  // Number from 0.0 to 1.0
                  // END PHP


            // PHP
            var phpbar = new ProgressBar.Circle(sql, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 5100,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  phpbar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  phpbar.text.style.fontWeight = 'bold';
                  phpbar.text.style.fontSize = '1.5rem';

                  phpbar.animate(1.0);  // Number from 0.0 to 1.0
                  // END PHP

                  
            // JAVA
            var javabar = new ProgressBar.Circle(java, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 5100,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  javabar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  javabar.text.style.fontWeight = 'bold';
                  javabar.text.style.fontSize = '1.5rem';

                  javabar.animate(1.0);  // Number from 0.0 to 1.0
                  // END JAVA

                  // nodejs
            var nodebar = new ProgressBar.Circle(node, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 5100,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  nodebar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  nodebar.text.style.fontWeight = 'bold';
                  nodebar.text.style.fontSize = '1.5rem';

                  nodebar.animate(1.0);  // Number from 0.0 to 1.0
                  // END nodeJS

                  // laravel
            var laravelbar = new ProgressBar.Circle(laravel, {
                        color: '#414a4c',
                        // This has to be the same size as the maximum width to
                        // prevent clipping
                        strokeWidth: 4,
                        trailWidth: 1,
                        easing: 'easeInOut',
                        duration: 5100,
                        text: {
                              autoStyleContainer: false
                        },
                        from: { color: '#3b444b', width: 4 },
                        to: { color: '#232b2b', width: 4 },
                        // Set default step function for all animate calls
                        step: function (state, circle) {
                              circle.path.setAttribute('stroke', state.color);
                              circle.path.setAttribute('stroke-width', state.width);

                              var value = Math.round(circle.value() * 100);
                              if (value === 0) {
                                    circle.setText('');
                              } else {
                                    circle.setText(value + "%");
                              }

                        }
                  });
                  laravelbar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                  laravelbar.text.style.fontWeight = 'bold';
                  laravelbar.text.style.fontSize = '1.5rem';

                  laravelbar.animate(1.0);  // Number from 0.0 to 1.0
                  // END nodeJS







            }, 6000);