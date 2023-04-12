<?php
include("connection.php");
mysqli_query($con,"delete from vaccine where id = ".$_GET["id"]." ") ;
echo "<script>window.location.assign('vaccine.php')</script>";

?>