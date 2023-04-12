<?php

include('navbar.php');

if(!isset($_SESSION["name"])){
 echo "<script>window.location.assign('modules-datatables.php')</script>";
} 
 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>vaccine &rsaquo;  &mdash; </title>

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
     

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>vaccines</h1>
            <div class="section-header-breadcrumb">
            
              
             
            </div>
          </div>

          <div class="section-body">
          <h2 class="section-title mb-5">Vaccine details</h2>
           

           

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="ml-4" >
                    
                   

                    <?php 

include("connection.php");

$data=  mysqli_query($con,"select * from vaccine where id = ".$_GET["id"]." ");
if($user_data = mysqli_fetch_array($data)){
?>

   

    <form method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input  type="name" value="<?php echo $user_data["name"] ?>" required class="form-control" name="name">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">mg</label>
    <input  type="text" value="<?php echo $user_data["mg"] ?>" required class="form-control" name="mg">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">description</label>
    <input type="text" value="<?php echo $user_data["description"] ?>" required class="form-control" name="description">

  </div>

  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">manufacturing date</label>
    <input  type="text" value="<?php echo $user_data["manufacturing_date"] ?>" required class="form-control" name="manufacturing_date">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">expire date</label>
    <input type="text" value="<?php echo $user_data["expire_date"] ?>" required class="form-control" name="expire_date">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">status</label>
    <input  type="text" value="<?php echo $user_data["status"] ?>" required class="form-control" name="status">

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">created at</label>
    <input disabled  type="text" value="<?php echo $user_data["created_at"] ?>" required class="form-control" name="created_at">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">updated at</label>
    <input disabled type="text" value="<?php echo $user_data["updated_at"] ?>" required class="form-control" name="updated_at">

  </div>
  <div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Picture</label>
  <input type="file" name="userfile" class="form-control">
</div>
  

  <button name="btn1" type="submit" class="btn btn-success">update</button>


  <div class="mb-3">
    
    </select>

  </div>

</form>

<?php } ?>

<?php

include("connection.php");

if(isset($_POST["btn1"])){

    mysqli_query($con,"update vaccine set name= '".$_POST["name"]."', mg ='".$_POST["mg"]."',
    description= '".$_POST["description"]."' ,manufacturing_date= '".$_POST["manufacturing_date"]."',
    expire_date= '".$_POST["expire_date"]."',status= '".$_POST["status"]."' where id = ".$_GET["id"]." ");
    move_uploaded_file($_FILES["userfile"]["tmp_name"],"/assets/img/vaccine_img/".$_GET["id"].".jpeg");
    echo "<script>alert(' Updated')</script>";
    echo "<script>window.location.assign('vaccine.php')</script>";

}

?>    
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