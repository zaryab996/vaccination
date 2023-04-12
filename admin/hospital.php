<?php
include('navbar.php');
if(!isset($_SESSION["name"])){
 echo "<script>window.location.assign('hospital.php')</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>  HOSPITALS &mdash; DATA</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
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
    include('sidebar.php');
        ?>  
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>HOSPITALS</h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="">
                  <div class="" >  
                   
                    <a class="btn btn-primary "  href="add_hospital.php">Add hospital+</a><br><br>
                 
                  </div>
                  <div >
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead>
                          <tr>
                           
                            <th>#</th>
                            <th>name</th>
                            <th>email</th>
                           
                            <th>status</th>
                          <th>pictures</th>
                            <th>action</th>
                          </tr>
                        </thead>
<?php 
  include("connection.php");
  $data = mysqli_query($con,"select id,name,email,concat(left(address,20),'...')as address,status,contact from hospital");
    $i = 1;
  while( $user_data =  mysqli_fetch_array($data) ){
  ?>
<tbody>
  <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><a href="vaccine_hospital.php?id=<?php echo $user_data["id"] ?>"><?php echo $user_data["name"] ?></a></td>
      <td><?php echo $user_data["email"] ?></td>
     
      <td><?php echo $user_data["status"] ?></td>

      <td><img src="assets/img/hospital_img/<?php echo $user_data["id"] ?>.jpeg" height="80px" width="100px"></td>
     <td>
     <a class="btn btn-info" href="change_hospital_status.php?id=<?php echo $user_data["id"] ?>"><i <?php 
     if($user_data["status"]==="Inactive"){?>  class="fa fa-check" ><?php }else{ ?><i class="fa fa-times"><?php }?></i></a> 
       <a class="btn btn-danger" href="delete_hos.php?id=<?php echo $user_data["id"] ?>"><i class="fa fa-trash"></i></a>&nbsp;
     <a class="btn btn-primary" href="view_hospital.php?id=<?php echo $user_data["id"] ?>"><i class="fa fa-eye"></i></a>&nbsp;
      
    </td>
    </tr>
    <?php $i++; } ?>
                 
                    </tbody>
                      </table>
                    </div>
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
  <script src="assets/modules/datatables/datatables.min.js"></script>
  <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>