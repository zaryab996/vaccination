<?php


include("connection.php");

$data = mysqli_query($con,"select * from users where id = ".$_GET["id"]." ");

if($user_data= mysqli_fetch_array($data) ){

    if($user_data["status"] === "Active"){
        mysqli_query($con,"update users set status  = 'Inactive' where id = ".$_GET["id"]." ");
    }
    else{
        mysqli_query($con,"update users set status  = 'Active' where id = ".$_GET["id"]." ");
    
    }

    echo "<script>window.location.assign('user_data.php')</script>";

}



?>