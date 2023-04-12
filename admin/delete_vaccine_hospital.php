<?php
include("connection.php");
mysqli_query($con,"delete from vaccine_hospital where id = ".$_GET["id"]." ") ;
echo "<script>window.history.back()</script>";

?>