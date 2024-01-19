		<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
<script type="text/javascript">
	$( document ).ready(function() {
	 
	 $('#kategori').change(function () {
	 $("#kategori").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan1").innerHTML="";
	 });
	 
	 $('#inputSuccess').change(function () {
	 $("#inputSuccess").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan2").innerHTML="";	 
	 });

	 
	
	$("#tambah_kategori").click(function() {
	var kategori = document.getElementById("kategori").value;
	var ket = document.getElementById("inputSuccess").value;
	if(kategori=="" && ket==""){
	document.getElementById("pemberitahuan1").innerHTML="Kategori Wajib Di isi ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#kategori").css("border","solid red 1px");	
	document.getElementById("pemberitahuan2").innerHTML="Keterangan Wajib Di isi ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#inputSuccess").css("border","solid red 1px");	
	}
	
	else if(kategori==""){
	document.getElementById("pemberitahuan1").innerHTML="Kategori Wajib Di isi ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#kategori").css("border","solid red 1px");	
	
	}
	else if(ket==""){
	document.getElementById("pemberitahuan2").innerHTML="Keterangan Wajib Di isi ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#inputSuccess").css("border","solid red 1px");	
	
	}
	
	else if(kategori!="" && ket !=""){
	
	$.ajax({ 
	type:"POST", 
	url:"http://localhost/sablon/admin/insert_kategori_hak_akses.php", 
	data:"kategori="+ kategori+"&deskripsi="+ket,
	success: function(data)
	{
	 window.location = "kategori_admin_baru.php";
	}});
	}
	
	});
			
	});
	</script>

		
		
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
                        <h1 class="page-header">Damar Apparel - Pengaturan -Hak Akses Akun Baru </h1>
                    </div>
              </div>
                <!-- /. ROW  -->
			      <div class="row" >
			      <div style="background-color:#FFFFFF">
			        <div class="panel panel-default">
                      <div id="div">
                        <div class="table-responsive">
                          <table width="843" border="0" >
                            <tr>
                              <td colspan="3"><div align="center" >
                                  <p><strong>DATA HAK AKSES </strong><strong>
                                    <?php 
    //        menampilkan pesan jika ada pesan
            
			if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                echo '<div class="pesan">'.$_SESSION['pesan'].'</div>';
            }
			$_SESSION['pesan'] = '';
            ?>
                                  </strong></p>
                                <table width="100%" border="1" style="background-color:#CCCCCC">
                                    <tr>
                                      <td colspan="1"><div align="center">NAMA</div></td>
                                      <td colspan="1"><div align="center">DESKIPSI</div></td>
                                      <td colspan="2"><div align="center">OLAH DATA</div></td>
                                    </tr>
                                    <?php
  include"../koneksi.php";
  $lihat=mysqli_query($conn,"select *from hak_akses ");
  while($hasil=mysqli_fetch_array($lihat))
  {
  ?>
                                    <tr>
                                      <td width="229"><?php echo"$hasil[1]";?></td>
                                      <td width="416"><?php echo"$hasil[2]";?></td>
                                      <td width="170"><div align="center"><a href="hapus_Kategori_hak_akses.php?id=<?php echo $hasil['0'];?>&amp;no=<?php
						 $lihat2=mysqli_query($conn,"select * from gov_hak_akses where id_hak_akses='$hasil[0]'");
						  while($hasil2=mysqli_fetch_array($lihat2))
						  {
						 echo $hasil2['1'];
						 }
						 ?>
						 " onclick="return confirm('apakah yakin menghapus ?');">Hapus</a></div></td>
                                    </tr>
                                    <?php } ?>
                                  </table>
                                <p></p>
                                <strong>
                                  <div id="pemberitahuan3"><br />
                                    INPUT DATA HAK AKSES BARU </strong>
                                    </p>
                                </div></td>
                            </tr>
                            <tr>
                              <td width="154"><strong>Nama Hak Akses </strong></td>
                              <td width="9">&nbsp;</td>
                              <td width="666"><p>
                                  <input name="kategori" type="text" class="form-control" id="kategori" />
                                </p>
                                  <div id="pemberitahuan1"></div></td>
                            </tr>
                            <tr>
                              <td width="154"><strong>Deskripsi </strong></td>
                              <td width="9">&nbsp;</td>
                              <td width="666"><p>
                                  <textarea name="deskripsi" class="form-control" id="inputSuccess"></textarea>
                                </p>
                                  <div id="pemberitahuan2"></div></td>
                            </tr>
                          </table>
                          </p>
                          <p align="center">
                            <button type="submit" class="btn btn-primary" id="tambah_kategori">Tambah </button>
                            <button type="reset" class="btn btn-primary">Reset </button>
                          </p>
                          <!-- End  Basic Table  -->
                          <!--bawah (end)-->
                          <script src="jquery.min.js"></script>
                          <script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
            $(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
            setTimeout(function(){$(".pesan").fadeOut('slow');}, 4000);
                          </script>
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