

<div class="container-fluid">
         <nav class="navbar navbar-expand-lg   " style="background-color:#242526;">
  <div class="container-fluid">
  <div class="logo"><a href="index.php"><img src="images/VBS.png" width="150px"></a></div>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <ul class="navbar-nav me-auto  mb-2 mb-lg-0"  style="padding-right:450px; color:white;" >

        <li  class="nav-item">
          <a style=" color:white; font-size:20px; font-weight:500;" class="nav-link active" aria-current="page" href="hospital_index.php">Home</a>
        </li>
        <li class="nav-item">
          <a style=" color:white; font-size:20px; font-weight:500;" class="nav-link"href="show_hospital_vaccine.php">Vaccines</a>
        </li>
 
                                              </ul>


<?php if(isset($_SESSION["hospital_id"])){?>

  <div  style="margin-top:10px;" class="more_bt"><a href="hospital_logout.php">logout</a></div>
  <?php
                                                }?>

<div class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link ">
           
           <div class="d-sm-none d-lg-inline-block "><form >
           <?php if(isset($_SESSION["hospital_name"]))
           
           { ?>
           <img alt="image" src="assets/avatar-1.png" height="30" width="30" class="rounded-circle mr-1">&nbsp;

           <?php
           echo  $_SESSION["hospital_name"];
          
       } ?>
     </form></div></a>
          
      </div>
                                               
 
 


                           
    </div>
  </div>
  <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="hospital_index.php">Home</a>
                              <a href="show_hospital_vaccine.php">vaccine</a>
                             
                           </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                       
                        <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
</nav>


              
            </div>