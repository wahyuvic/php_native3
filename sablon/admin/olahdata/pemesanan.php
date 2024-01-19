<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
$jenis=$_POST['Jenis'];
$keterangan=$_POST['keterangan'];
//$nama_gambar=$_POST['gambar'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
$tmp_name=$_FILES['gambar']['tmp_name'];
$nama_gambar=$_FILES['gambar']['name'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_pemesanan) FROM pemesanan";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
move_uploaded_file($tmp_name,"../../img/$nama_gambar");
$query = mysqli_query($conn,"insert  into pemesanan values('$no_urutnya','$nama_gambar','$judul','$jenis','$keterangan')");
	if($query) {
	echo"verhasil";
	}
	else {
	echo"gagal";
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	if($nama_gambar=="")
	{
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update pemesanan set judul='$judul',jenis='$jenis',keterangan='$keterangan' where id_portofolio='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../pemesanan.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Gagal Di Perbaharui ';
		header('location:../pemesanan.php');
		}
	}
	else
	{
	move_uploaded_file($tmp_name,"../../img/portfolio/$nama_gambar");
	$query = mysqli_query($conn,"update pemesanan set gambar='$nama_gambar',judul='$judul',jenis='$jenis',keterangan='$keterangan' where id_pemesanan='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../pemesanan.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../pemesanan.php');
		}
	}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM pemesanan WHERE id_pemesanan='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../pemesanan.php');
}
?>