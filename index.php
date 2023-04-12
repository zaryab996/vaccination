<?php
session_start();


 
?>
<!DOCTYPE html>
<html lang="en">
   <head>
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <!-- basic -->
      <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Index</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
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
     .nav-link {
      color:white; 
      font-size:20px; 
      font-weight:900;
     }
   </style>
   <body>
      <!--header section start -->
      <div class="header_section"  >
      

      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg   " >
  <div class="container-fluid">
  <div class="logo"><a href="index.php"><img src="images/VBS.png" width="180px"></a></div>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <ul class="navbar-nav me-auto  mb-2 mb-lg-0" style="padding-right:450px; color:white;" >

        <li  class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link"href="vaccine_card.php">Vaccines</a>
        </li>
        <?php if(isset($_SESSION["parent_id"])){?>
      
        <li class="nav-item ">
          <a  class="nav-link " href="parent_dashboard.php">
             Dashboard
          </a>
        </li>
        <?php
                                                }?>
        <?php if(isset($_SESSION["parent_id"])){?>
        <li  class="nav-item">
          <a  href="hospital_card.php" class="nav-link">Hospitals</a>
</li>
<?php
                                                }?>

<li  class="nav-item">
          <a href="about_us.php" class="nav-link">About</a>
</li>

                                              </ul>
<?php if(!isset($_SESSION["parent_id"])){?>
<div style="margin-top:10px;"  class="more_bt"><a href="login.php">login</a></div>&nbsp;&nbsp;

<div  style="margin-top:10px;" class="more_bt"><a href="signup1.php">signup</a></div>
<?php
                                                }?>

<?php if(isset($_SESSION["parent_id"])){?>

  <div  style="margin-top:10px; margin-right:50px;" class="more_bt"><a href="web_logout.php">logout</a></div>
  <?php
                                                }?>


           
<li class="nav-item" style="font-weight:900; font-size:18px;" >

           <b>
         
           <?php if(isset($_SESSION["parent_name"])) { 
          ?>
          <p2 class="">Welcome</p2>
          <?php
            echo  $_SESSION["parent_name"];}
           ?>
           
         <b/>
    
          
         </li>
          
     
                                               
 
 


                           
    </div>
  </div>
  <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="index.php">Home</a>
                              <?php if(isset($_SESSION["parent_id"])){?>
                              <a href="parent_dashboard.php">Dashoard</a>
                              <?php
                                                }?>
                              <a href="vaccine_card.php">Vaccines</a>
                              <a href="about_us.php">About</a>
                              <?php if(isset($_SESSION["parent_id"])){?>
                              <a href="hospital_card.php">Hospitals</a>
                              <?php
                                                }?>
                                                <?php if(!isset($_SESSION["parent_id"])){?>
                              <a href="login.php">login</a>
                              <a href="signup1.php">signup</a>
                              <?php
                                                }?>
                              <?php if(isset($_SESSION["parent_id"])){?>
                              <a href="web_logout.php">logout</a>
                              <?php
                                                }?>
                           </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                       
                        <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
</nav>


              
            </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Get Medical Care early</h1>
                              <p class="banner_text"> Stay home if you feel unwell. If you have a fever, cough and difficulty breathing, seek medical attention </p>
                             
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Get Medical Care early</h1>
                              <p class="banner_text"> Stay home if you feel unwell. If you have a fever, cough and difficulty breathing, seek medical attention </p>
                              
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/desn33.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Get Medical Care early</h1>
                              <p class="banner_text"> Stay home if you feel unwell. If you have a fever, cough and difficulty breathing, seek medical attention </p>
                            
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/desn33.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>            
      </div>
</div>
      </div>
      <!-- header section end -->
      <!-- protect section start -->
      <div class="protect_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="protect_taital">How to Protect Yourself</h1>
                  <p class="protect_text">Most people with COVID-19 have mild illness and can recover at home. You can treat symptoms with over-the-counter medicines, such as acetaminophen (Tylenol) or ibuprofen (Motrin, Advil), to help you feel better</p>
               </div>
            </div>
            <div class="protect_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="hands_text"><a href="#">Wash your <br>hands frequently</a></h1>
                     <h1 class="hands_text_2"><a href="#">Maintain social <br>distancing</a></h1>
                     <h1 class="hands_text"><a href="#">Avoid touching eyes,<br>nose and mouth</a></h1>
                  </div>
                  <div class="col-md-6">
                     <div class="image_2"><img src="images/img-2.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- protect section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="images/img-1.png"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital">Coronavirus what it is? </span></h1>
                  <p class="about_text">Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.

