<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
$tanggal=$_POST['Tanggal'];
$keterangan=$_POST['keterangan'];
//$nama_gambar=$_POST['gambar'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
$tmp_name=$_FILES['gambar']['tmp_name'];
$nama_gambar=$_FILES['gambar']['name'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urut
$no_urut = "SELECT MAX(id_aboutme) FROM aboutme";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
move_uploaded_file($tmp_name,"../../img/about/$nama_gambar");
$query = mysqli_query($conn,"insert  into aboutme values('$no_urutnya','$tanggal','$judul','$nama_gambar','$keterangan')");
	if($query) {
	//jika query tidak berhasil 
	session_start();
	$_SESSION['pesan'] = ' Data Baru dengan Judul '.$judul.' Berhasil Ditambahkan ';
	header('location:../tentang_kami.php');
	}
	else {
	//jika query tidak berhasil
	session_start();
	$_SESSION['pesan'] = ' Data Baru Gagal Ditambahkan ';
	header('location:../tentang_kami.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	if($nama_gambar=="")
	{
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update aboutme set tanggal='$tanggal',judul='$judul',keterangan='$keterangan' where id_aboutme='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../tentang_kami.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Gagal Di Perbaharui ';
		header('location:../tentang_kami.php');
		}
	}
	else
	{
	move_uploaded_file($tmp_name,"../../img/about/$nama_gambar");
	$query = mysqli_query($conn,"update aboutme set tanggal='$tanggal',judul='$judul',gambar='$nama_gambar',keterangan='$keterangan'  where id_aboutme='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../tentang_kami.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../tentang_kami.php');
		}
	}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM aboutme WHERE id_aboutme='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Berhasil Telah Dihapus';
header('location:../tentang_kami.php');
}
?>