<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'Add Internship');
define('PAGE', 'Internships');
include('./adminInclude/header.php'); 
include('../dbConnection.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
 if(isset($_REQUEST['internshipSubmitBtn'])){
  // Checking for Empty Fields
  if(($_REQUEST['internship_name'] == "") || ($_REQUEST['internship_desc'] == "") || ($_REQUEST['internship_link'] == "") ){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   // Assigning User Values to Variable
   $internship_name = $_REQUEST['internship_name'];
   $internship_desc = $_REQUEST['internship_desc'];
   $internship_link = $_REQUEST['internship_link'];
   $internship_image = $_FILES['internship_img']['name']; 
   $internship_image_temp = $_FILES['internship_img']['tmp_name'];
   $img_folder = '../image/internshipimg/'. $internship_image; 
   move_uploaded_file($internship_image_temp, $img_folder);
    $sql = "INSERT INTO internship (_Name, Details, Google_form_link, Internship_img ) VALUES ('$internship_name', '$internship_desc', '$internship_link', '$img_folder')";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Internship Added Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add Internship </div>';
    }
  }
  }
 ?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Internship</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="internship_name">Internship Name</label>
      <input type="text" class="form-control" id="internship_name" name="internship_name">
    </div>
    <div class="form-group">
        <label for="internship_desc">Internship Description</label>
        <textarea class="form-control" id="internship_desc" name="internship_desc" row=2></textarea>
      </div>
    <div class="form-group">
      <label for="internship_link">Internship Link</label>
      <input type="text" class="form-control" id="internship_link" name="internship_link">
    </div>
    <div class="form-group">
      <label for="internship_img">Image</label>
      <input type="file" class="form-control-file" id="internship_img" name="internship_img">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="internshipSubmitBtn" name="internshipSubmitBtn">Submit</button>
      <a href="Internship.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>

</div>  <!-- div Row close from header -->
</div>  <!-- div Conatiner-fluid close from header -->

<?php
include('./adminInclude/footer.php'); 
?>