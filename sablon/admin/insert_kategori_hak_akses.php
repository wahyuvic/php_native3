<?php
require"../koneksi.php";

$kategori=$_POST['kategori'];
$deskripsi=$_POST['deskripsi'];

///////////////////////////////////////////////////
$no_urut = "SELECT MAX(id_akses) FROM hak_akses ";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
///////////////////////////////////////////////////
$no_urut1 = "SELECT MAX(id_gov_hak_akses) FROM gov_hak_akses  ";
$result1 = mysqli_query($conn,$no_urut1);
$array_no_urut1 = mysqli_fetch_array($result1);
$no_urutnya1=$array_no_urut1[0]+1;
///////////////////////////////////////////////////
$query = mysqli_query($conn,"insert into hak_akses values($no_urutnya,'$kategori','$deskripsi')");
///////////////////////////////////////////////////
$isi='V,A,E,D';
$query2 = mysqli_query($conn,"insert into gov_hak_akses values($no_urutnya1,'$no_urutnya','$isi','$isi','$isi','$isi','$isi','$isi','$isi','$isi','$isi','$isi','$isi','$isi','$isi','$isi')");
if($query2) {
echo "data $_POST[kategori] berhasil ditambahkan";
}
else {
echo "data gagal di ditambahkan";
}
?>