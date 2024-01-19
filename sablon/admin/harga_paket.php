<?php 
include"../koneksi.php";
$no_sablon=$_POST['no_paket'];
$query_seleksi = "SELECT * FROM sablon,harga_kaos where sablon.id_harga=harga_kaos.id_harga AND sablon.id_sablon='$no_sablon' ";
$hasil_seleksi = mysqli_query($conn,$query_seleksi);
$data_seleksi=mysqli_fetch_array($hasil_seleksi);
if($data_seleksi[4]=="Manual"){
echo"$data_seleksi[harga_sablon]";
}
else if($data_seleksi[4]=="Manual+Kaos"){
$total=$data_seleksi[3]+$data_seleksi[7];
echo"$total ";
}

?>