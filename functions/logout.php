<?php
include 'connect.php';
session_start();
session_destroy();
header("Location:../index.php");
$user_Id = $_SESSION['sess_user_id'];
$time_logout = date("Y-m-d h:i:s");
 mysql_query("INSERT INTO `tbl_user_logs`(`user_Id`,`time_logout`) VALUES ('$user_Id','$time_logout')");
?>