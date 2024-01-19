<?php
require"../../koneksi.php";
//dekralasi variabel 
$nama=$_POST['nama'];
$no_telepon=$_POST['no_telepon'];
$no_ktp=$_POST['no_ktp'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
//no_urut
$no_urut = "SELECT MAX(id_member) FROM member";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
$query = mysqli_query($conn,"insert  into member values('$no_urutnya','$nama','$no_telepon','$no_ktp','$email','$alamat','$jenis_kelamin')");
	if($query) {
	include_once("PHPMailerAutoload.php");
	$mail = new PHPMailer();
	$mail->IsSMTP(); 
	$mail->SMTPDebug  = false; 
	$mail->SMTPAuth   = true;     
	$mail->Host       = 'mx1.idhostinger.com'; // SMTP host
	$mail->Port       = 110; // SMTP open port
	$mail->Username   = 'usernamedamar@damarwulan.esy.es'; // SMTP username
	$mail->Password   = 'passworr anda';
	$mail->SetFrom('damar@damarwulan.esy.es', ' MY NAME'); 
	$mail->AddReplyTo('damar@damarwulan.esy.es','REPLY NAME'); 
	$email = $email; // Recipient email
	$mail->AddAddress($email);
	$mail->Subject    = 'Konnfirmasi Pendaftaran'; // Email subject
	
	$mail->AltBody    = 'To view the message, please use an HTML compatible email viewer!'; 
	$mail->IsHTML(false);
	$mail->Body = 'Hack the planet r0x!';
	
	
	if(!$mail->Send()) {
	  echo "Mailer Error: ". $mail->ErrorInfo;
	} else {
	  echo "Message sent!";
	}    
	//jika query tidak berhasil 
	//echo"Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan";
	}
	else {
	//echo"Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan";
	}
} 

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="DELETE FROM member WHERE id_member='$id'";
$query=mysqli_query($conn,$sql);
session_start();
$_SESSION['pesan'] = 'Data Telah Berhasil Dihapus';
header('location:../Member.php');
}
?>