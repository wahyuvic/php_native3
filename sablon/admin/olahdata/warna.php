<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
/////////////////////////////membuat insert update delete ///////////////////////////////
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//no_urut
$no_urut = "SELECT MAX(id_warna) FROM warna_kaos";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
$query = mysqli_query($conn,"insert  into warna_kaos values('$no_urutnya','$judul')");
	if($query) {
	//jika query tidak berhasil 
	session_start();
	$_SESSION['pesan'] = ' Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan ';
	header('location:../warna.php');
	}
	else {
	//jika query tidak berhasil
	session_start();
	$_SESSION['pesan'] = ' Data Baru gagal Ditambahkan ';
	header('location:../warna.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	$query = mysqli_query($conn,"update warna_kaos set warna_kaos='$judul' where id_warna='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../warna.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Gagal Di Perbaharui ';
		header('location:../warna.php');
		}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM warna_kaos WHERE id_warna='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../warna.php');
}
?>