<?php
session_start();

session_destroy();

echo "<script>window.location.assign('auth-login.php')</script>";

?>