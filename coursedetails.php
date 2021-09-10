<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>  
<div style="position:absolute; width:100%; height:100%; top:0px; left:0px; background-color:#c4dfff;">

</div>
    <div class="container mt-8" style="position:absolute; top:-30px; left:250px; padding: 0; "> <!-- Start All Course -->
      <?php
          if(isset($_GET['course_id'])){
           $course_id = $_GET['course_id'];
           $_SESSION['course_id'] = $course_id;
           $sql = "SELECT * FROM course WHERE course_id = '$course_id'";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              echo ' 
                <div class="row" style:"height:150%; width:600px; position:absolute; top:150px; border:2px solid red;">
                <div class="col-md-7" style:" position:absolute; top:150px; height:150%; width:600px; z-index:100;">
                  <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" style="position: absolute; top: -150px; left:-120px; width:300px; height:300px;" />
                </div>
                <div class="col-md-5" style:" position:absolute; top:150px; height:150%; width:600px; z-index:100; border:2px solid red;">
                  <div class="card-body" style="position: absolute; top: -150px; left: 140px; width: 450px">
                    <h5 class="card-title">Course Name: '.$row['course_name'].'</h5>
                    <p class="card-text"> Description: '.$row['course_desc'].'</p>
                    <p class="card-text"> Duration: '.$row['course_duration'].'</p>
                    <form action="checkout.php" method="post">
                      <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p>
                      <input type="hidden" name="id" value='. $row["course_price"] .'> 
                      <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" style="height: 27px; width: 65px; border-radius:10px; background-color:#193063; font-size: 13spx;" name="buy">Buy Now</button>
                    </form>
                  </div>
                </div>
              ';
            }
          }
         }
        ?>   
      </div><!-- End All Course --> 
      <div class="container">
          <div class="row">
          <?php $sql = "SELECT * FROM lesson";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
          echo '
          <h2 style="position:absolute; top:220px; left:700px; font-size:50px;">Course Overview</h2>
          
           <table class="table table-bordered table-hover" style="position: absolute; top: 310px; width: 400px; left: 700px;">
             <thead>
               <tr>
                 <th scope="col">Lesson No.</th>
                 <th scope="col">Lesson Name</th>
               </tr>
             </thead>
             <tbody>';
             $num = 0;
             while($row = $result->fetch_assoc()){
              if($row['course_id'] == $course_id) {
               $num++;
              echo ' <tr>
               <th scope="row">'.$num.'</th>
               <td>'. $row["lesson_name"].'</td></tr>';
              }
             }
             echo '</tbody>
           </table>';
            } ?>         
       </div>
      </div> 
       
     <!-- Start Footer -->
 
 <section id="footer" style="position:absolute; width: 1568px; top:620px; left:-300px;">
    <div class="footer container">
      <div class="brand">
        <h1>
          TECHEDU
        </h1>
      </div>
      <h2>Your Complete Learning Solutions</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.linkedin.com/company/techedu-learning/" target="_blank">
            <img src="https://img.icons8.com/bubbles/50/000000/linkedin.png" />
          </a>
        </div>
        <div class="social-item">
          <a href="https://instagram.com/techedu_learning" target="_blank">
            <img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" />
          </a>
        </div>
        <div class="social-item">
          <a href="https://www.youtube.com/channel/UCRdr5sNGHbJ9Ztx3Sg8ORCQ" target="_blank">
            <img src="https://img.icons8.com/bubbles/50/000000/youtube.png" />
          </a>
        </div>
        <div class="social-item">
          <a href="https://www.facebook.com/techedu.learning" target="_blank">
            <img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" />
          </a>
        </div>
        <div class="social-item">
          <a href="https://mobile.twitter.com/TalentTechedu" target="_blank">
            <img src="https://img.icons8.com/bubbles/50/000000/twitter-circled.png"/>
          </a>
        </div>
      </div>
      <p>Copyright © 2021 TechEdu</p>
      <?php   
          if (isset($_SESSION['is_admin_login'])){
            echo '<a href="admin/adminDashboard.php" style="color: #fff"> Admin Dashboard</a> <a href="logout.php"  style="color: #fff">Logout</a>';
          }else {
            echo '<a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter" style="color: #fff"> Admin Login</a>';
          }
    ?>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../src/index.js" type="text/jsx"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="./app.js"></script>
  <!-- Animation -->
  <script src="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.0/oyethemes_onscroll_animation.js"></script>
</body>
</html>
    <!-- Start Student Registration Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="stuRegModalCenterTitle">Student Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearAllStuReg()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!--Start Form Registration-->
            <?php include('studentRegistration.php'); ?>
            <!-- End Form Registration -->
          </div>
          <div class="modal-footer">
            <span id="successMsg"></span>
            <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearAllStuReg()">Close</button>
          </div>
        </div>
      </div>
    </div> <!-- End Student Registration Modal -->


    <!-- Start Student Login Modal -->
    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="stuLoginModalCenterTitle">Student Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="clearStuLoginWithStatus()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" id="stuLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label><small id="statusLogMsg1"></small><input type="email"
                    class="form-control" placeholder="Email" name="stuLogEmail" id="stuLogEmail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="stuLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="stuLogPass" id="stuLogPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <small id="statusLogMsg"></small>
            <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="clearStuLoginWithStatus()">Cancel</button>
          </div>
        </div>
      </div>
    </div> <!-- End Student Login Modal -->


  <!-- Start Admin Login Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModalCenterTitle">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="clearAdminLoginWithStatus()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" id="adminLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="adminLogEmail" class="pl-2 font-weight-bold">Email</label><input type="email"
                    class="form-control" placeholder="Email" name="adminLogEmail" id="adminLogEmail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="adminLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogPass" id="adminLogPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <small id="statusAdminLogMsg"></small>
            <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="clearAdminLoginWithStatus()">Cancel</button>
          </div>
        </div>
      </div>
    </div> <!-- End Admin Login Modal -->

    <!-- Jquery and Boostrap JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script type="text/javascript" src="js/all.min.js"></script>

    <!-- Student Testimonial Owl Slider JS  -->
    <script type="text/javascript" src="js/owl.min.js"></script>
    <script type="text/javascript" src="js/testyslider.js"></script>

    <!-- Student Ajax Call JavaScript -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>

    <!-- Admin Ajax Call JavaScript -->
    <script type="text/javascript" src="js/adminajaxrequest.js"></script>

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script>
      $(document).ready(function () {
        // Change Navbar Color on Scroll
        // $(window).scrollTop() returns the position of the top of the page
        $(window).scroll(function () {
          if ($(window).scrollTop() >= 600) {
          $(".navbar").css("background-color", "#225470");
          } else {
          $(".navbar").css("background-color", "transparent");
          }
        });
        })
    </script>

  </body>

</html>