<?php
require"../../koneksi.php";
//dekralasi variabel 
$username=$_POST['username'];
$password=$_POST['password'];
$jenis=$_POST['3'];
$olah_data=$_POST['Olahdata'];
$delete=$_GET['Olahdata'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_admin) FROM admin";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="SIMPAN")
{
//kondisi ketika gambar di simpan 
$query = mysqli_query($conn,"insert  into admin values('$no_urutnya','$username','$password','$jenis')");
	if($query) {
	//jika query tidak berhasil 
	session_start();
	$_SESSION['pesan'] = ' Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan ';
	header('location:../konfig.php');
	}
	else {
	//jika query tidak berhasil
	session_start();
	$_SESSION['pesan'] = ' Data Baru gagal Ditambahkan ';
	header('location:../konfig.php');
	}
} 

else if($olah_data=="EDIT")
{
	$id=$_POST['id_admin'];// dekralarsi edit untuk pengecualian
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update admin set username='$username',password='$password' where id_admin='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../konfig.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Gagal Di Perbaharui ';
		header('location:../konfig.php');
		}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM admin WHERE id_admin='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../konfig.php');
}
?>