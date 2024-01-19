<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['nama'];
$posisi=$_POST['posisi'];
$keterangan=$_POST['keterangan'];
$fb=$_POST['facebook'];
$twit=$_POST['twiter'];
$link=$_POST['Linked'];
//$nama_gambar=$_POST['gambar'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
$tmp_name=$_FILES['gambar']['tmp_name'];
$nama_gambar=$_FILES['gambar']['name'];
/////////////////////////////membuat insert update delete ///////////////////////////////
//no_urutt
$no_urut = "SELECT MAX(id_team) FROM team";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
move_uploaded_file($tmp_name,"../../img/team/$nama_gambar");
$query = mysqli_query($conn,"insert  into team values('$no_urutnya','$judul','$posisi','$nama_gambar','$fb','$link','$twit')");
	if($query) {
	//jika query tidak berhasil 
	session_start();
	$_SESSION['pesan'] = ' Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan ';
	header('location:../team.php');
	}
	else {
	//jika query tidak berhasil
	session_start();
	$_SESSION['pesan'] = ' Data Baru gagal Ditambahkan ';
	header('location:../team.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	if($nama_gambar=="")
	{
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update team set nama='$judul',posisi='$posisi',facebook='$fb',linked_in='$link',twitter='$twit' where id_team='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../team.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Gagal Di Perbaharui ';
		header('location:../team.php');
		}
	}
	else
	{
	move_uploaded_file($tmp_name,"../../img/team/$nama_gambar");
	$query = mysqli_query($conn,"update team set nama='$judul',posisi='$posisi',gambar='$nama_gambar',facebook='$fb',linked_in='$link',twitter='$twit' where id_team='$id'");
		if($query) 
		{
		//jika query tidak berhasil 
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../team.php');
		}
		else 
		{
		//jika query tidak berhasil
		session_start();
		$_SESSION['pesan'] = ' Data '.$judul.' Berhasil Di Perbaharui ';
		header('location:../team.php');
		}
	}
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM team WHERE id_team='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../team.php');
}
?>