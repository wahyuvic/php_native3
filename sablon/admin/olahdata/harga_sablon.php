<?php
require"../../koneksi.php";
//dekralasi variabel 
$nama=$_POST['nama'];
$kaos=$_POST['kaos'];
$harga=$_POST['harga'];
$jenis_sablon=$_POST['jenis_sablon'];
/////////////////////////////
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_sablon) FROM sablon";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
$query = mysqli_query($conn,"insert  into sablon values('$no_urutnya','$kaos','$nama','$harga','$jenis_sablon')");
	if($query) {
	//jika query tidak berhasil 
	session_start();
	$_SESSION['pesan'] = ' Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan ';
	header('location:../harga_sablon.php');
	}
	else {
	//jika query tidak berhasil
	session_start();
	$_SESSION['pesan'] = ' Data Baru gagal Ditambahkan ';
	header('location:../harga_sablon.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	$query = mysqli_query($conn,"update sablon set id_harga='$kaos',nama_sablon='$nama',harga_sablon='$harga',jenis_sablon='$jenis_sablon' where id_sablon='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../harga_sablon.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Gagal Di Perbaharui ';
		header('location:../harga_sablon.php');
		}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM sablon WHERE id_sablon='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../harga_sablon.php');
}
?>