<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'Add PreviousEvents');
define('PAGE', 'PreviousEvents');
include('./adminInclude/header.php'); 
include('../dbConnection.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
 if(isset($_REQUEST['PreviousEventsubmitBtn'])){
  // Checking for Empty Fields
  if(($_REQUEST['PreviousEvents_name'] == "") || ($_REQUEST['PreviousEvents_desc'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   // Assigning User Values to Variable
   $PreviousEvents_name = $_REQUEST['PreviousEvents_name'];
   $PreviousEvents_desc = $_REQUEST['PreviousEvents_desc'];

   $PreviousEvents_image = $_FILES['PreviousEvents_img']['name']; 
   $PreviousEvents_image_temp = $_FILES['PreviousEvents_img']['tmp_name'];
   $img_folder = '../image/PreviousEventsimg/'. $PreviousEvents_image; 
   move_uploaded_file($PreviousEvents_image_temp, $img_folder);

   $PreviousEvents_link = $_FILES['PreviousEvents_link']['name']; 
   $PreviousEvents_link_temp = $_FILES['PreviousEvents_link']['tmp_name'];
   $link_folder = '../PreviousEventsvid/'.$PreviousEvents_link; 
   move_uploaded_file($PreviousEvents_link_temp, $link_folder);
    $sql = "INSERT INTO PreviousEvents (PreviousEvents_name, PreviousEvents_desc, PreviousEvents_img, PreviousEvents_link) VALUES ('$PreviousEvents_name', '$PreviousEvents_desc', '$img_folder', '$link_folder')";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> PreviousEvents Added Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add PreviousEvents </div>';
    }
  }
  }
 ?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New PreviousEvents</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="PreviousEvents_name">PreviousEvents Name</label>
      <input type="text" class="form-control" id="PreviousEvents_name" name="PreviousEvents_name">
    </div>
    <div class="form-group">
      <label for="PreviousEvents_desc">PreviousEvents Description</label>
      <textarea class="form-control" id="PreviousEvents_desc" name="PreviousEvents_desc" row=2></textarea>
    </div>
    
    <div class="form-group">
      <label for="PreviousEvents_img">PreviousEvents Image</label>
      <input type="file" class="form-control-file" id="PreviousEvents_img" name="PreviousEvents_img">
    </div>
    <div class="form-group">
      <label for="PreviousEvents_link">PreviousEvents Video</label>
      <input type="file" class="form-control-file" id="PreviousEvents_link" name="PreviousEvents_link">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="PreviousEventsubmitBtn" name="PreviousEventsubmitBtn">Submit</button>
      <a href="PreviousEvents.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<!-- Only Number for input fields -->

</div>  <!-- div Row close from header -->
</div>  <!-- div Conatiner-fluid close from header -->

<?php
include('./adminInclude/footer.php'); 
?>