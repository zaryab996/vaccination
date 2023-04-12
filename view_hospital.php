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
      <title>view hospital</title>
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
     
     @-webkit-keyframes animationgradienttitle {
  0% {
    background-position: 0 1600px;
  }
  100% {
    background-position: 1600px 0;
  }
}
@keyframes animationgradienttitle {
  0% {
    background-position: 0 1600px;
  }
  100% {
    background-position: 1600px 0;
  }
}

.c-article {

  text-align: center;
  
}

.c-article__header {
  position: relative;
}

.c-article__title {
  font-family: "Scope One", serif;
  font-size: 3em;
  color: #fc3735;
  font-weight:900;
  background: -webkit-linear-gradient(left, #f57170, #10ddc2, #f57170);
  background-size: 1600px 200px;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-animation-duration: 3s;
          animation-duration: 3s;
  -webkit-animation-name: animationgradienttitle;
          animation-name: animationgradienttitle;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}

.u-font-lora {
  font-family: "Lora", serif;
  font-size: 1.5em;
  font-weight: 700;


}
.card-title{
color:purple;
font-weight:900;
text-align:center;

}
.card-text{
font-weight:700;
font-size:18px;
color:black;
}
.card-text2{
  color:black;
  font-size:16px;
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
<?php 

include("Admin/connection.php");

$data=  mysqli_query($con,"select * from hospital where id = ".$_GET["id"]." ");
if($user_data = mysqli_fetch_array($data)){
?>


           

    
         <div class="container-fluid" style=" margin-top:5%;">
         
  
            <div class="row">
               <div class="col-md-12">
                  
               <div class="card mb-12" style="background :#D4D4D4" style="max-width: 100%; height: 100%;">
  <div class="row g-0" >
    <div class="col-md-4" >
      <img src="Admin/assets/img/hospital_img/<?php echo $user_data["id"] ?>.jpeg " class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8"  >
      <div class="card-body">
      <article class="c-article">
  <header class="c-article__header">
    <h1 class="c-article__title">
    <?php echo $user_data["name"] ?> 
    </h1>
  </header>
</article>
       
        <p class="card-text"> Address: &nbsp;<?php echo $user_data["address"] ?></p>
        <p class="card-text">Description:&nbsp;<?php echo $user_data["description"] ?></p>
        <p class="card-text">Contact:&nbsp; <?php echo $user_data["contact"] ?></p>
        <p class="card-text">Email:&nbsp;  <?php echo $user_data["email"] ?></p>
        <p class="card-text">Time Opening:&nbsp; <?php echo $user_data["timing_opening"] ?><br>
       Time Closing:&nbsp; <?php echo $user_data["timing_closing"] ?></p>

       <article class="c-article">
  <header class="c-article__header">
    <h1 class="c-article__title">
   Availabe Vaccines
    </h1>
  </header>
</article>
<?php 

include("Admin/connection.php");

$data3=  mysqli_query($con,"SELECT vaccine.name as vname FROM `vaccine_hospital` INNER JOIN vaccine on vaccine_hospital.vaccine_id = vaccine.id where vaccine_hospital.hospital_id = ".$_GET["id"]." ");
while($user_data3 = mysqli_fetch_array($data3)){
?>
 <p class="card-text">  <?php echo $user_data3["vname"] ?></p>
 <?php } ?>

 <a  class="  btn-primary d-block btn-lg mt-5" style="text-align:center;" href="appointments.php?id=<?php echo $user_data["id"] ?>">Book Appointment</a>
      </div>
    </div>
</div>
</div>
</div>
</div>
&nbsp;
<?php  } ?>




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