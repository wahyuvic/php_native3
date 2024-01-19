<?php
include "../koneksi.php";
$id=$_POST['id'];
$query  ="SELECT * from gov_hak_akses where id_hak_akses='$id'";
$result = mysqli_query($conn,$query);
while ($r = mysqli_fetch_assoc($result)) {
$rows[] = $r;
}
echo json_encode($rows);
?>
