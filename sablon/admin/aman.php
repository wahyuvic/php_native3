<?php
session_start();
$data=$_COOKIE['posisi'];
if(!isset($_COOKIE['posisi']))
{
header('location:../login/index.php');
}
else{
//header('location:Admin.php');
}

?>