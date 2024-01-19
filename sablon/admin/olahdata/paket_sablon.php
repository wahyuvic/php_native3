<?php
require"../../koneksi.php";
//dekralasi variabel 
$nama=$_POST['nama'];
$sablon=$_POST['sablon'];
$harga=$_POST['Jumlah'];
$jenis_sablon=$_POST['harga'];
/////////////////////////////
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_sablon) FROM paket";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
$query = mysqli_query($conn,"insert  into paket values('$no_urutnya','$nama','$sablon','$jenis_sablon','$harga')");
	if($query) {
	//jika query tidak berhasil 
	session_start();
	$_SESSION['pesan'] = ' Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan ';
	header('location:../paket_sablon.php');
	}
	else {
	//jika query tidak berhasil
	session_start();
	$_SESSION['pesan'] = ' Data Baru gagal Ditambahkan ';
	header('location:../paket_sablon.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	$query = mysqli_query($conn,"update paket set nama='$nama',id_sablon='$sablon',jumlah='$jenis_sablon',harga='$harga' where id_paket='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../paket_sablon.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Gagal Di Perbaharui ';
		header('location:../paket_sablon.php');
		}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM paket WHERE id_paket='$id'";
$query=mysqli_query($sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../paket_sablon.php');
}
?>