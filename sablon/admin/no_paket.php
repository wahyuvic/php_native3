<?php 
include"../koneksi.php";
$no_paket=$_POST['no_paket'];
$query_seleksi = "SELECT * FROM paket where paket.id_paket='$no_paket' ";
$hasil_seleksi = mysqli_query($conn,$query_seleksi);
$data_seleksi=mysqli_fetch_array($hasil_seleksi);
if($data_seleksi[0]!=""){
echo"$data_seleksi[harga]";
}
?>