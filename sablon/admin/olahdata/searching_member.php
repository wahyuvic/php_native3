<?php
require"../../koneksi.php";
$data_member=$_POST['data_member'];
if($data_member=="satu"){
$kode=$_POST['kode'];
//$query  ="SELECT * FROM member  WHERE  member.kode_member='$kode'";
$query  ="SELECT * FROM member,pemesanan  WHERE  pemesanan.id_member=member.id_member AND member.kode_member='$kode' ";
}
else if($data_member=="dua"){
$kode=$_POST['id_member'];
$query  ="SELECT * FROM pemesanan  WHERE  pemesanan.id_pemesanan='$kode' ";
}
$result = mysqli_query($conn,$query);
while ($r = mysqli_fetch_assoc($result)) {
$rows[] = $r;
}
echo json_encode($rows);
?>