<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin Damar Apparel</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
     
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-gear"></i> <strong>DMR Apparel</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profil_user.php"><i class="fa fa-user fa-fw"></i> Profil </a>
                        </li>
                        <li><a href="konfig.php"><i class="fa fa-gear fa-fw"></i> pengaturan </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div ></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li>
					
                        <a  href="index.php"><i class="fa fa-dashboard"></i> Beranda</a>
                    </li>

						 
						 <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Sablon Apparel <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="sial">Kaos<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                    <li>
                                        <a href="harga_kaos.php">Harga Kaos </a>                                    </li>
                                    <li>
                                        <a href="jenis_kaos.php">Jenis Kaos</a>                                    </li>
									<li>
                                        <a href="ukuran.php">Ukuran Kaos</a>                                    </li>
									<li>
                                        <a href="warna.php">Warna Kaos</a>                                    </li>		
                              </ul>

							</li>
                            
							<li>
                                <a href="#">Sablon<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="harga_sablon.php">Harga Sablon </a>                                    </li>
                                    <li>
                                        <a href="paket_sablon.php">Paket Sablon</a>                                    </li>
                              </ul>

                          </li>
							
							<li>
                                <a href="#">Pemesanan<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="Member.php">Data Pemesan </a>                                    </li>
                                    <li>
                                        <a href="Pemesanan.php">Pemesanan Sablon </a>                                    </li>
                              </ul>

                          </li>
                        </ul>
                  </li>

                    <li>
                        <a href="portofolio.php"><i class="fa fa-desktop"></i> Galeri</a>
                    </li>
					<li>
                        <a href="tentang_kami.php"><i class="fa fa-bar-chart-o"></i> Tentang Kami</a>
                    </li>
                    <li>
                        <a href="team.php"><i class="fa fa-qrcode"></i> Team Apparel</a>
                    </li>
					<li>
                        <a href="Tampilan.php"><i class="fa fa-qrcode"></i> Tampilan</a>
                    </li>
					
					<li>
                        <a href="patner.php"><i class="fa fa-qrcode"></i> Patner</a>
                    </li>
					<li>
                        <a href="pesan_khusus.php"><i class="fa fa-qrcode"></i> Kontak </a>                    </li>
					<li>
                        <a href="video.php"><i class="fa fa-edit"></i> Video </a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->