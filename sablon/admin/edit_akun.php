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
                                     <?php echo"$record[username]";?>
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
                                      <?php echo"$record[password]";?>
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
						  <div align="center"><a href="edit_portofolio.php?id=<?php echo"$hasil_lopping[0]";?>" class="btn btn-primary"><em>Simpan</em></a></div>
		     			<div class="table-responsive" style="background-color:">
						<div class="panel-body"  style="border:#000000">
                          <tbody>
                            <tr>
                              <td width="47%">&nbsp;</td>
                            </tr>
                          </tbody>
                          <div class="table-responsive" style="background-color:">
                            <div align="center">
                              <?php
					require"../koneksi.php";
					$id=$_GET['id'];
					$sql="SELECT * FROM  gov_hak_akses,hak_akses  where gov_hak_akses.id_hak_akses=hak_akses.id_akses and gov_hak_akses.id_hak_akses='$id' ";
					$query=mysqli_query($conn,$sql);
					while($hasil=mysqli_fetch_array($query)){
					}
					?>
                              <strong>Hak Akses</strong>
                            </div>
                            <br />
                            <table width="100%" border="0" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
                              <tr>
                                <td>Beranda</td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK25" type="checkbox" id="VDRINK25" value="V" />
                                    Lihat Data
                                    <input name="ADRINK25" type="checkbox" id="ADRINK25" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK25" type="checkbox" id="E_DRINK25" value="E" />
                                    Edit
                                    <input name="D_DRINK25" type="checkbox" id="D_DRINK25" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Harga Kaos </td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK26" type="checkbox" id="VDRINK26" value="V" />
                                    Lihat Data
                                    <input name="ADRINK26" type="checkbox" id="ADRINK26" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK26" type="checkbox" id="E_DRINK26" value="E" />
                                    Edit
                                    <input name="D_DRINK26" type="checkbox" id="D_DRINK26" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Jenis Kaos </td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK27" type="checkbox" id="VDRINK27" value="V" />
                                    Lihat Data
                                    <input name="ADRINK27" type="checkbox" id="ADRINK27" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK27" type="checkbox" id="E_DRINK27" value="E" />
                                    Edit
                                    <input name="D_DRINK27" type="checkbox" id="D_DRINK27" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Ukuran Kaos </td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK28" type="checkbox" id="VDRINK28" value="V" />
                                    Lihat Data
                                    <input name="ADRINK28" type="checkbox" id="ADRINK28" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK28" type="checkbox" id="E_DRINK28" value="E" />
                                    Edit
                                    <input name="D_DRINK28" type="checkbox" id="D_DRINK28" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Warna Kaos </td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK29" type="checkbox" id="VDRINK29" value="V" />
                                    Lihat Data
                                    <input name="ADRINK29" type="checkbox" id="ADRINK29" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK29" type="checkbox" id="E_DRINK29" value="E" />
                                    Edit
                                    <input name="D_DRINK29" type="checkbox" id="D_DRINK29" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Harga Kaos </td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK210" type="checkbox" id="VDRINK210" value="V" />
                                    Lihat Data
                                    <input name="ADRINK210" type="checkbox" id="ADRINK210" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK210" type="checkbox" id="E_DRINK210" value="E" />
                                    Edit
                                    <input name="D_DRINK210" type="checkbox" id="D_DRINK210" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Paket Kaos </td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK211" type="checkbox" id="VDRINK211" value="V" />
                                    Lihat Data
                                    <input name="ADRINK211" type="checkbox" id="ADRINK211" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK211" type="checkbox" id="E_DRINK211" value="E" />
                                    Edit
                                    <input name="D_DRINK211" type="checkbox" id="D_DRINK211" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Data Pemesan </td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK212" type="checkbox" id="VDRINK212" value="V" />
                                    Lihat Data
                                    <input name="ADRINK212" type="checkbox" id="ADRINK212" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK212" type="checkbox" id="E_DRINK212" value="E" />
                                    Edit
                                    <input name="D_DRINK212" type="checkbox" id="D_DRINK212" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Pemesanan</td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK213" type="checkbox" id="VDRINK213" value="V" />
                                    Lihat Data
                                    <input name="ADRINK213" type="checkbox" id="ADRINK213" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK213" type="checkbox" id="E_DRINK213" value="E" />
                                    Edit
                                    <input name="D_DRINK213" type="checkbox" id="D_DRINK213" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Galeri</td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK214" type="checkbox" id="VDRINK214" value="V" />
                                    Lihat Data
                                    <input name="ADRINK214" type="checkbox" id="ADRINK214" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK214" type="checkbox" id="E_DRINK214" value="E" />
                                    Edit
                                    <input name="D_DRINK214" type="checkbox" id="D_DRINK214" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Team</td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK215" type="checkbox" id="VDRINK215" value="V" />
                                    Lihat Data
                                    <input name="ADRINK215" type="checkbox" id="ADRINK215" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK215" type="checkbox" id="E_DRINK215" value="E" />
                                    Edit
                                    <input name="D_DRINK215" type="checkbox" id="D_DRINK215" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Tampilan </td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK216" type="checkbox" id="VDRINK216" value="V" />
                                    Lihat Data
                                    <input name="ADRINK216" type="checkbox" id="ADRINK216" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK216" type="checkbox" id="E_DRINK216" value="E" />
                                    Edit
                                    <input name="D_DRINK216" type="checkbox" id="D_DRINK216" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Patner</td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK24" type="checkbox" id="VDRINK24" value="V" />
                                    Lihat Data
                                    <input name="ADRINK24" type="checkbox" id="ADRINK24" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK24" type="checkbox" id="E_DRINK24" value="E" />
                                    Edit
                                    <input name="D_DRINK24" type="checkbox" id="D_DRINK24" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Pesan</td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK23" type="checkbox" id="VDRINK23" value="V" />
                                    Lihat Data
                                    <input name="ADRINK23" type="checkbox" id="ADRINK23" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK23" type="checkbox" id="E_DRINK23" value="E" />
                                    Edit
                                    <input name="D_DRINK23" type="checkbox" id="D_DRINK23" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                              <tr>
                                <td>Video</td>
                                <td><div align="center">
                                  <div align="left">
                                    <input name="VDRINK22" type="checkbox" id="VDRINK22" value="V" />
                                    Lihat Data
                                    <input name="ADRINK22" type="checkbox" id="ADRINK22" value="A" />
                                    Tambah Data
                                    <input name="E_DRINK22" type="checkbox" id="E_DRINK22" value="E" />
                                    Edit
                                    <input name="D_DRINK22" type="checkbox" id="D_DRINK22" value="D" />
                                    Hapus </div>
                                </div></td>
                              </tr>
                            </table>
							<div align="center">
                                <div align="center">
                                  <button type="submit" class="btn btn-primary" id="edit_home">Edit</button>
                                </div>
                                <table width="100%" height="2" border="0" class="table" style="background-color:#CCCCCC">
      
      <tbody>
      </tbody>
	   <tbody>
            </tbody></table>
                        </div>
                      </div>
		          
      
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