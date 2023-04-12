<?php

session_start();
if(isset($_SESSION["name"])){
  echo "<script>window.location.assign('index.php')</script>";
 } 

?>


<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="stylesheet" href="style.css">
  <title>Login &mdash; V.B.S</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

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
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div id="alert"></div>

              <div class="card-body">
                <form method="POST" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <button type="submit" name="btn" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                
            </div>
          
            <div class="footer-left">
          Copyright &copy; 2023<div class="bullet"></div> Design By <a href="#">V.B.S</a>
        </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php

  include('connection.php');

  if(isset($_POST["btn"])){

    $data = mysqli_query($con,"select * from users where email = '".$_POST["email"]."' and password = '".$_POST["password"]."' and status = 'Active' ");
    if($user_data = mysqli_fetch_array($data)){
        $_SESSION["name"] = $user_data["name"];
        $_SESSION["userid"] = $user_data["id"];
        echo "<script>document.getElementById('alert').innerHTML = `<div class='alert alert-success alert-dismissible fade show' role='alert'>Successfully LoggedIn<button type='button' class='close' data-dismiss='alert' aria-label='Close'<span aria-hidden='true'>&times;</span></button></div>` </script>";
      
        echo "<script>setTimeout(function(){  window.location.assign('index.php');  }, 1000); </script>";
    }
    else{
      echo "<script>document.getElementById('alert').innerHTML = `<div class='alert alert-danger alert-dismissible fade show' role='alert'>Invalid<button type='button' class='close' data-dismiss='alert' aria-label='Close'<span aria-hidden='true'>&times;</span></button></div>` </script>";
    }
  }

?>
















  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

<script>
  var loader = document.getElemetById("preloader");
  window.addEventListener("load", function(){
    loader.style.display = "none";

  })
</script>





</body>
</html>