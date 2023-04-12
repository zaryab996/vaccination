<?php

session_start();

if(!isset($_SESSION["parent_id"])){
    echo "<script>window.location.assign('login.php')</script>";
   } 

?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- basic -->
     <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Appointments</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
     
      
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <!-- basic -->
 <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
    
     
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   
   
   <style>
     body{
      background-color:#ECECEC;
     }
     
    .login-container{
    margin-top: 3%;
    margin-bottom: 3%;
    background-color:white;
}

.login-form-1{
    padding: 6%;
    background:#282726;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    margin-bottom:5%;
    color:#fff;
    font-weight:900;
    font-size:25px;
}

.btnSubmit{
    font-weight: 600;
    width: 30%;
    color: #282726;
    background-color: #fff;
    border: none;
    border-radius: 1.5rem;
    padding:1%;
}


  
   </style>
  </head>
  <body>
    
  <?php
include('navbar.php');
?>
 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                <div class="col-md-12 login-form-1">
                    <h3>Appointment</h3>
                    <div id="alert"></div>
                    <form action="" method="post">
                    <div class="form-group">
                    <div class="form-group">
                    <label for="patient">patient</label>
                <select required class="form-control" name="patient_id">
                        
                        

                    <?php 
  include("Admin/connection.php");
  $data = mysqli_query($con,"select * from patient where status = 'Active' and parent_id=".$_SESSION["parent_id"]." ");
    
  while( $user_data =  mysqli_fetch_array($data) ){

?>
    
    <option value="<?php echo $user_data["id"] ?>"><?php echo $user_data["name"] ?></option>
<?php } ?>
  </select>
            </div>              
                  
                        <div class="form-group">
                        <label for="vaccine">vaccine</label>
                <select required class="form-control" name="vaccine_hospital_id">
        
    <?php 
  include("Admin/connection.php");
 


$data3=  mysqli_query($con,"SELECT vaccine.name as vname,vaccine_hospital.id FROM `vaccine_hospital` INNER JOIN vaccine on vaccine_hospital.vaccine_id = vaccine.id where vaccine_hospital.hospital_id = ".$_GET["id"]." ");
while($user_data3 = mysqli_fetch_array($data3)){
?>




    <option value="<?php echo $user_data3["id"] ?>"><?php echo $user_data3["vname"] ?></option>
<?php } ?>
  </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="btnSubmit" value="Make Appointment" />
                        </div>
                        <?php
                include('Admin/connection.php');
                if(isset($_POST['btn'])){

$token =uniqid();
mysqli_query($con," INSERT INTO `appointment`( `patient_id`, `vaccine_hospital_id`, `token`) VALUES ('".$_POST["patient_id"]."','".$_POST["vaccine_hospital_id"]."','".$token."') ");
echo "<script>alert('Appointment created successfully')</script>";
echo "<script>window.location.assign('parent_dashboard.php')</script>";

                }
?>
                       
</form>

                </div>
</div>
</div>
            </div>
               

              

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <?php

include('footer.php');
?>
  </body>
  
  <script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
              
         $(".zoom").hover(function(){
              
         $(this).addClass('transition');
         }, function(){
              
         $(this).removeClass('transition');
         });
         });
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script> 
</html>