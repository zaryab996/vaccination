<?php
include("connection.php");
mysqli_query($con,"delete from patient where id = ".$_GET["id"]." ") ;
echo "<script>window.location.assign('patient.php')</script>";

?>