<?php
if(!isset($_SESSION)){ 
   session_start(); 
 }
include('../dbConnection.php');

 if(isset($_SESSION['is_login'])){
  $stuEmail = $_SESSION['stuLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Watch PreviousEvents</title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="../css/stustyle.css">
 <style>
    .head:hover{
       background: #7c8391;
       color: #fff;
    }
 </style>
</head>
<body>
   

   <div class="container-fluid bg p-2" style="margin-bottom: 8px; background-color: #225470; z-index: 10;">
    <a href="../index.php"><h3 style="color: #fff; font-style: 'sans-sarif';">Welcome to TechEdu</h3></a>
    <a class="btn btn-danger" href="./index.php" style="position: absolute; right: 30px; top: 10px;">Home</a>
   </div>
   
   <div class="container-fluid">
    <div class="row" style="height: 800px;">
     <div class="col-sm-3 border-right" style="background: #c6d7f7;">
       <a href="" style="text-decoration: none; color: #fff;"><h4 class="text-center">PreviousEventss</h4></a>
       <ul id="playlist" class="nav flex-column" style="background: aliceblue;">
          <?php
             if(isset($_GET['PreviousEvents_id'])){
              $PreviousEvents_id = $_GET['PreviousEvents_id'];
              $sql = "SELECT * FROM PreviousEvents WHERE PreviousEvents_id = '$PreviousEvents_id'";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
                echo '<li class="nav-item border-bottom py-2 head" movieurl='.$row['PreviousEvents_link'].' style="cursor: pointer; padding-left:0.5rem;">'. $row['PreviousEvents_name'] .'</li>';
               }
              }
             }
          ?>
       </ul>
     </div>
     <div class="col-sm-8">
        <video id="videoarea" src="" class="mt-5 ml-2"style="position: absolute; width:650px; height: 450px; left: 15%; top: 5%" controls>
        </video>
     </div>
     <div class="goto">
        <a href="./studentProfile.php" class="btn btn-primary" style="position: absolute; left: 360px; top: 120px;">Go To My Profile</a>
     </div>
     <div class="out">
        <a href="../logout.php" class="btn btn-primary" style="position: absolute; right: 60px; top: 120px;">Logout</a>
     </div>
    </div>
   </div>



    <!-- Jquery and Boostrap JavaScript -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script type="text/javascript" src="../js/all.min.js"></script>

    <!-- Ajax Call JavaScript -->
    <!-- <script type="text/javascript" src="..js/ajaxrequest.js"></script> -->

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>