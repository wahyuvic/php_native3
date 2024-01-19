<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
$jenis=$_POST['Jenis'];
//$nama_gambar=$_POST['gambar'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_ukuran) FROM ukuran";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
$query = mysqli_query($conn,"insert  into ukuran values('$no_urutnya','$judul','$jenis')");
	if($query) {
	//jika query tidak berhasil 
	session_start();
	$_SESSION['pesan'] = ' Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan ';
	header('location:../ukuran.php');
	}
	else {
	//jika query tidak berhasil
	session_start();
	$_SESSION['pesan'] = ' Data Baru gagal Ditambahkan ';
	header('location:../ukuran.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	$query = mysqli_query($conn,"update ukuran set nama='$judul',ukuran_kaos='$jenis' where id_ukuran='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../ukuran.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../ukuran.php');
		}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM ukuran WHERE id_ukuran='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../ukuran.php');
}
?>