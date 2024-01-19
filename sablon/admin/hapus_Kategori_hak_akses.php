<?php
	require"../koneksi.php";
	$id=$_GET['id'];
	$nomor=$_GET['no'];
	echo"$id";
	echo"$nomor";
	//*
	$sql1="DELETE FROM hak_akses WHERE hak_akses.id_akses='$id'";
	$sql2="DELETE FROM gov_hak_akses WHERE gov_hak_akses.id_hak_akses='$nomor'";
	$query1=mysqli_query($conn,$sql1);
	$query2=mysqli_query($conn,$sql2);
	session_start();
	$_SESSION['pesan'] = 'Data Telah Dihapus';
	header("refresh:0.1;url=kategori_admin_baru.php");
	//*/
?>