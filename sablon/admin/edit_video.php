﻿	<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	  
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
	var Jenis = document.getElementById("Jenis").value;
	//////////////////////////////////////////////////////////////////////////////////
	if(Jenis==""){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML=" Jenis ? ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#Jenis").css("border","solid red 1px");	
	}
	if(Jenis==""){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML=" Jenis ? ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#Jenis").css("border","solid red 1px");	
	}
	if(URL==""){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML=" Jenis ? ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#Jenis").css("border","solid red 1px");	
	}
	if(keterangan==""){
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
$query_portofolio  ="SELECT * FROM  video where id_video='$id' ";
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
                        <h1 class="page-header">Damar Apparel - Video </h1>
                    </div>
              </div>
                <!-- /. ROW  -->
			  <div class="row">
				<div class="col-md-5"></div> 
              </div>
			    <div class="row style3"><div><div class="panel panel-default"><div id="dataTables-example_wrapper"><div class="table-responsive">
			      <div align="center">
				  
				  <form action="olahdata/video.php" name="form1" method="post" enctype="multipart/form-data">
				    <input name="id" type="hidden" class="form-control" id="id" value="<?php echo"$hasil_lopping[0]";?>"/>
					<p>Data Video </p>
				    <table width="616" border="0">
                      <tr>
                        <td>Judul </td>
                        <td>:</td>
                        <td><label>
                            <table width="452" border="0">
                              <tr>
                                <td width="188"><input name="Judul" type="text" class="form-control" id="Judul" value="<?php echo"$hasil_lopping[1]";?>"/></td>
                                <td></td>
                                <td width="251"><div id="pemberitahuan1"></div></td>
                              </tr>
                            </table>
                          </label></td>
                      </tr>
                      <tr>
                        <td>URL </td>
                        <td>:</td>
                        <td><label>
                            <table width="449" border="0">
                              <tr>
                                <td width="190"><input name="Jenis" type="text" class="form-control" id="Jenis" value="<?php echo"$hasil_lopping[2]";?>"/></td>
                                <td></td>
                                <td width="249"><div id="pemberitahuan2"></div></td>
                              </tr>
                            </table>
                          </label></td>
                      </tr>
                      <tr>
                        <td colspan="3">Keterangan
                          <label>
                            <textarea name="keterangan" rows="15" cols="100" id="keterangan"><?php echo"$hasil_lopping[3]";?></textarea>
                            <div id="pemberitahuan3"></div>
                          </label></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                     
                      
                      <tr>
                        <td width="145">&nbsp;</td>
                        <td width="19">&nbsp;</td>
                        <td width="445"><label>
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