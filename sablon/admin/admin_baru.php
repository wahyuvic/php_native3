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
        <!-- /. NAV SIDE  --><div id="page-wrapper">
            <div id="page-inner">
		 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Damar Apparel - Pengaturan -Akun Baru </h1>
                    </div>
              </div>
                <!-- /. ROW  -->
			 
			    <div class="row" >
			      <div style="background-color:#FFFFFF">
			        <div class="panel panel-default">
                      <div id="div">
                        <div class="table-responsive">
                          <?php
						  include"../koneksi.php";
						  $id_dari_cookie=$_COOKIE['id_admin'];
						  $sql="SELECT * FROM admin where id_admin='$id_dari_cookie'";
						  $query=mysqli_query($conn,$sql);
						  $record=mysqli_fetch_assoc($query);
						  {
						  ?>
						  <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" width="100%">
                            <thead>
                              <tr>
                                <th width="578"><div align="right">Username</div></th>
                                <th width="21"><div align="center"><strong>:</strong></div></th>
                                <th width="583"><div align="left">
                                  <form id="form1" name="form1" method="post" action="">
                                    <label>
                                      <input name="username" type="text" id="username" value="<?php echo"$record[username]";?>"/>
                                    </label>
                                  </form>
                                </div></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><div align="right"><strong>Password</strong></div></td>
                                <td><div align="center"><strong>:</strong></div></td>
                                <td><div align="left">
                                  <form id="form2" name="form2" method="post" action="">
                                    <label>
                                      <input name="password" type="password" id="password" value="<?php echo"$record[password]";?>"/>
                                    </label>
                                  </form>
                                  </div></td>
                              </tr>
							  <tr>
                                <td><div align="right"><strong>Posisi</strong></div></td>
                                <td><div align="center"><strong>:</strong></div></td>
                                <td><div align="left">
                                  <form id="form2" name="form2" method="post" action="">
                                    <label>
                                    <select name="3" id="3">
                                      <option>Pilih</option>
                                      <?php
  include"../koneksi.php";
  $lihat=mysqli_query($conn,"select * from hak_akses");
  while($hasil=mysqli_fetch_array($lihat))
  {
  ?>
                                      <?php
	  echo "<option value ='$hasil[0]'>$hasil[1] </option>";
	  }?>
                                    </select>
                                    <a href="Add_Kategori_hak_akses.php">Tambah Hak Akses </a></label>
                                  </form>
                                  </div></td>
                              </tr>
                            </tbody>
                          </table>
                        <?php } ?>
						</div>
                      </div>
		          <div align="center"><a href="edit_portofolio.php?id=<?php echo"$hasil_lopping[0]";?>" class="btn btn-primary btn">Simpan</a></div>
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