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
                        <h1 class="page-header">Damar Apparel - Pemesanan-&gt;Pemesanan Sablon </h1>
                    </div>
              </div>
                <!-- /. ROW  -->
			  <div class="row">
				<div class="col-md-5"></div> 
              </div>
			    <p> <?php 
			//menampilkan pesan jika ada pesan
            if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                echo '<div class="pemberitahuan" style="color:#FF0000" >'.$_SESSION['pesan'].'</div>';
            }
			$_SESSION['pesan'] = '';
            ?>
			    </p>
				  <div class="row"><div><div class="panel panel-default">
			      <div id="dataTables-example_wrapper">
                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="165"><div align="center">Tanggal</div></th>
                                                <th colspan="2"><div align="center">Pemesan </div></th>
                                                <th width="335"><div align="center">Konfirmasi/Status</div></th>
												 <th width="216"><div align="center">Olah Data </div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										include "../koneksi.php";
										
										$dataPerPage = 3;
										if(isset($_GET['page']))
										{
										$noPage = $_GET['page'];
										}
										else $noPage = 1;
										$offset = ($noPage - 1) * $dataPerPage;
										$query_aboutme  ="SELECT
pemesanan.id_pemesanan,
pemesanan.tanggal,
pemesanan.gambar,
pemesanan.id_member,
pemesanan.id_paket,
pemesanan.total_biaya,
pemesanan.staus,
paket.id_paket,
paket.nama,
paket.id_sablon,
paket.jumlah,
paket.harga,
member.id_member,
member.nama_member,
member.no_telpon,
member.no_ktp,
member.email,
member.alamat,
member.jenis_kelamin
FROM
pemesanan ,
member ,
paket
WHERE
pemesanan.id_member = member.id_member AND
pemesanan.id_paket = paket.id_paket
ORDER BY
pemesanan.id_pemesanan ASC
  LIMIT $offset, $dataPerPage ";
										$result_aboutme = mysqli_query($conn,$query_aboutme);
										while ($hasil_lopping = mysqli_fetch_array($result_aboutme)) {
										?>
                                            <tr>
                                                <td><?php echo"$hasil_lopping[id_pemesanan]";?></td>
                                                <td width="218">Nama Pemesan : <?php echo"$hasil_lopping[nama_member]";?><br />
                                                Alamat : <?php echo"$hasil_lopping[alamat]";?><br />
                                                No Telepon: <?php echo"$hasil_lopping[no_telpon]";?></td>
                                                <td width="240">Nama Paket : <?php echo"$hasil_lopping[nama]";?><br />
                                                  Harga Paket : <?php echo"$hasil_lopping[harga]";?><br />
                                                  Jumlah : <?php echo"$hasil_lopping[jumlah]";?></td>
                                                <td>
												<?php
												$nama=$hasil_lopping[6];
												if($hasil_lopping[6]=="pemesan")
												{
												?>
												<a href="edit_status.php?id=<?php echo"$hasil_lopping[0]";?>&status=DP" class="btn btn-danger"><i class="fa fa-edit">Konfirmasi Pemesanan </i></a>
												<?php }?>
												<?php
												if($hasil_lopping[6]=="DP")
												{
												?>
												 <a href="edit_status.php?id=<?php echo"$hasil_lopping[0]";?>&status=pengerjaan" class="btn btn-warning"><i class="fa fa-edit">Konfirmasi Dp </i></a>
												<?php } ?>
												<?php
												if($hasil_lopping[6]=="pengerjaan")
												{
												?>
												<a href="edit_status.php?id=<?php echo"$hasil_lopping[0]";?>&status=pembayaran" class="btn btn-danger"><i class="fa fa-edit">Konfirmasi Proses Pengerjaan </i></a> 
												<?php } ?>
												<?php
												if($hasil_lopping[6]=="pembayaran")
												{
												?>
												<a href="edit_status.php?id=<?php echo"$hasil_lopping[0]";?>&status=selesai" class="btn btn-primary btn-sm"><i class="fa fa-edit">Konfirmasi Pembayaran</i></a> 
												<?php } ?>
												<?php
												if($hasil_lopping[6]=="selesai")
												{
												echo"Lunas";
												?>
												<?php }?>
												</td> 
												<td><a href="edit_pemesanan.php?id=<?php echo"$hasil_lopping[0]";?>" class="btn btn-danger"><i class="fa fa-edit">Edit </i></a>-<a href="olahdata/pemesanan.php?id=<?php echo"$hasil_lopping[0]";?>&Olahdata=delete" class="btn btn-danger"><i class="fa fa-pencil">Hapus</i></a></td>
                                            </tr>
                                        <?php
										}
										?>
										</tbody>
                                    </table>
									<div align="center"><strong>Cari: 
								    <?php
echo "</table>";
$query   = "SELECT COUNT(*) AS jumData 
FROM
pemesanan ,
member ,
paket
WHERE
pemesanan.id_member = member.id_member AND
pemesanan.id_paket = paket.id_paket
ORDER BY
pemesanan.id_pemesanan ASC
";
$hasil  = mysqli_query($conn,$query);
$data     = mysqli_fetch_array($hasil);
$jumData = $data['jumData'];
$jumPage = ceil($jumData/$dataPerPage);
if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Kembali</a>";
for($page = 1; $page <= $jumPage; $page++)
	{
	$show = $page;
	if ((($page >= $noPage-3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
		{
	if (($show==1)&&($page != 2)) echo "|";
	if (($show !=($jumPage - 1))&&($page == $jumPage))  echo "|";
	if ($page == $noPage) echo " <b>".$page."</b> ";
	else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
}
}
if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Selanjutnya &gt;&gt;</a>";
?>
					                </strong></div>
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