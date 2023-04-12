<?php
include("connection.php");
mysqli_query($con,"delete from parent where id = ".$_GET["id"]." ") ;
echo "<script>window.location.assign(' parents.php')</script>";

?>