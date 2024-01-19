<script type="text/javascript" src="js/jquery.min.js"></script>				<!--JQuery standard library-->				
		<script type="text/javascript">		
		//JQUERY ready function is called when all HTML element are ready (begin)
			//alert("hey");
			$(document).ready(function() {	
			var koneksi_alamat="http://localhost:8080/sablon/";
			$.ajax({
			url: koneksi_alamat+"data_view.php",
			dataType: "json",
			success: function(data) 
			{
			var gambar="url(img/"+data[0].gambar+")";
			var gambar_map="url(img/"+data[1].gambar+")";
			$("header").css("background-image",gambar);
			$("#contact").css("background-image",gambar_map);
			}});
			
		});
		//JQUERY ready function is called when all HTML element are ready (end)
		</script>
		
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include "koneksi.php";
$query_logo  ="SELECT * FROM view WHERE id_view='3'";
$result_logo = mysqli_query($conn,$query_logo); 
$hasil_logo = mysqli_fetch_array($result_logo)
?>
    <link rel="icon" type="image/png" href="img/<?php echo"$hasil_logo[2]";?>">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DMR Apparel</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            <a class="navbar-brand page-scroll" href="#page-top"><?php
				include "koneksi.php";
			  $query_logo  ="SELECT * FROM view WHERE id_view='3'";
			  $result_logo = mysqli_query($conn,$query_logo);
			   $hasil_logo = mysqli_fetch_array($result_logo)
				?>
				<img src="img/<?php echo"$hasil_logo[2]";?>" width="50" height="50">
				</a>
		        <a class="navbar-brand page-scroll" href="#page-top">
				DMR APPAREL 
				</a>
				
		   </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Melayani</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Galeri</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Tentang Kami</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team DMR Apparel</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
					<li>
                        <a class="page-scroll" href="login/index.php">Log In</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
          <div class="intro-text">
                <div class="intro-lead-in">Selamat Datang Di Webiste DMR Apparel ! </div>
                <div class="intro-heading">Senang Bertemu Denganmu </div>
                <a href="#services" class="page-scroll btn btn-xl">Melayani</a>            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Melayani </h2>
                    <h3 class="section-subheading text-muted">Pemesanan Sablon Online / On the Spot ,Pemesanan On the Spot Bisa langsung datang ke alamat sudah tercantum di website ini, sedangkan untuk melakukan pemesanan secara online dapat dilakukakan dengan cara melakukan klik menu pemesanan dibawah ini.
                        <hr></h3> 
			    </div>
            </div>
          <div class="row text-center">
           <?php
		     include "koneksi.php";
			  $query_logo1  ="SELECT * FROM view WHERE id_view='4'";
			  $result_logo1 = mysqli_query($conn,$query_logo1);
			   $hasil_logo1 = mysqli_fetch_array($result_logo1);
			   
			   $query_logo2  ="SELECT * FROM view WHERE id_view='5'";
			  $result_logo2 = mysqli_query($conn,$query_logo2);
			   $hasil_logo2 = mysqli_fetch_array($result_logo2);
			   
			   
			   $query_logo3  ="SELECT * FROM view WHERE id_view='6'";
			  $result_logo3 = mysqli_query($conn,$query_logo3);
			   $hasil_logo3 = mysqli_fetch_array($result_logo3);
			   
			   ?>

			    <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <a href="#portfolioModal_P" class="portfolio-hover" data-toggle="modal"> <i class="fa fa-stack-1x fa-inverse"><img src="img/<?php echo"$hasil_logo1[2]";?>" width="50px" height="50px"></i> </a>                   </span>
                    <h4 class="service-heading"> Sablon Manual + Kaos</h4>
                    <p class="text-muted">Pemesanan Sablon Manual + Kaos yaitu pemesanan yang Sablon di sertai dengan pemesanan Kaos . </p>
              </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <a href="#portfolioModal_PM" class="portfolio-hover" data-toggle="modal"><i class="fa fa-stack-1x fa-inverse"><img src="img/<?php echo"$hasil_logo2[2]";?>" width="50px" height="50px"></i></a>
                    </span>
                    <h4 class="service-heading">Sablon Manual</h4>
                    <p class="text-muted">Pemesanan Sablon yaitu pemesanan yang Sablon biasa dengan kaos yang sudah ada dari pembeli.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <a href="#contact"><i class="fa fa-stack-1x fa-inverse">
						<img src="img/<?php echo"$hasil_logo3[2]";?>" width="50px" height="50px"></i></a>                    </span>
                    <h4 class="service-heading">Pemesanan Khusus Atau Istimewa </h4>
                    <p class="text-muted">Pemesanan Khusus Atau Istimewa pemesanan dengan pesanan yang unik dan diluar ketentuan dari pemesanan biasa .</p>
            </div>
          </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Galeri</h2>
                    <h2 class="section-subheading text-muted">Hasil Sablon Pemesan</h2>
                </div>
            </div>
            <div class="row">
              <?php
			  include "koneksi.php";
			  $query_portofolio  ="SELECT * FROM portofolio order by id_portofolio DESC  LIMIT 30 ";
			  $result_portofolio = mysqli_query($conn,$query_portofolio);
			   while ($hasil_lopping = mysqli_fetch_array($result_portofolio)) {
			  ?>
			    <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal<?php echo"$hasil_lopping[0]"; ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>                            </div>
                        </div>
                    <img src="img/portfolio/<?php echo"$hasil_lopping[1]"; ?>" class="img-responsive" alt="" height="400px">                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo"$hasil_lopping[2]"; ?></h4>
                        <p class="text-muted"><?php echo"$hasil_lopping[3]"; ?></p>
                    </div>
              </div>
			  <?php
			  }	
			  ?>
			  
                        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                    <h2 class="section-heading">DMR APPAREl </h2>
                  <h3 class="section-subheading text-muted">Usaha Sablon Legal Yang Telah Mendapatkan Pengakuan Dari Pememerintah <br>
                      SURAT IZIN USAHA PERDAGANGAN (SIUP) MIKRO<br>
                    NOMOR :517/1399 /415.21/2016
				    <br>
