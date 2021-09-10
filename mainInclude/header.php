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
                echo '<li style="margin-left: 255px; border-radius:50%;">
                <a href="#" class="desktop-link" style=""><img src="./maininclude/login.png" alt="default" style="height: 60px; width: 50%"></a>
                <input type="checkbox" id="show-items">
                <label for="show-items" style="margin-left: 255px">Upcoming Events</label>
                <ul>
                  <li><a href="student/studentProfile.php">My Profile</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </li>';
            } else {
              echo '
              <li><a href="#login" data-toggle="modal" data-target="#stuLoginModalCenter" style="">Login</a></li>
              <li><a href="#signup" data-toggle="modal" data-target="#stuRegModalCenter" style="">Signup</a></li>
              }
          ?> 
        </ul>
      </div>
    </nav>
  </div>
