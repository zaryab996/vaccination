<?php
include("connection.php");
mysqli_query($con,"delete from hospital where id = ".$_GET["id"]." ") ;
echo "<script>window.location.assign(' hospital.php')</script>";

?>