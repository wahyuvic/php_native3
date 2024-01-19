		<script src="../js/jquery.min.js"></script>
        <script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
            $(document).ready(function(){setTimeout(function(){$(".pemberitahuan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
            setTimeout(function(){$(".pemberitahuan").fadeOut('slow');}, 2000);
        </script>
		
		
<?php
include("aman.php");
include("header_menu.php");
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
		 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Damar Apparel - Profil Penguna </h1>
                    </div>
              </div>
                <!-- /. ROW  -->
			  <div class="row">
				<div class="col-md-5"></div> 
              </div>
			    <div class="row" style="background-color:#FFFFFF"><div><div >
			      <div id="dataTables-example_wrapper">
                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" width="80%" border="0">
                                        <thead>
                                            <tr>
                                              <th width="522"><div align="right">Username</div></th>
                                              <th width="5"><div align="justify">:</div></th>
                                              <th width="499"><div align="justify"><?php 
												$nama=$_COOKIE['username'];
												echo"$nama"; ?></div></th>
                                            </tr>
											<tr>
                                              <th width="522"><div align="right">Posisi</div></th>
                                              <th width="5"><div align="justify">:</div></th>
                                              <th width="499"><div align="justify">
                                                <?php 
												$nama=$_COOKIE['posisi'];
												echo"$nama"; ?>
                                              </div></th>
                                            </tr>
                                        </thead>
                                    </table>
									<br />
				    </div>
			      </div>
                        </div>

                    </div>
                </div>
                <strong>
                <!-- /. ROW  -->
				</strong>
                <footer>
				  <p>All right reserved Wahyu Ardiansyah,S.kom </p>
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