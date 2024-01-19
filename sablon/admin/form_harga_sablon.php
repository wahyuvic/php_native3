	<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	 
	 $('#1').change(function () {
	 $("#1").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan1").innerHTML="";
	 });
	 
	  $('#2').change(function () {
	 $("#2").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan2").innerHTML="";
	 });
	 
	  $('#3').change(function () {
	  var harga = document.getElementById("3").value;
	 var angka = /^[0-9a-zA-Z]+$/;
	 var angka2 = /^[0-9]+$/;
	 
	 if(harga.match(angka2))   
	 {  
	  $("#3").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan3").innerHTML="";
	 }
	 else if(harga.match(angka))   
	 {  
		$("#3").css("border","solid red 1px");  
		document.getElementById("pemberitahuan3").innerHTML=" Data Harus Angka ";
		document.getElementById("pemberitahuan3").style.color = "red";	
	 }
	 else
   	{
	 $("#3").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan3").innerHTML="";
	 }
	
	 });
	 
	  $('#4').change(function () {
	 $("#4").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan4").innerHTML="";
	 });
	 
	$("#ok").click(function() {
	//////////////////////////////////////////////////////////////////////////////////
	//dekralasi varibel
	var Judul = document.getElementById("1").value;
	var Jenis = document.getElementById("2").value;
	var Gambar = document.getElementById("4").value;
	var keterangan = document.getElementById("3").value;
	//////////////////////////////////////////////////////////////////////////////////
	if(Judul==""){
	event.preventDefault();
	document.getElementById("pemberitahuan1").innerHTML=" Kaos ? ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#1").css("border","solid red 1px");	
	}
	if(Jenis==""){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML=" Nama ? ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#2").css("border","solid red 1px");	
	}
	
	if(keterangan==""){
	document.getElementById("pemberitahuan3").innerHTML="  Harga ? ";
	document.getElementById("pemberitahuan3").style.color = "red";
	$("#3").css("border","solid red 1px");	
	}
	
	if(Gambar==""){
	event.preventDefault();
	document.getElementById("pemberitahuan4").innerHTML=" Jenis Sablon ?";
	document.getElementById("pemberitahuan4").style.color = "red";
	$("#4").css("border","solid red 1px");	
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
                        <h1 class="page-header">Damar Apparel -  Sablon -&gt;Harga Sablon</h1>
           </div>
              </div>
                <!-- /. ROW  -->
			  <div class="row">
				<div class="col-md-5"></div> 
              </div>
			    <div class="row style3"><div><div class="panel panel-default"><div id="dataTables-example_wrapper"><div class="table-responsive">
			      <div align="center">
				  <form action="olahdata/harga_sablon.php" name="form1" method="post" enctype="multipart/form-data">
				    <p>Data Sablon Baru</p>
				    <table width="616" border="0">
                      <tr>
                        <td width="145">Kaos</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                          <table width="452" border="0">
                            <tr>
                              <td width="188"><span class="form-group">
                                <select name="kaos" id="1">
                                  <?php
							  include"../koneksi.php";
							  $lihat_sablon=mysqli_query($conn,"SELECT * FROM harga_kaos,jenis_kaos,ukuran,warna_kaos
										WHERE harga_kaos.id_jenis=jenis_kaos.id_jenis AND jenis_kaos.id_ukuran=ukuran.id_ukuran AND jenis_kaos.id_warna=warna_kaos.id_warna ORDER BY harga_kaos.id_harga ASC");
							  while($hasil=mysqli_fetch_array($lihat_sablon))
							  {
							  ?>
                                  <?php
							  echo "<option value ='$hasil[0]'>$hasil[1]-$hasil[5](Ukuran :$hasil[9][$hasil[10]])(Warna:$hasil[12]) </option>";
							  }?>
                                </select>
                                </span></td>
                              <td></td>
							  <td width="251">  <div id="pemberitahuan1"></div></td>
                            </tr>
                          </table>
                         
                        </label></td>
                      </tr>
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><label>
                          <table width="449" border="0">
                            <tr>
                              <td width="190"><input name="nama" type="text" class="form-control" id="2"/></td>
                              <td></td>
							  <td width="249"> <div id="pemberitahuan2"></div></td>
                            </tr>
                          </table>
                          
                        </label></td>
                      </tr>
                      
                      <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td><table width="453" border="0">
                            <tr>
                              <td width="192"><input name="harga" type="text" class="form-control" id="3"/></td>
							  <td width="251"> <div id="pemberitahuan3"></div></td>
                            </tr>
                          </table>
                          <span class="form-group">
                          
                          </span>                          </td>
                      </tr>
                      <tr>
                        <td>Jenis Sablon </td>
                        <td>:</td>
                        <td><span class="form-group">
                          <select name="jenis_sablon" id="4">
                            <option value="Manual">Manual</option>
                            <option value="Manual+Kaos">Manual+Kaos</option>
                        </select>
                        </span><div id="pemberitahuan5"></div></td>
                      </tr>
                      <tr>
                        <td><p>&nbsp;</p>
                        <p>&nbsp;</p></td>
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
