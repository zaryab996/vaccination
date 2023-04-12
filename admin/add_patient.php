<?php include("navbar.php") ;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>ADD    &mdash; patient </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php 
      include("sidebar.php");?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Add patient</h1>
            
          </div>

          <div class="section-body">
          
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                <h2 class="section-title mb-5">Input patient Details</h2>
                  <div class="card-body">
                    
<form method="POST" enctype="multipart/form-data" >

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input  type="name"  required class="form-control" name="name">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Parent name</label>
    <select required class="form-control" name="Pid">
        
        <?php 
      include("connection.php");
      $data = mysqli_query($con,"select * from parent where status = 'Active' ");
        
      while( $user_data =  mysqli_fetch_array($data) ){
    
    ?>
    
        <option value="<?php echo $user_data["id"] ?>"><?php echo $user_data["name"] ?></option>
    <?php } ?>
      </select>

  </div>
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nic</label>
    <input  type="text"  required class="form-control" name="nic">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
    <input  type="date"  required class="form-control" name="date_of_birth">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input  type="email"  required class="form-control" name="email">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contact</label>
    <input type="number" required class="form-control" name="contact">

  </div>

  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input  type="text" required class="form-control" name="address">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Any diseases</label>
    <input type="text"  required class="form-control" name="any_diseases">

  </div>
  


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">password</label>
    <input name="password" type="password"    class="form-control" >
  </div>

  

  <div class="mb-3">

  <label for="exampleInputEmail1" class="form-label">Picture</label>
    <input type="file" name="userfile" class="form-control">
</div>

  <button name="btn" type="submit" class="btn btn-success">submit</button>


</form>



<?php

include("connection.php");

if(isset ($_POST["btn"])){
    mysqli_query($con,"INSERT INTO `patient`( `name`, `parent_id`, `nic`, `date_of_birth`, `email`, `contact`, `address`, `any_diseases`,  `password`)  VALUES ('".$_POST["name"]."','".$_POST["Pid"]."','".$_POST["nic"]."','".$_POST["date_of_birth"]."','".$_POST["email"]."','".$_POST["contact"]."','".$_POST["address"]."','".$_POST["any_diseases"]."','".$_POST["password"]."')");
    move_uploaded_file($_FILES["userfile"]["tmp_name"],"assets/img/patient_img/".mysqli_insert_id($con).".jpeg");
    echo "<script>alert('Added successfully')</script>";
    echo"<script>window.location.assign('patient.php')</script>";
  }

?>    

</div> 
 </div>   
 </div>
            
 </div>
 </div>
</section>
</div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2023<div class="bullet"></div> Design By <a href="#">V.B.S</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/cleave-js/dist/cleave.min.js"></script>
  <script src="assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
  <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/forms-advanced-forms.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>





