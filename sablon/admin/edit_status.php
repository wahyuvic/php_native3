<?php
require"../koneksi.php";
//dekralasi variabel 
	$id=$_GET['id'];// dekralarsi edit untuk pengecualian
	$status=$_GET['status'];// dekralarsi edit untuk pengecualian
	echo"$id$status";
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update pemesanan set staus='$status' where id_pemesanan='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$status.' Berhasil Di Perbaharui ';
		header('location:Pemesanan.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$status.' Gagal Di Perbaharui ';
		header('location:Pemesanan.php');
		}
?>