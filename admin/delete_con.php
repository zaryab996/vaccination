<?php
include("connection.php");
mysqli_query($con,"delete from contact where id = ".$_GET["id"]." ") ;
echo "<script>window.location.assign('show_contact.php')</script>";

?>