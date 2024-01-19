<?php
	session_start();
	require"../koneksi.php";
	$username=$_GET['username'];
	$password=$_GET['password'];
	$save=md5($_GET['password']); //simpan password ke enkripsi
	if($password=="" && $username==""){ //jika passord dan username tidak benar
	?>
		<script type="text/javascript">		
		alert("Error ! Masukan Username Dan Password Anda Secara Benar   ");
		</script>
		<?php
		header("refresh:0.1;url=../login/index.php");
		
	}
	else if($password=="" ){
	?>
	
		<script type="text/javascript">		
		alert("Error ! Masukan  Password Anda Secara Benar  ");
		</script>
		<?php
		header("refresh:0.1;url=../login/index.php");
		
	}
	else if($username=="" ){
	?>
		<script type="text/javascript">		
		alert("Error ! Masukan Username Anda Secara Benar ");
		</script>
		<?php
		header("refresh:0.1;url=../login/index.php");

	}
	else {
	$sql="SELECT * FROM admin,hak_akses WHERE username='$username' AND password='$password' AND admin.hak_akses=hak_akses.id_akses";
	$query=mysqli_query($conn,$sql);
	$record=mysqli_fetch_assoc($query);
	if(!empty($record)){
		$cekbox=$_POST['checkbox'];
		if($cekbox=='yes'){
		$_SESSION['username']=username;
		setcookie("id_admin","$record[id_admin]");
		setcookie("username","$record[username]", time()+ 31536000);
		setcookie("posisi","$record[nama_hak_akses]", time()+31536000);
		setcookie("save","$save", time()+315536000);
		setcookie("id","$record[hak_akses]", time()+31536000);
		header('location:index.php');
		}
		else{
		$_SESSION['username']=username;
		setcookie("id_admin","$record[id_admin]");
		setcookie("username","$record[username]");
		setcookie("posisi","$record[nama_hak_akses]");
		setcookie("save","$save");
		setcookie("id","$record[hak_akses]");
		header('location:index.php');
		}
		
	}else{
	
	//echo"$username Maaf anda belum Terdaftar";
		?>
		<script type="text/javascript">		
		alert("Maaf Anda Tidak Bisa Masuk");
		</script>
		<?php
		header("refresh:0.1;url=../login/index.php");
		
	}
	}
	
?>
