<?php
session_start();
?>



<nav class="navbar navbar-expand-lg main-navbar " style="background-color:gray;"style= "border:2px solid gray ;">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
           
          </ul>
         
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                
              </div>
              <div class="dropdown-list-content dropdown-list-message">

              <?php 
  include("connection.php");
  $data = mysqli_query($con,"select id,name,email, concat(left(subject,20),'...') as subject   ,contact_no,created_at from contact where status = 'unread' limit 4");
   
  while( $user_data =  mysqli_fetch_array($data) ){
  ?>

                <a href="view_contact.php?id=<?php echo $user_data["id"] ?>" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b><?php echo $user_data["name"] ?></b>
                    <p>send a message!</p>
                    <div class="time"><?php echo $user_data["created_at"] ?></div>
                  </div>
                </a>
                
<?php } ?>


              </div>
              <div class="dropdown-footer text-center">
                <a href="contact.php">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          

          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                 
                </div>
              </div>
             
 
              <div class="dropdown-list-content dropdown-list-icons">
            
              <?php
          include("connection.php");
  $data = mysqli_query($con,"SELECT appointment.id, hospital.name as hospital_name , vaccine.name as vaccine_name , patient.name as patient_name , appointment.datetime as date_time,appointment.status,appointment.token,appointment.created_at
  FROM `appointment`inner JOIN patient on appointment.patient_id = patient.id
  INNER JOIN vaccine_hospital on appointment.vaccine_hospital_id = vaccine_hospital.id 
  INNER JOIN hospital on vaccine_hospital.hospital_id = hospital.id
  INNER JOIN vaccine on vaccine_hospital.vaccine_id = vaccine.id where appointment.status='onprogress' limit 4");
  
  
  while( $user_data =  mysqli_fetch_array($data) ){
    ?>       
                <a href="view_appointment.php?id=<?php echo $user_data["id"] ?>" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
  
                  <div class="dropdown-item-desc">
                  <b><?php echo $user_data["hospital_name"] ?></b>
                    <div class="time text-primary"> <b><?php echo $user_data["patient_name"] ?></b></div>
                    <div class="time text-primary"> <b><?php echo $user_data["date_time"] ?></b></div>
                  </div>
                </a>
                <?php } ?>
              </div>
              <div class="dropdown-footer text-center">
                <a href="appointment.php">View All <i class="fas fa-chevron-right"></i></a>
              </div>
             
            </div>
          </li>
          
  
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
          <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><form class="d-flex">
            <?php if(isset($_SESSION["name"])){ echo $_SESSION["name"];}?>
            
      
      </form></div></a>
            <div class="dropdown-menu dropdown-menu-right">
             
              <a href="user_profile.php" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="view_appointment.php" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>