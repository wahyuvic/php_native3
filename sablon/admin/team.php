﻿		<script src="../js/jquery.min.js"></script>
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
                        <h1 class="page-header">Damar Apparel - Team &amp; Data Karyawan </h1>
                    </div>
              </div>
                <!-- /. ROW  -->
			  <div class="row">
				<div class="col-md-5"></div> 
              </div>
			    <p> <a href="form_team.php" class="btn btn-danger"><i class="fa fa-link"></i>Data Baru</a>
				 <?php 
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
                                                <th width="111">No</th>
                                                <th width="173">Nama</th>
                                                <th width="363">Posisi</th>
                                                <th width="230">Foto</th>
                                                <th width="297">Olah Data </th>
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
										$query_team  ="SELECT * FROM team order by 	id_team ASC  LIMIT $offset, $dataPerPage ";
										$result_team = mysqli_query($conn,$query_team);
										while ($hasil_lopping = mysqli_fetch_array($result_team)) {
										?>
                                            <tr>
                                                <td><?php echo"$hasil_lopping[0]";?></td>
                                                <td><?php echo"$hasil_lopping[1]";?></td>
                                                <td><?php echo"$hasil_lopping[2]";?></td>
                                                <td><img src="../img/team/<?php echo"$hasil_lopping[3]";?>" width="50 px" height="50px"/></td>
                                                <td><a href="edit_team.php?id=<?php echo"$hasil_lopping[0]";?>" class="btn btn-danger"><i class="fa fa-edit">Edit </i></a>-<a href="olahdata/team.php?id=<?php echo"$hasil_lopping[0]";?>&Olahdata=delete" class="btn btn-danger"><i class="fa fa-pencil">Hapus</i></a></td>
                                            </tr>
                                        <?php
										}
										?>
										</tbody>
                                    </table>
									<div align="center"><strong>Cari: 
								    <?php
echo "</table>";
$query   = "SELECT COUNT(*) AS jumData FROM team";
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