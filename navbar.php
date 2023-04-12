

         <div class="container-fluid">
         <nav class="navbar navbar-expand-lg   " style="background-color:#242526;">
  <div class="container-fluid">
  <div class="logo"><a href="index.php"><img src="images/VBS.png"  width="180px"></a></div>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <ul class="navbar-nav me-auto  mb-2 mb-lg-0"  style="padding-right:450px; color:white;" >

        <li  class="nav-item">
          <a style=" color:white; font-size:20px; font-weight:500;" class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a style=" color:white; font-size:20px; font-weight:500;" class="nav-link"href="vaccine_card.php">Vaccines</a>
        </li>
        <?php if(isset($_SESSION["parent_id"])){?>
      
        <li class="nav-item ">
          <a style=" color:white; font-size:20px; font-weight:500;" class="nav-link " href="parent_dashboard.php">
             Dashboard
          </a>
        </li>
        <?php
                                                }?>
        <?php if(isset($_SESSION["parent_id"])){?>
        <li  class="nav-item">
          <a style=" color:white; font-size:20px; font-weight:500;" href="hospital_card.php" class="nav-link">Hospitals</a>
</li>
<?php
                                                }?>

<li  class="nav-item">
          <a style=" color:white; font-size:20px; font-weight:500;"href="about_us.php" class="nav-link">About</a>
</li>

                                              </ul>
<?php if(!isset($_SESSION["parent_id"])){?>
<div style="margin-top:10px;"  class="more_bt"><a href="login.php">login</a></div>&nbsp;&nbsp;

<div  style="margin-top:10px;" class="more_bt"><a href="signup1.php">signup</a></div>
<?php
                                                }?>

<?php if(isset($_SESSION["parent_id"])){?>

  <div  style="margin-top:10px;" class="more_bt"><a href="web_logout.php">logout</a></div>&nbsp;
  <?php
  }?>

<li class="nav-item ml-3" style="color:white;">

           
          
           <?php if(isset($_SESSION["parent_name"])) { 
          ?>
          <p2 class="">Welcome</p2>
          <?php
            echo  $_SESSION["parent_name"];}
           ?>
           
          
    
          
         </li>
    
 </div>
                                
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