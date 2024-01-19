<?php
include("aman.php");
include("header_menu.php");
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Damar Apparel </h1>
						
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green green">
                            <div class="panel-left pull-left green">
                                <i class="fa fa-eye fa-5x"></i>
                            </div>
                          <div class="panel-right">
								<h3><strong>
							  <?php
							  include"../koneksi.php";
							 $no_urut = "SELECT MAX(id_portofolio) FROM portofolio";
							$result = mysqli_query($conn,$no_urut);
							$array_no_urut = mysqli_fetch_array($result);
							 echo"$array_no_urut[0]";
							 ?>
							</strong></h3>
                             <strong>Produk</strong>
							 </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                              <div class="panel-left pull-left blue">
                                <i class="fa fa-shopping-cart fa-5x"></i>
						  
						  </div>
                                
                          <div class="panel-right">
							<h3><strong>
							  <?php
							  include"../koneksi.php";
							 $no_urut = "SELECT MAX(id_pemesanan) FROM pemesanan";
							$result = mysqli_query($conn,$no_urut);
							$array_no_urut = mysqli_fetch_array($result);
							 echo"$array_no_urut[0]";
							 ?>
							</strong></h3>
                          <strong>Pemesanan</strong></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-left pull-left red">
                                <i class="fa fa fa-comments fa-5x"></i>
                               
                            </div>
                          <div class="panel-right">
							 <h3>	 <strong><?php
							 include"../koneksi.php";
							 $no_urut = "SELECT MAX(id_team) FROM team";
							$result = mysqli_query($conn,$no_urut);
							$array_no_urut = mysqli_fetch_array($result);
							 echo"$array_no_urut[0]";
							 ?></strong>
							 </h3>
                             <strong>Karyawan</strong></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-left pull-left brown">
                                <i class="fa fa-users fa-5x"></i>
                                
                            </div>
                          <div class="panel-right">
							<h3>	 <strong><?php
							 include"../koneksi.php";
							 $no_urut = "SELECT MAX(id_kerjasama) FROM kerjasama";
							$result = mysqli_query($conn,$no_urut);
							$array_no_urut = mysqli_fetch_array($result);
							 echo"$array_no_urut[0]";
							 ?> </strong></h3>
                            <strong>Patner</strong></div>
                        </div>
                    </div>
                </div>
				
			  <div class="row">
			   </div>
			    <!-- /. ROW  -->
<footer>
				  <p>All right reserved wahyu Ardiansyah,S.kom </p>
				
        
			  </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
 

</body>

</html>