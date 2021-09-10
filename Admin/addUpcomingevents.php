<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'Add UpcomingEvents');
define('PAGE', 'UpcomingEventss');
include('./adminInclude/header.php'); 
include('../dbConnection.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
 if(isset($_REQUEST['UpcomingEventsSubmitBtn'])){
  // Checking for Empty Fields
  if(($_REQUEST['UpcomingEvents_name'] == "") || ($_REQUEST['UpcomingEvents_desc'] == "") || ($_REQUEST['UpcomingEvents_link'] == "") ){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   // Assigning User Values to Variable
   $UpcomingEvents_name = $_REQUEST['UpcomingEvents_name'];
   $UpcomingEvents_desc = $_REQUEST['UpcomingEvents_desc'];
   $UpcomingEvents_link = $_REQUEST['UpcomingEvents_link'];
   $UpcomingEvents_image = $_FILES['UpcomingEvents_img']['name']; 
   $UpcomingEvents_image_temp = $_FILES['UpcomingEvents_img']['tmp_name'];
   $img_folder = '../image/UpcomingEventsimg/'. $UpcomingEvents_image; 
   move_uploaded_file($UpcomingEvents_image_temp, $img_folder);
    $sql = "INSERT INTO UpcomingEvents (_Name, Details, Google_form_link, UpcomingEvents_img ) VALUES ('$UpcomingEvents_name', '$UpcomingEvents_desc', '$UpcomingEvents_link', '$img_folder')";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> UpcomingEvents Added Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add UpcomingEvents </div>';
    }
  }
  }
 ?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New UpcomingEvents</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="UpcomingEvents_name">UpcomingEvents Name</label>
      <input type="text" class="form-control" id="UpcomingEvents_name" name="UpcomingEvents_name">
    </div>
    <div class="form-group">
        <label for="UpcomingEvents_desc">UpcomingEvents Description</label>
        <textarea class="form-control" id="UpcomingEvents_desc" name="UpcomingEvents_desc" row=2></textarea>
      </div>
    <div class="form-group">
      <label for="UpcomingEvents_link">UpcomingEvents Link</label>
      <input type="text" class="form-control" id="UpcomingEvents_link" name="UpcomingEvents_link">
    </div>
    <div class="form-group">
      <label for="UpcomingEvents_img">Image</label>
      <input type="file" class="form-control-file" id="UpcomingEvents_img" name="UpcomingEvents_img">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="UpcomingEventsSubmitBtn" name="UpcomingEventsSubmitBtn">Submit</button>
      <a href="UpcomingEvents.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>

</div>  <!-- div Row close from header -->
</div>  <!-- div Conatiner-fluid close from header -->

<?php
include('./adminInclude/footer.php'); 
?>