	<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	 
	 $('#Judul').change(function () {
	 $("#Judul").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan1").innerHTML="";
	 });
	 
	  $('#Jenis').change(function () {
	 $("#Jenis").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan2").innerHTML="";
	 });
	 
	 /*
	  $('#gambar').change(function () {
	 $("#gambar").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan4").innerHTML="";
	 });
	 */
	$("#ok").click(function() {
	//////////////////////////////////////////////////////////////////////////////////
	//dekralasi varibel
	var Judul = document.getElementById("Judul").value;
	var Jenis = document.getElementById("Jenis").value;
	var Gambar = document.getElementById("gambar").value;
	//////////////////////////////////////////////////////////////////////////////////
	if(Judul==""){
	event.preventDefault();
	document.getElementById("pemberitahuan1").innerHTML=" Judul ? ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#Judul").css("border","solid red 1px");	
	}
	if(Jenis==""){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML=" Jenis ? ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#Jenis").css("border","solid red 1px");	
	}
	
	});
	</script>
				 
<?php
include("aman.php");
include("header_menu.php");
?>
<?php
include "../koneksi.php";
$id=$_GET['id'];
$query_portofolio  ="SELECT * FROM team where id_team='$id' ";
$result_portofolio = mysqli_query($conn,$query_portofolio);
while ($hasil_lopping = mysqli_fetch_array($result_portofolio)) 
{
?>
        <!-- /. NAV SIDE  -->
        <style type="text/css">
<!--
.style3 {font-weight: bold}
-->
        </style>
        
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
			    <div class="row style3"><div><div class="panel panel-default"><div id="dataTables-example_wrapper"><div class="table-responsive">
			      <div align="center">
				  
				  <form action="olahdata/team.php" name="form1" method="post" enctype="multipart/form-data">
				    <input name="id" type="hidden" class="form-control" id="id" value="<?php echo"$hasil_lopping[0]";?>"/>
					<p>Masukan Data Team </p>
				    <table width="616" border="0">
                      <tr>
                        <td width="145">Nama</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                            <table width="452" border="0">
                              <tr>
                                <td width="188"><input name="nama" type="text" class="form-control" id="Judul" value="<?php echo"$hasil_lopping[1]";?>" /></td>
                                <td></td>
                                <td width="251"><div id="pemberitahuan1"></div></td>
                              </tr>
                            </table>
                          </label></td>
                      </tr>
                      <tr>
                        <td>Posisi</td>
                        <td>:</td>
                        <td><label>
                            <table width="449" border="0">
                              <tr>
                                <td width="190"><input name="posisi" type="text" class="form-control" id="Jenis" value="<?php echo"$hasil_lopping[2]";?>"/></td>
                                <td></td>
                                <td width="249"><div id="pemberitahuan2"></div></td>
                              </tr>
                            </table>
                          </label></td>
                      </tr>
                      </td>
                      </tr>
                      <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td><table width="453" border="0">
                            <tr>
                              <td width="218"><span class="form-group">
                                <input name="gambar" type="file" id="gambar" />
                              </span></td>
                              <td></td>
                              <td></td>
                              <td width="225"><div id="pemberitahuan4"></div></td>
                            </tr>
                          </table>
                            <span class="form-group"> </span> </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>Facebook</td>
                        <td>:</td>
                        <td><input name="facebook" type="text" class="form-control" id="facebook" placeholder="Masukan Alamat Facebook jika Punya" value="<?php echo"$hasil_lopping[4]";?>"/></td>
                      </tr>
                      <tr>
                        <td>Linked in </td>
                        <td>:</td>
                        <td><input name="Linked" type="text" class="form-control" id="Linked" placeholder="Masukan Alamat Linked In jika Punya" value="<?php echo"$hasil_lopping[5]";?>"/></td>
                      </tr>
                      <tr>
                        <td>Twitter</td>
                        <td>:</td>
                        <td><input name="twiter" type="text" class="form-control" id="twiter" placeholder="Masukan Alamat Twitter jika Punya" value="<?php echo"$hasil_lopping[6]";?>"/></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><label>
                          <input type="submit" name="Olahdata" value="Edit" class="btn btn-danger" id="ok"/>
                        </label></td>
                      </tr>
                    </table>
				  </form>
			      </div>
			    </div>
                  </div>
                        </div>

                    </div>
                </div>
                <strong>
                <!-- /. ROW  -->
				
                <footer>                </footer>
                
                <footer></footer>
                </strong>
                <footer><p><strong>All right reserved wahyu Ardiansyah,S.kom </strong></p>
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
          <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
         		 
</body>

</html>
<?php
}
?>