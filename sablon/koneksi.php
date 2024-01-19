<?php
  //mysql_connect("localhost","root","");
  //mysql_select_db("sabon");
  
$servername = "localhost";
$database = "sabon";
$username = "root";
$password = "";
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil";
//mysqli_close($conn);
?>