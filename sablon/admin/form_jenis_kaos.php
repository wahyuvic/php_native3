﻿	<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
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
	 
	  $('#gambar').change(function () {
	 $("#gambar").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan4").innerHTML="";
	 });
	 
	$("#ok").click(function() {
	//////////////////////////////////////////////////////////////////////////////////
	//dekralasi varibel
	var Judul = document.getElementById("Judul").value;
	var Jenis = document.getElementById("Jenis").value;
	var Gambar = document.getElementById("gambar").value;
	//////////////////////////////////////////////////////////////////////////////////
	if(Judul==""){
	event.preventDefault();
	document.getElementById("pemberitahuan1").innerHTML="Nama Kaos ? ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#Judul").css("border","solid red 1px");	
	}
	if(Jenis=="Ukuran"){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML="Ukuran Kaos ? ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#Jenis").css("border","solid red 1px");	
	}
		
	if(Gambar=="Warna"){
	event.preventDefault();
	document.getElementById("pemberitahuan4").innerHTML="Warna Kaos ?";
	document.getElementById("pemberitahuan4").style.color = "red";
	$("#gambar").css("border","solid red 1px");	
	}	
	});
			
	});
	</script>	 
<?php
include("aman.php");
include("header_menu.php");
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
                        <h1 class="page-header">Damar Apparel -   Kaos -&gt;Jenis Kaos</h1>
           </div>
              </div>
                <!-- /. ROW  -->
			  <div class="row">
				<div class="col-md-5"></div> 
              </div>
			    <div class="row style3"><div><div class="panel panel-default"><div id="dataTables-example_wrapper"><div class="table-responsive">
			      <div align="center">
				  <form action="olahdata/jenis_kaos.php" name="form1" method="post" enctype="multipart/form-data">
				    <p>Masukan Jenis Kaos Baru </p>
				    <table width="616" border="0">
                      <tr>
                        <td width="145">Nama</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                          <table width="452" border="0">
                            <tr>
                              <td width="188"><input name="Judul" type="text" class="form-control" id="Judul"/></td>
                              <td></td>
							  <td width="251">  <div id="pemberitahuan1"></div></td>
                            </tr>
                          </table>
                         
                        </label></td>
                      </tr>
                      <tr>
                        <td>Ukuran Kaos </td>
                        <td>:</td>
                        <td><label>
                          <table width="449" border="0">
                            <tr>
                              <td width="190"><select name="Ukuran" id="Jenis">
							    <option>Ukuran</option>
								<?php
							  include"../koneksi.php";
							  $lihat=mysqli_query($conn,"select * from ukuran");
							  while($hasil=mysqli_fetch_array($lihat))
							  {
							  ?>
											 <?php
							  echo "<option value ='$hasil[0]'>$hasil[1]($hasil[2]) </option>";
							  }?>
                              </select></td>
                             
							  <td width="249"> <div id="pemberitahuan2"></div></td>
                            </tr>
                          </table>
                          
                        </label></td>
                      </tr>
                     
                      <tr>
                        <td>Warna Kaos </td>
                        <td>:</td>
                        <td><table width="453" border="0">
                            <tr>
                              <td width="192"><select name="Warna" id="gambar">
                                  <option>Warna</option>
								  <?php
							  include"../koneksi.php";
							  $lihat=mysqli_query($conn,"select * from warna_kaos");
							  while($hasil=mysqli_fetch_array($lihat))
							  {
							  ?>
							  <?php
							  echo "<option value ='$hasil[0]'>$hasil[1]</option>";
							  }?>
                              </select></td>
							  
                              <td width="251"> <div id="pemberitahuan4"></div></td>
                            </tr>
                          </table>
                          <span class="form-group">
                          
                          </span>                          </td>
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
                          <input type="submit" name="Olahdata" value="Simpan" class="btn btn-danger" id="ok"/>
                          <input type="reset" name="reset" value="Reset" class="btn btn-danger"/>
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
                <footer>
                  <p><strong>All right reserved Wahyu Ardiansyah,S.kom </strong></p>
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
                              <script type="text/javascript">
		//<![CDATA[
		CKEDITOR.replace( 'keterangan',
		{
		 filebrowserBrowseUrl    : '',
    	filebrowserWindowWidth  : 1000,
    	filebrowserWindowHeight : 500
		});
		//]]>
		         </script>
				 
</body>

</html>