Most people infected with the virus will experience mild to moderate respiratory illness and recover without requiring special treatment. However, some will become seriously ill and require medical attention. Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness. Anyone can get sick with COVID-19 and become seriously ill or die at any age. </p>
                
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- doctor section start -->
      <div class="doctors_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="taital_main">
                     <div class="taital_left">
                        <div class="play_icon"><img src="images/play-icon.png"></div>
                     </div>
                     <div class="taital_right">
                        <h1 class="doctor_taital">What doctors say..</h1>
                        <p class="doctor_text">COVID-19 targets the lungs. So, you're more likely to develop severe symptoms if you already have various chronic lung problems, including: Chronic obstructive pulmonary disease (COPD) Lung cancer.</p>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- doctor section end -->
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1 class="news_taital">Latest News</h1>
                     <p class="news_text">Most people with COVID-19 have mild illness and can recover at home. You can treat symptoms with over-the-counter medicines, such as acetaminophen (Tylenol) or ibuprofen (Motrin, Advil), to help you feel better</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/news-img.png"></div>
                           <h2 class="design_text">Coronavirus is Very dangerous</h2>
                           <p class="lorem_text">Symptoms of COVID-19 can range from mild to severe, including fever, cough, and difficulty breathing. The virus spreads through respiratory droplets when an infected person coughs, sneezes, talks, or breathes, and can also be spread by touching contaminated surfaces and then touching the face.</p>
                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                    <h1 class="news_taital">Latest News</h1>
                     <p class="news_text">Most people with COVID-19 have mild illness and can recover at home. You can treat symptoms with over-the-counter medicines, such as acetaminophen (Tylenol) or ibuprofen (Motrin, Advil), to help you feel better</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/polio.jpg"></div>
                           <h2 class="design_text">Polio virus is Very dangerous</h2>
                           <p class="lorem_text">Polio mainly affects young children, and symptoms can include fever, fatigue, headache, stiffness in the neck, and paralysis of limbs. There is no specific treatment for polio, and prevention efforts focus on vaccination with the polio vaccine, which has been highly effective in reducing the incidence of polio worldwide.</p>
                         
                        </div>
                     </div>
                  </div>
                 
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
            </div>
         </div>
      </div>
      <!-- news section end -->
      <!-- update section start -->
      <div class="update_section pt-5">
         <div class="container">
            <h1 class="update_taital">Contact Us.... </h1>
            <form method="post" >
               <div class="form-group">
                   <textarea class="update_mail  " required  placeholder="name" rows="5" id="comment" name="name"></textarea>
               </div>
               <div class="form-group">
                   <textarea class="update_mail"required placeholder="email" rows="5" id="comment" name="email"></textarea>
               </div>
               <div class="form-group">
                  
                   <textarea class="update_mail"  required placeholder="contact_no" rows="5" id="comment" name="contact_no"></textarea>
               </div>
               <div class="form-group">
                   <textarea class="update_mail"  required placeholder="subject" rows="5" id="comment" name="subject"></textarea>
               </div>
               <div class="form-group">
                   <textarea class="update_mail" required placeholder="message" rows="5" id="comment" name="message"></textarea>
               </div><br>
                <div class="form-group">
                 <button style=" margin-left:220px; border-radius:20px ; margin-top:-10px; " class="btn-primary readmore_bt btn-lg ">submit</button>
               </div>
              
            </form>
            
         </div>
      </div>
      <?php
      include"Admin/connection.php";
      if(isset($_POST["btn"])){

    mysqli_query($con,"INSERT INTO `contact`(`name`, `email`, `contact_no`, `subject`, `message`) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["contact_no"]."','".$_POST["subject"]."','".$_POST["message"]."')");
   echo "<script>alert('submitted')</script>";
  
      }
      ?>
      <!-- update section end -->
      <!-- footer section start -->
      <?php

      include('footer.php');
      ?>
       
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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
   </body>
</html>