Nama :Pemilik Herindra Bagus Prestya , Telpon 
					:085746747876<br> 
					Alamat :Gang Buntu Indah Kopensari Desa Rejo Agung RT 01/02 ,Kecamatan Ploso -Jombang -Jawa Timur
<hr>
				    <iframe class="table" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.0530937206486!2d112.21978261477605!3d-7.459378794618837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783e09650ab10b%3A0x81e333821cbb7fe5!2sGg.+Buntu+Indah%2C+Rejoagung%2C+Ploso%2C+Kabupaten+Jombang%2C+Jawa+Timur+61453!5e0!3m2!1sid!2sid!4v1482033982324" id="map_location_1" frameborder="0" style="border:0" allowfullscreen height="500px"></iframe>	
					<?php 
					include "koneksi.php";
			  		$query  ="SELECT * FROM video order by id_video DESC  LIMIT 6";
			  		$result = mysqli_query($conn,$query);
			   		while ($hasil_lopping = mysqli_fetch_array($result)) {
					?>
					<?php echo"$hasil_lopping[3]"?>;
					<?php } ?>
		<iframe  class="table" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDMR.Apparel%2F&tabs=timeline&width=640&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="640" height="400" frameborder="0" allowfullscreen></iframe>
				  </h3>
		      </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                      <?php
					include "koneksi.php";
					$query_portofolio  ="SELECT * FROM aboutme order by id_aboutme DESC  LIMIT 10";
					$result_portofolio = mysqli_query($conn,$query_portofolio);
					while ($hasil_lopping = mysqli_fetch_array($result_portofolio)) {
					//<li class="timeline-inverted"> nanti bisa kanan kiri jika bernilai ganjil dan genap
					echo"
					<li>
                            <div class='timeline-image'>
                                <img class='img-circle img-responsive' src='img/about/$hasil_lopping[3]' alt=''>
                            </div>
                            <div class='timeline-panel'>
                                <div class='timeline-heading'>
                                    <h4>$hasil_lopping[1]</h4>
                                    <h4 class='subheading'>$hasil_lopping[2]</h4>
                                </div>
                                <div class='timeline-body'>
                                    <p class='text-muted'>$hasil_lopping[4]</p>
                                </div>
                            </div>
                        </li>
					";
					}
					?>
                      <br>
                      <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Cerita
                                    <br>Dari 
                                    <br>Perusahaan</h4>
                            </div>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">DMR APPAREL TEAM</h2>
                    <h3 class="section-subheading text-muted"> karyawan atau team yang ada di DMR Apparel.</h3>
                </div>
            </div>
            <div class="row">
			<?php
			include "koneksi.php";
			$query_team  ="SELECT * FROM team";
			$result_team = mysqli_query($conn,$query_team);
			while ($hasil_lopping = mysqli_fetch_array($result_team)) {
			?>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/<?php echo"$hasil_lopping[3]"; ?>" alt="" width="250px" height="250px">
                        <h4><?php echo"$hasil_lopping[1]"; ?></h4>
                        <p class="text-muted"><?php echo"$hasil_lopping[2]"; ?></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="<?php echo"$hasil_lopping[6]"; ?>"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="<?php echo"$hasil_lopping[4]"; ?>"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="<?php echo"$hasil_lopping[5]"; ?>"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
             <?php
			}
			?>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Kami Bekerja dengan Sepernuh hati dan profesional .</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
               <?php
			   include"koneksi.php";
			   $query_kerjasama  ="SELECT * FROM kerjasama";
				$result_kerjasama = mysqli_query($conn,$query_kerjasama);
				while ($hasil_lopping = mysqli_fetch_array($result_kerjasama)) {
			   ?>
			   
			    <div class="col-md-3 col-sm-6">
                    <a href="<?php echo"$hasil_lopping[2]"?>">
                        <img src="img/logos/<?php echo"$hasil_lopping[3]"?>" class="img-responsive img-centered" alt="<?php echo"$hasil_lopping[1]"?>" width="200px" height="400px">
                    </a>
                </div>
				<?php }?>				
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">HUBUNGI KAMI</h2>
                    <h3 class="section-subheading text-muted">Untuk Melayani Pemasan Istiwema </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" >kIRIM pESAN </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Wahyu Ardiansyah S.Kom , Herindra Bagus Prasetya S.Kom , DMR Apparel Team </span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                   
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
	<?php
	include"koneksi.php";
	$query_kerjasama  ="SELECT * FROM portofolio";
	$result_kerjasama = mysqli_query($conn,$query_kerjasama);
	while ($hasil_lopping = mysqli_fetch_array($result_kerjasama)) {
	?>
	<div class="portfolio-modal modal fade" id="portfolioModal<?php echo"$hasil_lopping[0]"; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2><?php echo"$hasil_lopping[2]"; ?></h2>
                                <p class="item-intro text-muted"><?php echo"$hasil_lopping[3]"; ?></p>
                                <img class="img-responsive img-centered" src="img/portfolio/<?php echo"$hasil_lopping[1]"; ?>" alt="<?php echo"$hasil_lopping[1]"; ?>">
                                <p><?php echo"$hasil_lopping[4]"; ?></p>
                                  <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>
    <!-- Portfolio Modal 2 -->
	<?php
		     include "koneksi.php";
			  $query_logo1  ="SELECT * FROM view WHERE id_view='7'";
			  $result_logo1 = mysqli_query($conn,$query_logo1);
			   $hasil_logo1 = mysqli_fetch_array($result_logo1);
			   
			   $query_logo2  ="SELECT * FROM view WHERE id_view='8'";
			  $result_logo2 = mysqli_query($conn,$query_logo2);
			   $hasil_logo2 = mysqli_fetch_array($result_logo2);
				?>

    <div class="portfolio-modal modal fade" id="portfolioModal_P" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Pemesanan Sablon Manual + Kaos</h2>
                                <p class="item-intro text-muted">Pemesanan Sablon Manual +Kaos</p>
                                <img class="img-responsive img-centered" src="img/<?php echo"$hasil_logo1[2]";?>" alt="">
                                <input name="manualplus" type="hidden" class="form-control" id="manualplus" value="manualplus"/>
								<?php
								include"data_diri.php";
								?>
								<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<div class="portfolio-modal modal fade" id="portfolioModal_P2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Pemesanan Sablon Manual + Kaos</h2>
                                <p class="item-intro text-muted">Pemesanan Sablon Manual +Kaos</p>
                                <img class="img-responsive img-centered" src="img/<?php echo"$hasil_logo1[2]";?>" alt="">
                                <input name="manualplus" type="hidden" class="form-control" id="manualplus" value="manualplus"/>
								<?php
								include"data_diri.php";
								
								//include"pemesanan_manualplus.php";
								?>
								<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal_PM" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Pemesanan Sablon Manual</h2>
                                <p class="item-intro text-muted">Pemesanan Sablon Manual</p>
                                <img class="img-responsive img-centered" src="img/<?php echo"$hasil_logo2[2]";?>" alt="">
								<input name="manual" type="hidden" class="form-control" id="manual" value="manual"/>
                                
								<?php
								
								include"data_diri2.php";
								?>
								<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	   <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal_PM2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Pemesanan Sablon Manual</h2>
                                <p class="item-intro text-muted">Pemesanan Sablon Manual</p>
                                <img class="img-responsive img-centered" src="img/<?php echo"$hasil_logo2[2]";?>" alt="">
								<input name="manual" type="hidden" class="form-control" id="manual" value="manual"/>
                                <?php
								include"data_diri2.php";
								?>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

<!--all script javascript (begin)-->
		<!--all script javascript (end)-->
</body>

</html>
