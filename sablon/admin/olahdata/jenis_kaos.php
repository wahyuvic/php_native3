<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
$ukuran=$_POST['Ukuran'];
$warna=$_POST['Warna'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_jenis) FROM jenis_kaos";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
$query = mysqli_query($conn,"insert  into jenis_kaos values('$no_urutnya','$judul','$ukuran','$warna')");
	if($query) {
	//jika query tidak berhasil 
	session_start();
	$_SESSION['pesan'] = ' Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan ';
	header('location:../jenis_kaos.php');
	}
	else {
	//jika query tidak berhasil
	session_start();
	$_SESSION['pesan'] = ' Data Baru gagal Ditambahkan ';
	header('location:../jenis_kaos.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update jenis_kaos set nama='$judul',id_ukuran='$ukuran',id_warna='$warna' where id_jenis='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../jenis_kaos.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Gagal Di Perbaharui ';
		header('location:../jenis_kaos.php');
		}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM jenis_kaos WHERE id_jenis='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../jenis_kaos.php');
}
?>