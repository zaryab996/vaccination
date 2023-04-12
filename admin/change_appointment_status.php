<?php


include("connection.php");

$data = mysqli_query($con,"select * from appointment where id = ".$_GET["id"]." ");

if($user_data= mysqli_fetch_array($data) ){

    if($user_data["status"] === "onprogress"){
        mysqli_query($con,"update appointment set status  = 'completed' where id = ".$_GET["id"]." ");
    }
    else if($user_data["status"] === "completed"){
        mysqli_query($con,"update appointment set status  = 'decline' where id = ".$_GET["id"]." ");
    
    }
    else if($user_data["status"] === "decline"){
        mysqli_query($con,"update appointment set status  = 'onprogress' where id = ".$_GET["id"]." ");
        
    }

    echo "<script>window.location.assign('view_appointment.php')</script>";

}



?>