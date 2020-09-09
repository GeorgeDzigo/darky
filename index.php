<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
      <!-- Main -->
      <link rel="stylesheet" href="css/regist.css" type="text/css">
      <link rel="stylesheet" href="css/counter.css">
      <link rel="stylesheet" href="css/style.css">
      <!-- <link rel="stylesheet" href="css/style2.css"> -->
      <link rel="stylesheet" href="css/reset.css">
      <!-- End Main -->

      <!-- LOADER -->
      <link rel="stylesheet" href="assests/loader/css/normalize.css">
      <link rel="stylesheet" href="assests/loader/css/main.css">
      <script src="assests/loader/js/vendor/modernizr-2.6.2.min.js"></script>
      <!-- ENDLOADER -->

      <!-- Particles -->
      <link rel="stylesheet" href="css/particles.css">
      <!-- END Particles -->
      <!-- Bideo -->

      <link rel="stylesheet" href="assests/bideo/bideo.css">
      <!--END Bideo -->

      <!-- WOWJS -->
      <link rel="stylesheet" href="assests/wowjs/css/libs/animate.css">
      <!-- END WOWJS -->

      <!-- META -->
      <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
</head>

<body>

      <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

      </div>


      <div id="container">
            <!-- Bideo -->
            <video id="background_video" loop muted>
                  <source src="assests/bideo/cpde.mp4" type="video/mp4">
            </video>

            <div id="video_cover"></div>
            <div id="overlay"></div>
            <div id="particles-js">

                  <!--End Bideo -->

                  <!-- WebSite Code -->
                  <header class="header">
                        <!-- Logo Holder -->
                        <div id="logo-holder">
                              <img src="img/logo.png" alt="" class="logo">
                        </div>
                        <!-- End Logo Holder -->

                        <!-- Resulation -->
                        <img src="https://img.icons8.com/android/24/ffffff/menu.png" id="mobile-res-hamburger-bar" />
                        <!-- Resulation -->

                        <!-- Navigation -->
                        <nav class="header-navigation">
                              <ul class="nav-ul" id="nav-ul">
                                    <!-- Close BTN mobile/Tablets/Ipads -->

                                    <img src="https://img.icons8.com/metro/26/ffffff/delete-sign.png" id="mobile-res-close-btn" />

                                    <!-- End Close BTN -->

                                    <li class="nav-ul-li"><a class="nav-ul-li-a" href="#logo-holder">HOME</a></li>
                                    <li class="nav-ul-li"><a class="nav-ul-li-a" href="#intro">ABOUT</a></li>
                                    <li class="nav-ul-li"><a class="nav-ul-li-a" href="#myskills">SKILLS</a></li>
                                    <li class="nav-ul-li"><a class="nav-ul-li-a" href="#services">SERVICES</a></li>
                                    <li class="nav-ul-li"><a class="nav-ul-li-a" href="#projects">PROJECTS</a></li>
                                    <li class="nav-ul-li"><a class="nav-ul-li-a" href="#contacts">CONTACTS</a></li>
                                    <!-- REGISTRATION -->
                                    <?php
                                    if(!isset($_SESSION['username'])) {
                                                echo '<li class="nav-ul-li" id="registration-holder"><a href="registrations/signupin.php"><img src="img/Hacker-5122.png" alt="" style="width: 50px;" id="registration-holder-img"></a></li>';
                                    }  else if(isset($_SESSION['username'])) {
                                          echo '  
                                          <li class="nav-ul-li" id="registration-holder"><img src="img/Hacker-5122.png" alt="" style="width: 50px;" id="registration-holder-img">
                                                <ul class="registration-holder-ul" id="register-ul">
                                                      <li class="registration-holder-li">'.$_SESSION['username'].'</li> 
                                                      <li class="registration-holder-li"><form action="registrations/process/signout.php"> <button type="submit" id="logout" style="color:white">Log Out</button></form></li> 
                                                </ul>
                                          </li>
                                          ';
                                    } else {
                                          echo '<li class="nav-ul-li" id="registration-holder"><a href="registrations/signupin.php"><img src="img/Hacker-5122.png" alt="" style="width: 50px;" id="registration-holder-img"></a></li>';
                                    }
                                    ?>

                                   
                                   
                              </ul>
                                    <!-- END REGIST -->
                              </ul>
                        </nav>

                        <!-- End Navigation -->

                        <!-- Typed About me -->

                        <div id="about-me">
                              <!-- Responsive me png-->
                              <div class="about-me-res-div">
                               <img src="img/me.png" alt="" id="res-about-me-img"> 
                              </div>
                              <!-- End Responsive me png -->
                              <span id="typed"></span>
                              <img src="img/me.png" id="aboutmeimg">
                        </div>


                        <!-- End Typed About Me -->
                  </header>




            </div>

      </div>
      <!-- Introduction -->
      <section id="intro">
            <!-- Respsonsive -->

            <center class="res-intro-img">
                  <img src="img/hacky.png" alt="me" id="intro-img" class="">
            </center>
            <!-- End Responsive -->

            <img src="img/hacky.png" alt="me" id="intro-img" class="none-res-intro-img">
            
            <h3 class="intro-h3">MY INTRO</h3>
            <h1 class="intro-h1">ABOUT ME</h1>
            <pre class="intro-pre">
                My Name is Giorgi Dzigoshvili I am a Web Developer, 
                almost FullStack Developer and This is one of my portfolio. 
            </pre>
            <!-- Repsonsive -->
            <pre class="res-intro-pre" id="res-intro-pre">
                My name is Giorgi Dzigoshvili I am a
                Web Developer, almost FullStack Developer
                and This is one of my Web-Site/Portfolio.
            </pre>
            
            <center class="center-res-intro-pre">

            <pre class="res-intro-pre">
            My name is Giorgi Dzigoshvili
            I am a Web Developer, almost 
       FullStack Developer and 
                   This is one of my Web-Site/Portfolio.
            </pre>
            </center>

            <!-- End Respsonsive -->

            <pre class="intro-list" id="none-res-intro-list">
            <b class="intro-list-h3">Name:  <i class="intro-list-i">George Dzigo</i></b><br>
            <b class="intro-list-h3">Date Of Birth:  <i class="intro-list-i"> 10.06.2006</i></b><br> 
            <b class="intro-list-h3">Address:  <i class="intro-list-i"> Athens,Greece</i></b><br>
            <b class="intro-list-h3">ZipCode:  <i class="intro-list-i"> 1000</i></b><br>  
            <b class="intro-list-h3">E-mail:  <i class="intro-list-i"> mr.georgegamertv@gmail.com</i></b><br>
            <b class="intro-list-h3">Phone:  <i class="intro-list-i"> +30-6996-8917-99</i></b><br>
            </pre>

            <!-- Responsive -->
            <center class="center-intro-list">
            <pre class="intro-list">
            <b class="intro-list-h3">Name:  <i class="intro-list-i">George Dzigo</i></b><br>
            <b class="intro-list-h3">Date Of Birth:  <i class="intro-list-i"> 10.06.2006</i></b><br> 
            <b class="intro-list-h3">Address:  <i class="intro-list-i"> Athens,Greece</i></b><br>
            <b class="intro-list-h3">ZipCode:  <i class="intro-list-i"> 1000</i></b><br>  
            <b class="intro-list-h3">E-mail:  <i class="intro-list-i"> mr.georgegamertv@gmail.com</i></b><br>
            <b class="intro-list-h3">Phone:  <i class="intro-list-i"> +30-6996-8917-99</i></b><br>
            </pre>
            </center>

            <center class="center-intro-hobbies">
                  <img src="img/sc.png" alt="" class="intro-hobbies">
            </center>
            <!-- End Respsonive -->
            <img src="img/sc.png" alt="" class="intro-hobbies" id="none-res-intro-hobbies">
      </section>




      <!-- End Introduction -->

      <!-- MY SKILLS -->



      <section id="myskills">
            <br>
            <br>
            <br>
            <br>
            <div class="titles">
                  <h3 class="skills-h3">SKILLS</h3>
                  <h1 class="skills-h1">My Skills</h1>
                  <p class="skills-p">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia</p>
            </div>
          
            
            <div class="skills">
            <center>
                  <!--  BOX -1 -->

                  <div class="box" id="box1">
                        <img src="https://img.icons8.com/wired/64/000000/html-5.png" />
                        <h2 class="box-h2">HTML</h2>
                        <div id="html" style="
                              margin:20px;
                              width:150px;
                              height:150px;
                              position: absolute;
                              margin-left: 75px;
                              margin-top:-5px;
                              "></div>
                  </div>


                  <!-- End BOX -1 -->
                  <!--  BOX -->


                  <div class="box" id="box2">
                        <img src="https://img.icons8.com/wired/64/000000/css3.png" />
                        <h2 class="box-h2">CSS</h2>
                        <div id="css" style="
                        margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 75px;
                        margin-top:-5px;
                        "></div>
                  </div>



                  <!-- End BOX -->

                  <!--  BOX1 -->

                  <div class="box" id="box3">
                        <img src="https://img.icons8.com/wired/64/000000/javascript-logo.png" />
                        <h2 class="box-h2">JS </h2>
                        <div id="js" style="
                        margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 75px;
                        margin-top:-5px;

                        "></div>
                  </div>
                  <div class="block"></div>

                  <!-- End BOX1 -->


                  <div></div>

                  <!-- BOX2 -->

                  <div class="box" id="box4">
                        <img src="https://img.icons8.com/ios/50/000000/jquery.png" />
                        <h2 class="box2-h2">Jquery</h2>
                        <div id="jquery" style="
                        margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 65px;
                      margin-top:60px;

                        "></div>
                  </div>

                  <!-- End BOX2 -->
                  <!--  BOX3 -->

                  <div class="box" id="box5">
                        <img src="https://img.icons8.com/pastel-glyph/64/000000/source-code--v2.png" />
                        <h2 class="box2-h2">Ajax</h2>
                        <div id="ajax" style="
                        margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 70px;
                        margin-top:60px;

                        "></div>
                  </div>

                  <!-- End BOX3 -->
                  <!-- box4 -->

                  <div class="box" id="box6">
                        <img src="https://img.icons8.com/carbon-copy/64/000000/react.png" />
                        <h2 class="box2-h2">React</h2>
                        <div id="react" style="
                        margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 75px;
                        margin-top:60px;

                        "></div>
                  </div>

                  <!-- End BOX 4-->
                  <div class="block"></div>
                  <!--  BOX5 -->

                  <div class="box" id="box7">
                        <img src="https://img.icons8.com/wired/64/000000/php-logo.png" />
                        <h2 class="box2-h2">PHP</h2>
                        <div id="php" style="
                        margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 65px;
                        margin-top:60px;

                        "></div>
                  </div>

                  <!-- End BOX5 -->
                  <!--  BOX6 -->

                  <div class="box" id="box8">
                        <img src="https://img.icons8.com/ios/64/000000/angularjs.png" />
                        <h2 class="box2-h2">Angularjs</h2>
                        <div id="angular" style="
                       margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 75px;
                        margin-top:60px;

                        "></div>
                  </div>

                  <!-- End BOX6 -->


                  <!-- BOX7 -->

                  <div class="box" id="box9">
                        <img src="https://img.icons8.com/wired/64/000000/database.png" />
                        <h2 class="box2-h2">MySQL</h2>
                        <div id="sql" style="
                      margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 75px;
                        margin-top:60px;

                        "></div>
                  </div>

                  <!-- End BOX7 -->
                  <div class="block"></div>
                  <!--  BOX8 -->

                  <div class="box" id="box10">
                        <img src="https://img.icons8.com/windows/64/000000/nodejs.png" />
                        <h2 class="box2-h2">NodeJS</h2>
                        <div id="node" style="         
                  margin:20px;
                 width:150px;
                 height:150px;
                 position: absolute;
                 margin-left: 75px;
                 margin-top:60px;"> </div>

                  </div>
            

            <!-- End BOX8 -->

            <!--  BOX9 -->

            <div class="box" id="box11">
                  <img src="https://img.icons8.com/wired/64/000000/java-coffee-cup-logo.png" />
                  <h2 class="box2-h2">Java</h2>
                  <div id="java" style="
                      margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 75px;
                        margin-top:60px;

                        "></div>
            </div>

            <!-- End BOX9 -->

            <!-- BOX10 -->

            <div class="box" id="box12">
                  <img src="https://img.icons8.com/ios/50/000000/laravel.png" />
                  <h2 class="box2-h2">Laravel</h2>
                  <div id="laravel" style="
                        margin:20px;
                        width:150px;
                        height:150px;
                        position: absolute;
                        margin-left: 75px;
                        margin-top:60px;

                        "></div>
            </div>

            <!-- End BOX10 -->

            </center>
            </div>
            
      </section>
      
      <!-- END MY SKILLS -->

      <!-- Services -->
      <section id="services">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <!-- Services Titles -->
            <div id="services-titles">
                  <h3 class="services-titles-h3">SERVICES</h3>
                  <h1 class="services-titles-h1">We do awesome services for our clients</h1>
                  <p class="services-titles-p">Far far away, behind the word mountains, far from the countries Vokalia
                        and
                        Consonantia</p>

            </div>
            <!-- End Services Titles -->

            <!-- Web Design -->
            <center>
            <div id="services-container">
                  <div id="services-container-box">
                        <div id="services-container-logo-holder">
                              <img src="https://img.icons8.com/wired/50/000000/web-design.png" />
                        </div>
                        <h2 class="services-container-h2">Web Design</h2>
                        <p class="services-container-p">

                              A small river named<br>
                              Duden flows by their<br>
                              place and supplies.

                        </p>
                  </div>
                  <!-- End Web Design -->

                  <!-- Web Applicatoins -->
                  <div id="services-container-box">
                        <div id="services-container-logo-holder">
                              <img src="https://img.icons8.com/dotty/50/000000/ios-development.png" />
                        </div>
                        <h2 class="services-container-h2">Web Application</h2>
                        <p class="services-container-p">

                              A small river named<br>
                              Duden flows by their<br>
                              place and supplies.

                        </p>
                  </div>

                  <!-- End Web Applications -->

                  <!-- Web Development -->
                  <div id="services-container-box">
                        <div id="services-container-logo-holder">
                              <img src="https://img.icons8.com/carbon-copy/50/000000/web.png" />
                        </div>
                        <h2 class="services-container-h2">Web Development</h2>
                        <p class="services-container-p">
                              A small river named<br>
                              Duden flows by their<br>
                              place and supplies.

                        </p>
                  </div>
                  <!-- End Web Development -->

                  <!-- Banner Design -->
                  <div id="services-container-box">
                        <div id="services-container-logo-holder">
                              <img src="img/branding.png" class="branding" />
                        </div>
                        <h2 class="services-container-h2">Banner Design</h2>
                        <p class="services-container-p">

                              A small river named<br>
                              Duden flows by their<br>
                              place and supplies.

                        </p>
                  </div>
                  <!-- End Banner Design -->
                  <div></div>
                  <div id="services-container-box">
                        <div id="services-container-logo-holder">
                              <img src="img/computer.png" width="50px" height="auto" />
                        </div>
                        <h1 class="services-container-h2">Branding</h1>
                        <p class="services-container-p">

                              A small river named<br>
                              Duden flows by their<br>
                              place and supplies.

                        </p>
                  </div>
                  <div id="services-container-box">
                        <div id="services-container-logo-holder">
                              <img src="https://img.icons8.com/dotty/50/000000/vector.png" />
                        </div>
                        <h1 class="services-container-h2">Icon Design</h1>
                        <p class="services-container-p">

                              A small river named<br>
                              Duden flows by their<br>
                              place and supplies.

                        </p>
                  </div>
                  <div id="services-container-box">
                        <div id="services-container-logo-holder">
                              <img src="https://img.icons8.com/dotty/50/000000/photo-editor.png" />
                        </div>
                        <h1 class="services-container-h2">Graphic Design</h1>
                        <p class="services-container-p">

                              A small river named<br>
                              Duden flows by their<br>
                              place and supplies.

                        </p>
                  </div>
                  <div id="services-container-box">
                        <div id="services-container-logo-holder">
                              <img src="img/zoom.png" />
                        </div>
                        <h1 class="services-container-h2">SEO</h1>
                        <p class="services-container-p">

                              A small river named<br>
                              Duden flows by their<br>
                              place and supplies.

                        </p>
                  </div>
            </div>
            </center>
      </section>


      <!-- End Services -->

      <!-- Counters -->
      <center>
      <section class="counters">
            <div class="container">
                  <div class="counter-holder">
                        <div class="counters-logo-holder">
                              <img src="https://img.icons8.com/carbon-copy/70/000000/suitcase.png" />
                        </div>

                        <div class="counter" id="counter-holder-counter-1" data-target="957">0</div>

                        <h3 class="counter-h3" id="counter-holder-counter-h3-1">Projects Completed</h3>
                  </div>
                  <div class="counter-holder">
                        <div class="counters-logo-holder">
                              <img src="https://img.icons8.com/pastel-glyph/70/000000/customer-support.png" />
                        </div>

                        <div class="counter" id="counter-holder-counter-2" data-target="957">0</div>

                        <h3 class="counter-h3" id="counter-holder-counter-h3-2">Happy Customers</h3>
                  </div>
                  <div class="counters-block"></div>
                  <div class="counter-holder">
                        <div class="counters-logo-holder">
                              <img src="https://img.icons8.com/carbon-copy/70/000000/espresso-cup.png" />
                        </div>

                        <div class="counter" id="counter-holder-counter-3" data-target="1213">0</div>

                        <h3 class="counter-h3" id="counter-holder-counter-h3-3">Cups Of Coffee</h3>
                  </div>
                  <div class="counter-holder">
                        <div class="counters-logo-holder">
                              <img src="https://img.icons8.com/carbon-copy/70/000000/calendar.png" />
                        </div>

                        <div class="counter" id="counter-holder-counter-4" data-target="2526">0</div>

                        <h3 class="counter-h3" id="counter-holder-counter-h3-4">Hours Spent</h3>
                  </div>
            </div>
      </section>
      </center>
      <!-- End Counters -->

      <!-- Projects -->
      <section id="projects">
            <br>
            <br>
            <br>
            <!-- Projects Titles -->
            <div id="projects-titles">
                  <h3 class="projects-titles-h3">ACCOMPLISHMENTS</h3>
                  <h1 class="projects-titles-h1">My Projects</h1>
                  <p class="projects-titles-p">Far far away, behind the word mountains, far from the countries Vokalia
                        and Consonantia</p>
            </div>
            <!-- End Projects Titles -->
            <center>
            <div id="projects-container">
                  <!-- Projects box 1 -->
                  <div class="projects-container-box">
                        <div class="projects-container-box-logo-holder" id="projects-holder">
                              <img src="projectsimg/1.jpg" alt="" id="projects-img">
                        </div>

                        <div class="projects-container-box-logos-content" id="procontent">
                              <h3 class="projects-container-box-logos-content-h3"><a href="#logo-holder" class="projects-container-box-logos-content-h3-a">Branding & Illustration
                                          Design</a></h3>
                              <h3 class="projects-container-box-logos-content-h3-2"><a href="#logo-holder" class="projects-container-box-logos-content-h3-2-a">WEB DESIGN</a></h3>
                        </div>
                  </div>
                  <!-- End Projects box 1 -->

                  <!-- Projects box 2 -->

                  <div class="projects-container-box">
                        <div class="projects-container-box-logo-holder" id="projects-holder2">
                              <img src="projectsimg/2.jpg" alt="" id="projects-img2">
                        </div>

                        <div class="projects-container-box-logos-content" id="procontent2">
                              <h3 class="projects-container-box-logos-content-h3"><a href="#logo-holder" class="projects-container-box-logos-content-h3-a">Branding & Illustration
                                          Design</a></h3>
                              <h3 class="projects-container-box-logos-content-h3-2"><a href="#logo-holder" class="projects-container-box-logos-content-h3-2-a">WEB DESIGN</a></h3>
                        </div>
                  </div>

                  <!-- End Projects box 2 -->

                  <!-- Projects box 3 -->

                  <div class="projects-container-box">
                        <div class="projects-container-box-logo-holder" id="projects-holder3">
                              <img src="projectsimg/3.jpg" alt="" id="projects-img3">
                        </div>

                        <div class="projects-container-box-logos-content" id="procontent3">
                              <h3 class="projects-container-box-logos-content-h3"><a href="#logo-holder" class="projects-container-box-logos-content-h3-a">Branding & Illustration
                                          Design</a></h3>
                              <h3 class="projects-container-box-logos-content-h3-2"><a href="#logo-holder" class="projects-container-box-logos-content-h3-2-a">WEB DESIGN</a></h3>
                        </div>
                  </div>

                  <!-- End Projects box 3 -->

                  <div></div>

                  <!-- Projects box 4 -->

                  <div class="projects-container-box">
                        <div class="projects-container-box-logo-holder" id="projects-holder4">
                              <img src="projectsimg/4.jpg" alt="" id="projects-img4">
                        </div>

                        <div class="projects-container-box-logos-content" id="procontent4">
                              <h3 class="projects-container-box-logos-content-h3"><a href="#logo-holder" class="projects-container-box-logos-content-h3-a">Branding & Illustration
                                          Design</a></h3>
                              <h3 class="projects-container-box-logos-content-h3-2"><a href="#logo-holder" class="projects-container-box-logos-content-h3-2-a">WEB DESIGN</a></h3>
                        </div>
                  </div>

                  <!-- End Projects box 4 -->

                  <!-- Projects box 5 -->

                  <div class="projects-container-box">
                        <div class="projects-container-box-logo-holder" id="projects-holder5">
                              <img src="projectsimg/5.jpg" alt="" id="projects-img5">
                        </div>

                        <div class="projects-container-box-logos-content" id="procontent5">
                              <h3 class="projects-container-box-logos-content-h3"><a href="#logo-holder" class="projects-container-box-logos-content-h3-a">Branding & Illustration
                                          Design</a></h3>
                              <h3 class="projects-container-box-logos-content-h3-2"><a href="#logo-holder" class="projects-container-box-logos-content-h3-2-a">WEB DESIGN</a></h3>
                        </div>
                  </div>

                  <!-- End Projects box 5 -->

                  <!-- Projects box 6 -->

                  <div class="projects-container-box">
                        <div class="projects-container-box-logo-holder" id="projects-holder6">
                              <img src="projectsimg/6.jpg" alt="" id="projects-img6">
                        </div>

                        <div class="projects-container-box-logos-content" id="procontent6">
                              <h3 class="projects-container-box-logos-content-h3"><a href="#logo-holder" class="projects-container-box-logos-content-h3-a">Branding & Illustration
                                          Design</a></h3>
                              <h3 class="projects-container-box-logos-content-h3-2"><a href="#logo-holder" class="projects-container-box-logos-content-h3-2-a">WEB DESIGN</a></h3>
                        </div>
                  </div>

                  <!-- End Projects box 6 -->

            </div>
            </center>
      </section>

      <!-- End Projects -->



      <!-- Project Offer Section -->
      <br><br><br><br><br><br><br><br>
      <center>
      <section id="project-offer-section">
            <div class="project-offer-section-text" id="none-res-project-offer-section-text">
                  <h1 class="project-offer-section-text-h1" id="typed2"></h1>

                  <p class="project-offer-section-text-p" id="typed-p"></p>
                  <div class="projects-offer-section-button">Contact Me</div>
            </div>

            <img src="img/me.png" alt="" class="project-offer-section-img" id="none-res-offer-section-img">
  
            <!-- Responsive  -->
            <center id="res-offer-section-img">
                  <img src="img/me.png" alt="" class="project-offer-section-img" >
            </center>
            <center  id="res-project-offer-section-text">
                  <h1 class="project-offer-section-text-h1" id="typed2">Have a project on your mind</h1>
                  <p class="project-offer-section-text-p" id="typed-p">If Yes, What are you waiting for then</p>
                  <div class="projects-offer-section-button">Contact Me</div>
            </center>
            <!-- End Responsive -->

      </section>
      </center>
      <!-- End Project Offer Section -->


      <!-- Contacts -->
      <section id="contacts">
            <br><br><br><br>
            <div class="contacts-titles">
                  <h3 class="contacts-titles-h3">CONTACT US</h3>
                  <h1 class="contacts-titles-h1">Have a Project? </h1>
                  <p class="contacts-titles-p">Far far away, behind the word mountains, far from the countries Vokalia
                        and <br> Consonantia</p>
            </div>

            <article class="contacts-article" id="none-contacts-article">
                  <form action="mail/mail.php" method="post" class="contacts-article-form">
                        <input type="text" name="name" min="5" placeholder="Name" id="contact-form-name" required>
                        <input type="email" name="email" placeholder="Email" id="contact-form-email" required>
                        <input type="text" name="subject" placeholder="Subject" id="contact-form-subject">
                        <textarea name="message" cols="30" rows="10" placeholder="message" id="contact-form-message"></textarea>
                        <input type="submit" id="contact-form-submit" value="Send Message">
                  </form>
            </article>

            <!-- Responsive -->
            <center class="res-contacts-article">
                  <article class="contacts-article">
                        <form action="mail/mail.php" method="post" class="contacts-article-form">
                              <input type="text" name="name" min="5" placeholder="Name" id="contact-form-name" required>
                              <input type="email" name="email" placeholder="Email" id="contact-form-email" required>
                              <input type="text" name="subject" placeholder="Subject" id="contact-form-subject">
                              <textarea name="message" cols="30" rows="10" placeholder="message" id="contact-form-message"></textarea>
                              <input type="submit" id="contact-form-submit" value="Send Message">
                        </form>
                  </article>
            </center>

            <!-- End Responsive -->

            <!-- Contacts Aside -->
            <aside class="contacts-aside">
                  <div class="contacts-aside-box">
                        <div class="contacts-aside-box-logo-holder">
                              <img src="https://img.icons8.com/carbon-copy/45/000000/marker.png" class="contacts-aside-box-logo-holder-img1" />
                        </div>
                        <p class="contacts-aside-box-p"><b style="color:#556b2f;">Address:</b><br>198 West 21th Street,
                              Suite 721 New<br>York NY 10016</p>
                  </div>
                  <div class="contacts-aside-box">
                        <div class="contacts-aside-box-logo-holder">
                              <img src="https://img.icons8.com/carbon-copy/45/000000/phone.png" class="contacts-aside-box-logo-holder-img2" />
                        </div>
                        <p class="contacts-aside-box-p"><b style="color:#556b2f;">Phone:</b><br> + 1235 2355 98</p>
                  </div>
                  <div class="contacts-aside-box">
                        <div class="contacts-aside-box-logo-holder">
                              <img src="https://img.icons8.com/wired/35/000000/paper-plane.png" class="contacts-aside-box-logo-holder-img3" />
                        </div>
                        <p class="contacts-aside-box-p"><b style="color:#556b2f;">Email:</b><br>info@yoursite.com</p>
                  </div>
                  <div class="contacts-aside-box">
                        <div class="contacts-aside-box-logo-holder">
                              <img src="https://img.icons8.com/android/35/000000/globe.png" class="contacts-aside-box-logo-holder-img4" />
                        </div>
                        <p class="contacts-aside-box-p"><b style="color:#556b2f;">Website:</b><br>yoursite.com</p>
                  </div>
            </aside>
            <!-- End Contacts Aside -->
      </section>
      <!-- End Contacts -->

      <!-- Footer -->
      <center>
      <footer id="footer">
           
            <div class="footer-wrapper">
                  
                  <!-- Responsive -->
                  <center id="res-social-media-imgs" >
                        <a href="https://www.facebook.com/kitchendesign.ge/?ref=aymt_homepage_panel&eid=ARBjw_LEKG3o8typ58M-ZHLE8Stc1qrexqFrUKQo__co14sYDthYo-Qp1h74MBzG6c4SRNRh2Wv2YdbK" class="wow fadeIn social-media-a" target="_blank"><img src="https://img.icons8.com/dusk/35/000000/facebook-new--v2.png" class="social-meadia-img-a-img" /></a>
                        <img src="https://img.icons8.com/office/35/000000/instagram-new.png" class="social-meadia-img-a-img" />
                        <img src="https://img.icons8.com/doodle/35/000000/github--v1.png" class="social-meadia-img-a-img" />
                  </center>
                  <!-- End Responsive -->

                  <div class="footer-aboutme footer-box">
                        <h2 class="footer-aboutme-h2">Lets Talk about</h2>
                        <pre class="footer-aboutme-pre">
                        Far far away, behind the word
                        mountains, far from the
                        countries Vokalia and
                        Consonantia, there live the
                        blind texts.
                  </pre>
                        <a href="#contacts" class="footer-aboutme-a">Contact Me</a>
                  </div>
                  



                  <div class="footer-links footer-box">
                        <h2 class="footer-links-h2">Links</h2>
                        <pre class="footer-links-pre">
                 <b>></b> <a href="#logo-holder" class="footer-links-pre-a">Home</a>
                 <b>></b> <a href="#intro" class="footer-links-pre-a">About</a>
                 <b>></b> <a href="#myskills" class="footer-links-pre-a">Skills</a>
                 <b>></b> <a href="#services" class="footer-links-pre-a">Services</a>
                 <b>></b> <a href="#projects" class="footer-links-pre-a">Projects</a>
                 <b>></b> <a href="#contacts" class="footer-links-pre-a">Contacts</a>
            </pre>
                  </div>


                  <div class="footer-services footer-box">
                        <h2 class="services-links-h2">Services</h2>
                        <pre class="services-links-pre">
                 <b>></b> <a href="#services" class="services-links-pre-a">Web Design</a>
                 <b>></b> <a href="#services" class="services-links-pre-a">Web Development</a>
                 <b>></b> <a href="#services" class="services-links-pre-a">Business</a>
                 <b>></b> <a href="#services" class="services-links-pre-a">Data Analysis</a>
                 <b>></b> <a href="#services" class="services-links-pre-a">Graphic Design</a>
                 <b>></b> <a href="#services" class="services-links-pre-a">Seo</a>
            </pre>

                  </div>


                  <div class="footer-questions footer-box">
                        <h2 class="footer-questions-h2">Have a Question?</h2>
                        <pre class="footer-questions-pre">
                  <img src="https://img.icons8.com/carbon-copy/30/000000/map-marker.png"/>203 Fake St. Mountain
                      View, San Francisco,
                      California, USA

                  <img src="https://img.icons8.com/carbon-copy/30/000000/phone.png"/> +2 392 3929 215

                  <img src="https://img.icons8.com/ios/20/000000/paper-plane.png"/>  info@yourdomain.com
            </pre>
                  </div>

                  <!-- Social Media IMGS -->
                  <center class="none-res-social-media-imgs">
                        <a href="https://www.facebook.com/kitchendesign.ge/?ref=aymt_homepage_panel&eid=ARBjw_LEKG3o8typ58M-ZHLE8Stc1qrexqFrUKQo__co14sYDthYo-Qp1h74MBzG6c4SRNRh2Wv2YdbK" class="wow fadeIn social-media-a"  id="none-res-social-imgs"target="_blank"><img src="https://img.icons8.com/dusk/35/000000/facebook-new--v2.png" class="social-meadia-img-a-img" /></a>
                        <img src="https://img.icons8.com/office/35/000000/instagram-new.png" class="social-meadia-img-a-img" id="none-res-social-imgs" />
                        <img src="https://img.icons8.com/doodle/35/000000/github--v1.png" class="social-meadia-img-a-img" id="none-res-social-imgs" />
                  </center>
                  <!-- End Social Media IMGS -->
            </div>
                 
      </footer>
      </center>
      <!-- End Footer -->









      <!-- SCIRPTS -->
      <!-- My Scripts -->
      <script src="js/counter.js"></script>
      <script src="js/projectsimg.js"></script>
      <script src="js/dropdown.js"></script>
      <!-- End My Scripts -->


      <!-- Jquery -->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <!-- End Jquery -->


      <!-- LOADER -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script>
            window.jQuery || document.write('<script src="assests/loader/js/vendor/jquery-1.9.1.min.js"><\/script>')
      </script>
      <script src="assests/loader/js/main.js"></script>
      <!-- END Loader -->

      <!-- Particles -->
      <script src="assests/particlesjs/particles.js"></script>
      <script src="assests/particlesjs/demo/js/app.js"></script>
      <!-- End Particles -->

      <!-- Bideo -->

      <script src="assests/bideo/bideo.js"></script>
      <script src="assests/bideo/main.js"></script>

      <!-- END Bideo -->


      <!-- Typed JS -->
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
      <script>
            var option = {
                  strings: ['Welcome Guest,You Entered To The CODING WORLD OF CODE', 'I Am CODE And I Am Creating Everything For You', 'Are You Ready To Create Your First Web At Code'],
                  typeSpeed: 100,
                  fadeOut: true,
                  loop: true,

            };

            var option2 = {
                  strings: ['Have a project on your mind'],
                  typeSpeed: 100,
                  fadeOut: true,
                  loop: true,

            };
            var option3 = {
                  strings: ['A small river named Duden flows by their place and supplies it  with the necessary<br>regelialia. It is a paradisematic country, in which roasted parts of sentences fly.'],
                  typeSpeed: 50,
                  fadeOut: true,
                  loop: true,

            };

            setTimeout(() => {
                  var typed = new Typed('#typed', option);
                  var typed2 = new Typed('#typed2', option2);
                  var typed3 = new Typed('#typed-p', option3);
            }, 4000);
      </script>
      <!-- End Typed JS -->

      <!-- WOWJS -->
      <script src="assests/wowjs/dist/wow.min.js"></script>
      <script>
            new WOW().init();
      </script>
      <!-- WOWJS -->

      <!-- Progressbar js -->
      <script src="assests/progressbarjs/dist/progressbar.js"></script>
      <script src="assests/progressbarjs/dist/progressbar.min.js"></script>
      <script src="js/progressbar.js"></script>
      <!-- END Progressbar js -->


      <!-- Responsive JS -->

      <script src="responsive/js/hamburger.js"></script>
      <!-- End Responsive JS -->

</body>

</html>