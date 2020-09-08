<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <!-- <link rel="stylesheet" href="../css/style.css" type="text/css"> -->
      <link rel="stylesheet" href="..css/reset.css">
      <link rel="stylesheet" href="../css/style2.css" type="text/css">
      <link rel="stylesheet" href="css/registration.css">
      
     
      <!-- Font -->
      <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

<!-- Loader -->
<link rel="stylesheet" href="../assests/loader/css/normalize.css">
      <link rel="stylesheet" href="../assests/loader/css/main.css">
      <script src="../assests/loader/js/vendor/modernizr-2.6.2.min.js"></script>

</head>

<body>
<div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

      </div>

      <header class="header">
            <!-- Logo Holder -->
            <div id="logo-holder">
                  <img src="../img/logo.png" alt="" class="logo">
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
                        <li class="nav-ul-li"><a class="nav-ul-li-a" href="../index.php#logo-holder">HOME</a></li>
                        <li class="nav-ul-li"><a class="nav-ul-li-a" href="../index.php#intro">ABOUT</a></li>
                        <li class="nav-ul-li"><a class="nav-ul-li-a" href="../index.php#myskills">SKILLS</a></li>
                        <li class="nav-ul-li"><a class="nav-ul-li-a" href="../index.php#services">SERVICES</a></li>
                        <li class="nav-ul-li"><a class="nav-ul-li-a" href="../index.php#projects">PROJECTS</a></li>
                        <li class="nav-ul-li"><a class="nav-ul-li-a" href="../index.php#contacts">CONTACTS</a></li>
                        <!-- REGISTRATION -->
                        </li>
                        <!-- END REGIST -->


                        <li class="nav-ul-li"><a class="nav-ul-li-a" href="#" style="margin-left: 75px">
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                         header("location: ../index.php?access=granted");
                                    }
                                    ?>


                              </a></li>


                  </ul>
            </nav>
            <!-- End Navigation -->
      </header>

<center>
      <section id="signinup">
            <!-- Hacker PNG -->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <img src="../img/Hacker-5122.png" alt="" class="fav-icon">
            <!-- END Hacker PNG -->
            <div id="signin">
                  <div class="signin-titles">
                        <h1 class="signin-titles-h1">Have an account? Sign In</h1>
                  </div>
                  <form action="process/signin.php" method="POST" id="signinform">
                        <input type="text" placeholder="  Username Or Email" name="signinUsernamemail" id="signinusername" required>
                        <input type="password" placeholder="  Password" name="signinPassword" id="signinpassword" required>
                        <button type="submit" id="signinsubmit">Sign In</button>
                  </form>
            </div>

            <div class="hr"></div>

            <div id="signup">
                  <div class="signup-titles">
                        <h1 class="signup-titles-h1">Create Account</h1>
                  </div>
                  <form action="process/signup.php" method="POST" id="signupform" >
                        <input type="text" placeholder="  First Name" name="signupfirstname" id="signupfirstname" required>
                        <input type="text" placeholder="  Last Name" name="signuplastname" id="signuplastname" required>
                        <input type="email" placeholder="  E-mail" name="signupemail" id="signupemail" required>
                        <input type="text" placeholder="  Username" name="signupusername" id="signupusername" required>
                        <input type="password" placeholder="  Password" name="signuppassword" id="signuppassword" required>
                        <input type="password" placeholder="  Repeat Password" name="signuprepassword" id="signuprepassword" required>

                        <button type="submit" id="signupsubmit">Sign Up</button>
                  </form>
            </div>
      </section>

      </center>

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
<!-- Scripts -->
<!-- Loader -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script>
            window.jQuery || document.write('<script src="../assests/loader/js/vendor/jquery-1.9.1.min.js"><\/script>')
      </script>
      <script src="../assests/loader/js/main.js"></script>
      

      <script src="js/hamburger.js"></script>
</body>

</html>