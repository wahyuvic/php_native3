<?php
require"../../koneksi.php";
$id=$_POST['id'];
$data_update= htmlspecialchars($_POST['update_tampilan']);
	$query = mysqli_query($conn,"update gov_hak_akses set
	tampilan='$data_update'	
	where id_gov_hak_akses='$id'
	");
	if($query) {
	echo "data berhasil diedit";
	}
	else {
	echo "$id data gagal di edit ";
	}
?>