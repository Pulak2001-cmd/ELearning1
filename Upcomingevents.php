<?php
 include('./dbConnection.php');
//  include('./maininclude/header.php');
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
                <a href="#" class="desktop-link" style=""><img src="./maininclude/profile.png" alt="default" style="height: 60px; width: 50%"></a>
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

<div class="container mt-5"> <!-- Start All Course -->
      <h1 class="text-center Allupevents" style=" font-size: 40px;">Upcoming Events</h1>
      <div class="row mt-4 Allinternships" style=""> <!-- Start All Course Row -->
      <?php
          $sql = "SELECT * FROM UpcomingEvents";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $UpcomingEvents_ID = $row['UpcomingEvents_id'];
              echo ' 
                <div class="col-sm-4 mb-4">
                  <a href="Google_form_link?UpcomingEvents_id='.$UpcomingEvents_ID.'" class="btn" style="text-align: left; padding:0px;"><div class="card" style="width: 300px;">
                    <img src="'.str_replace('..', '.', $row['UpcomingEvents_img']).'" class="card-img-top" alt="insert an image" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['_Name'].'</h5>
                      <p class="card-text">'.$row['Details'].'</p>
                    </div>
                    <div class="card-footer">
                       <a class="btn btn-primary text-white font-weight-bolder float-right" href="../'.$row['Google_form_link'].'" style="height: 27px; width: 65px; border-radius:10px; background-color: #193063; font-size: 12px;">Enroll</a>
                    </div>
                  </div> </a>
                </div>
              ';
            }
          }
        ?> 
        </div><!-- End All Course Row -->   
      </div><!-- End All Course -->   
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