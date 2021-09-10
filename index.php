<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  // include('./mainInclude/header.php'); 
?>  
   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.2/animation_utility.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Student Testimonial Owl Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/testyslider.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" /> 
    <!-- <link rel="stylesheet" href="style.css"> -->
   <!-- <link rel="stylesheet" href="./css1/css/style.css">
   <link rel="stylesheet" href="./css1/style.css">  -->
   <link rel="stylesheet" href="coursestyle.css">
   <link rel="stylesheet" href="texture.css">
   
   
    <title>TechEdu</title>
    
    
    
  </head>
  <body>
     <!-- Start Nagigation -->
     <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">

        <div class="logo"><img src="img/logo2.png" alt="logo" style="width: 70px;" /><a href="#">TechEdu</a></div>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="#aboutScroll">About</a></li>
          <!-- <li><a href="#">Course/Internship</a></li> -->
          <li>
            <a href="courses.php" >Courses</a>
           
          </li>
          <li>
            <a href="Internship.php" >Internship</a>
            
          </li>
          <li>
            <a href="#" class="desktop-link">Events</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Events</label>
            <ul>
              <li>
                <a href="Upcomingevents.php" class="">Upcoming Events</a>
               
                <!-- <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul> -->
              </li>
              <li>
                <a href="Previousevents.php" class="">Previous Events</a>
                
                <!-- <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul> -->
              </li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
          <?php 
              session_start();   
              if (isset($_SESSION['is_login'])){
                echo '
                <li><a href="student/studentProfile.php" class="Login">My Profile</a></li>
                  <li><a href="logout.php" class="Login">Logout</a></li>
                <li style="margin-left: 255px;">
                <a href="#" class="desktop-link" style=""><img src="./maininclude/login.png" alt="default" style="height: 60px; width: 50%; border-radius: 50%;"></a>
                <input type="checkbox" id="show-items">
                <label for="show-items" style="margin-left: 255px">Upcoming Events</label>
                <ul>
                  <li><a href="student/studentProfile.php">My Profile</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </li>';
            } else {
              echo '
              <li><a href="#login" data-toggle="modal" data-target="#stuLoginModalCenter" style="margin-left: 215px;">Login</a></li>
              <li><a href="#signup" data-toggle="modal" data-target="#stuRegModalCenter" style="">Signup</a></li>';
              }
          ?> 
        </ul>
      </div>
    </nav>
  </div>


  <!-- wellcome Section  -->
  <section id="wellcome">
    <div class="wellcome container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Welcome to<span></span></h1>
        <h1>TechEdu <span></span></h1>
        <a href="#courses" type="button" class="cta1">Courses</a>
        <a href="#courses" type="button" class="cta">Internship</a>
      </div>
    </div>
  </section>
  <!-- End wellcome Section  -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="scrollanimation animated jackInTheBox adr-5 section-title">Serv<span>i</span>ces</h1>
        <hr class="fancyLine fancyLine scrollanimation animated flipInY adr-9" />
        <p>Our main motto is to provide high-quality content and knowledge to our students and to help them to reach their goals.<br> 
          We also provide industrial training which will help them to understand how the industries work.</p>
      </div>
      <div class="service-bottom scrollanimation animated zoomIn adr-5">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/color/50/000000/teacher.png"/></div>
          <br><h2>Mentor Support</h2>
          <ul>
            <li>Certified Mentors</li>
            <li>Proper Guidance</li>
            <li>Friendly Nature</li>
            <li>Live Interaction</li>
            <li>Complete Assistance</li>
          </ul>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/fluency/48/000000/certificate--v2.png"/></div>
          <br><h2>Certified Training</h2>
          <ul>
            <li>Interesting Domains</li>
            <li>Structured Syllabus</li>
            <li>Live Sessions</li>
            <li>Professional Mentors</li>
            <li>Certificate and LoR</li>
          </ul>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/color/48/000000/laptop.png"/></div>
          <br><h2>Online Workshops</h2>
          <ul>
            <li>Opportunity to learn new aspects</li>
            <li>Discussion with experts</li>
            <li>Novel ways of thinking</li>
            <li>Inspiration to work better</li>
            <li></li>
            <li></li>
          </ul><br>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/color/48/000000/internship.png"/></div>
          <h2>Internship Opportunities</h2>
          <ul>
            <li>Learn by doing</li>
            <li>Innovative tasks</li>
            <li>Wide range of domains</li>
            <li>Global level program</li>
            <li>Certification and LoR</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->
        
  <div id="about" >
    <h5 class="scrollanimation animated fadeIn adr-9">WHAT WE EXACTLY DO FOR YOU...</h5>
    <h1 class="section-title scrollanimation animated jackInTheBox adr-5">ABOUT <span>TECHEDU</span></h1>
    <hr class="fancyLine scrollanimation animated flipInY adr-9" />
    <p>
      TechEdu learning and Talent Solution was formed on 14th March 2021 by two B. Tech Student keeping in mind the welfare of their fellow students.<br>
      In this era, industries are demanding the latest technical knowledge which is not taught efficiently in educational systems.<br> 
      This company is here to provide knowledge about the latest technologies or fields that students can focus on for a better future.<br> 
      We also provide practical knowledge to let young minds know how the industry works. 
    </p>
  </div>




  <div id="our-partners">
    <h5 class="scrollanimation animated fadeIn adr-9">OUR INGREDIENT PART</h5>
    <h1 class="section-title scrollanimation animated jackInTheBox adr-5"><span>WE HAVE</span> WORKED WITH</h1>
    <hr class="fancyLine fancyLine scrollanimation animated flipInY adr-9" />
    <div>
      <a href="https://www.custkart.com/">
        <img class="com-logo scrollanimation animated zoomIn adr-5" src="img/coma.png" alt="Company" />
      </a>
      <a href="https://www.dreamsnama.com/">
        <img class="com-logo scrollanimation animated zoomIn adr-5 adl-2" src="img/comb.png" alt="Company" />
      </a>
      <a href="https://www.givemycertificate.com/">
        <img class="com-logo scrollanimation animated zoomIn adr-5 adl-4" src="img/comc.png" alt="Company" />
      </a>
      <a href="https://www.agrivision4u.com/">
        <img class="com-logo scrollanimation animated zoomIn adr-5 adl-6" src="img/comd.png" alt="Company" />
      </a>
      <span id="contactScroll"></span>
    </div>
  </div>



  <section id="contact">
    <div class="contact">
      <div>
        <h1 class="section-title scrollanimation animated jackInTheBox adr-5">
          Contact <span>info</span>
        </h1>
        <hr class="fancyLine scrollanimation animated flipInY adr-9" />
      </div>
      <div class="contact-items">
        <div class="contact-item scrollanimation animated zoomIn adr-5">
          <div class="icon">
            <img src="https://img.icons8.com/bubbles/100/000000/phone.png" />
          </div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>
              <a href="tel:8862026900">+91 8862026900</a>
            </h2>
            <h2>
              <a href="tel:7715096153">+91 7715096153</a>
            </h2>
          </div>
        </div>
        <div class="contact-item scrollanimation animated zoomIn adr-5">
          <div class="icon">
            <img src="https://img.icons8.com/bubbles/100/000000/new-post.png" />
          </div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>
              <a href="mailto: contact@techedulearning.com">
                contact@techedulearning.com
              </a>
            </h2>
          </div>
        </div>
        <div class="contact-item scrollanimation animated zoomIn adr-5">
          <div class="icon">
            <img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" />
          </div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>
              <a
                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.457421907711!2d20.486353716222904!3d54.71916848028964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x284054d2fac2875d!2z0JHQuNGC0YDQuNC60YEyNA!5e0!3m2!1sru!2sru!4v1536590497258">
                Mumbai, Maharashtra
              </a>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    
  ?>  
