<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
$jenis=$_POST['Jenis'];
//$nama_gambar=$_POST['gambar'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
$tmp_name=$_FILES['gambar']['tmp_name'];
$nama_gambar=$_FILES['gambar']['name'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_kerjasama) FROM kerjasama";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
move_uploaded_file($tmp_name,"../../img/logos/$nama_gambar");
$query = mysqli_query($conn,"insert  into kerjasama values('$no_urutnya','$judul','$jenis','$nama_gambar')");
	if($query) {
	//jika query tidak berhasil 
	session_start();
	$_SESSION['pesan'] = ' Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan ';
	header('location:../patner.php');
	}
	else {
	//jika query tidak berhasil
	session_start();
	$_SESSION['pesan'] = ' Data Baru gagal Ditambahkan ';
	header('location:../patner.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	if($nama_gambar=="")
	{
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update kerjasama set nama='$judul',alamat='$jenis' where id_kerjasama='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../patner.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Gagal Di Perbaharui ';
		header('location:../patner.php');
		}
	}
	else
	{
	move_uploaded_file($tmp_name,"../../img/portfolio/$nama_gambar");
	$query = mysqli_query($conn,"update kerjasama set nama='$judul',alamat='$jenis',gambar='$nama_gambar' where id_kerjasama='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../patner.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../patner.php');
		}
	}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM kerjasama WHERE id_kerjasama='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../patner.php');
}
?>