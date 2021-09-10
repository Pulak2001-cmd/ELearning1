 <!-- Start Footer -->
 
 <section id="footer">
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
            echo '<a href="admin/adminDashboard.php" style="color: #fff">..</a> <a href="logout.php"  style="color: #fff">...</a>';
          }else {
            echo '<a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter" style="color: #fff">...</a>';
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
        <div class="modal-content" style="border-radius:12px; background-color:#a8d0f4;">
          <div class="modal-header" style="background:#175489; border-radius:10px;">
            <h5 class="modal-title" id="stuRegModalCenterTitle" style="font-size:15px; color:white;">Student Registration</h5>
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
            <button type="button" class="btn btn-primary" style="height:30px; width:60px; font-size:13px; border-radius:10px; background:#175489;" id="signup" onclick="addStu()">SignUp</button>
            <button type="button" class="btn btn-secondary" style="height:30px; width:60px; font-size:13px; border-radius:10px;" data-dismiss="modal" onclick="clearAllStuReg()">Close</button>
          </div>
        </div>
      </div>
    </div> <!-- End Student Registration Modal -->


    <!-- Start Student Login Modal -->
    <div class="modal fade" style="border-radius:8px;"  id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius:12px; background-color:#a8d0f4;" >
          <div class="modal-header" style="background:#175489; border-radius:10px;">
            <h5 class="modal-title" id="stuLoginModalCenterTitle" style="font-size:15px; color:white;">Student Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="clearStuLoginWithStatus()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <form role="form" id="stuLoginForm" style="height:210px; width: 400px;">
              <div class="form-group" style=" font-size: 15px; height:50px;"> 
                <i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold" style="margin-top:10px;">Email</label><small id="statusLogMsg1"></small><input type="email"
                    class="form-control" style="height: 30px; width:120%;  margin-top:6px;" placeholder="Email" name="stuLogEmail" id="stuLogEmail">
                </div>
                <div class="form-group"  style=" font-size: 15px; height:50px;">
                  <i class="fas fa-key"></i><label for="stuLogPass" class="pl-2 font-weight-bold" style="margin-top: 32px;">Password</label><input type="password" class="form-control" style="height: 30px; width:120%;  margin-top:6px;" placeholder="Password" name="stuLogPass" id="stuLogPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <small id="statusLogMsg"></small>
            <button type="button" class="btn btn-primary" style="height:30px; width:60px; font-size:13px; border-radius:10px; background:#175489;" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            <button type="button" class="btn btn-secondary" style="height:30px; width:60px; font-size:13px; border-radius:10px;" data-dismiss="modal" onClick="clearStuLoginWithStatus()">Cancel</button>
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