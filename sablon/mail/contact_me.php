<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$message = strip_tags(htmlspecialchars($_POST['message']));

	$to = $email_address;//mendefinisikan subyek email
     $subject = 'Pesan dari $name'; 
     //mendefinisikan pesan yang akan dikirim. Setiap baris  dipisahkan dengan \ n
     $message = "Anda telah terdafatar!\n\n 
	 Dengan Nama $nama \n\n
	 No Telepom $phone\n\n
	 $message \n\n
	 "; 
     //mendefinisikan header yang kita ikutkan. Perhatikan bahwa mereka dipisahkan dengan \r\ n
     $headers = "From: DMR APPAREL\r\nReply-To: damar@damarwulan.esy.es";//mengirim email
     $mail_sent = @mail( $to, $subject, $message, $headers );
    //jika pesan berhasil terkirim cetak "Email Berhasil Dikirim". Jika tidak cetak ""Email Gagal Dikirim"
     echo $mail_sent ? "Email Berhasil Dikirim" : "Email Gagal Dikirim";
	//jika query tidak berhasil 
	//echo"Data Baru dengan Nama '.$judul.' Berhasil Ditambahkan";
   
// Create the email and send the message
return true; 
        
?>