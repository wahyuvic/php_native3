<?php
session_start();
unset($_SESSION['username']);
session_destroy();
setcookie("id_admin","hapus", time()-31536000);
setcookie("username","hapus", time()-31536000);
setcookie("posisi","hapus", time()-31536000);
setcookie("save","hapus", time()-31536000);
setcookie("id","hapus",time()-31536000);
header("location:../index.php");
?>
