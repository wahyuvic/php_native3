<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	 
	 $('#Judul').change(function () {
	 $("#Judul").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan1").innerHTML="";
	 });
	 
	  $('#Jenis').change(function () {
	 var harga = document.getElementById("Jenis").value;
	 var angka = /^[0-9a-zA-Z]+$/;
	 var angka2 = /^[0-9]+$/;
	 
	 if(harga.match(angka2))   
	 {  
	  $("#Jenis").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan2").innerHTML="";
	 }
	 else if(harga.match(angka))   
	 {  
		$("#Jenis").css("border","solid red 1px");  
		document.getElementById("pemberitahuan2").innerHTML=" Data Harus Angka ";
		document.getElementById("pemberitahuan2").style.color = "red";	
	 }
	 else
   	{
	 $("#Jenis").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan2").innerHTML="";
	 }
	 
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
	if(Jenis==""){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML="Harga Kaos ? ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#Jenis").css("border","solid red 1px");	
	}
		
	if(Gambar=="Jenis"){
	event.preventDefault();
	document.getElementById("pemberitahuan4").innerHTML="Jenis ?";
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
<?php
include "../koneksi.php";
$id=$_GET['id'];
$query_harga  ="SELECT * FROM  harga_kaos where id_harga='$id' ";
$result_harga = mysqli_query($conn,$query_harga);
while ($hasil_lopping = mysqli_fetch_array($result_harga)) 
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
                        <h1 class="page-header">Damar Apparel -    Kaos -&gt;Harga Kaos </h1>
           </div>
              </div>
                <!-- /. ROW  -->
			  <div class="row">
				<div class="col-md-5"></div> 
              </div>
			    <div class="row style3"><div><div class="panel panel-default"><div id="dataTables-example_wrapper"><div class="table-responsive">
			      <div align="center">
				  
				  <form action="olahdata/harga_kaos.php" name="form1" method="post" enctype="multipart/form-data">
				    <input name="id" type="hidden" class="form-control" id="id" value="<?php echo"$hasil_lopping[0]";?>"/>
					<p>Edit Harga Kaos </p>
				    <table width="616" border="0">
				      <tr>
                        <td>Nama</td>
				        <td>:</td>
				        <td><label>
                            <table width="452" border="0">
                              <tr>
                                <td width="188"><input name="Judul" type="text" class="form-control" id="Judul" value="<?php echo"$hasil_lopping[1]"; ?>"/></td>
                                <td></td>
                                <td width="251"><div id="pemberitahuan1"></div></td>
                              </tr>
                            </table>
				          </label></td>
			          </tr>
				      <tr>
                        <td>Harga </td>
				        <td>:</td>
				        <td><label>
                            <table width="449" border="0">
                              <tr>
                                <td width="190"><input name="harga" type="text" class="form-control" id="Jenis" value="<?php echo"$hasil_lopping[2]"; ?>"/></td>
                                <td></td>
                                <td width="249"><div id="pemberitahuan2"></div></td>
                              </tr>
                            </table>
				          </label></td>
			          </tr>
				      <tr>
                        <td>Jenis</td>
				        <td>:</td>
				        <td><table width="453" border="0">
                            <tr>
                              <td width="183"><span class="form-group">
                                <select name="jenis" id="gambar">
                               <?php
							  include"../koneksi.php";
							  $lihat=mysqli_query($conn,"SELECT * FROM jenis_kaos,ukuran,warna_kaos WHERE jenis_kaos.id_ukuran=ukuran.id_ukuran AND jenis_kaos.id_warna=warna_kaos.id_warna AND jenis_kaos.id_jenis='$hasil_lopping[3]' ORDER BY jenis_kaos.id_jenis ASC");
							  while($hasil=mysqli_fetch_array($lihat))
							  {
							  ?>
                                  <?php
							  echo "<option value ='$hasil[0]'>$hasil[1](Ukuran :$hasil[5])(Warna:$hasil[8]) </option>";
							  }?>
							  
							   <?php
							  include"../koneksi.php";
							  $lihat=mysqli_query($conn,"SELECT * FROM jenis_kaos,ukuran,warna_kaos WHERE jenis_kaos.id_ukuran=ukuran.id_ukuran AND jenis_kaos.id_warna=warna_kaos.id_warna AND jenis_kaos.id_jenis<>'$hasil_lopping[3]' ORDER BY jenis_kaos.id_jenis ASC");
							  while($hasil=mysqli_fetch_array($lihat))
							  {
							  ?>
                                  <?php
							  echo "<option value ='$hasil[0]'>$hasil[1](Ukuran :$hasil[5])(Warna:$hasil[8]) </option>";
							  }?>
								 
                                </select>
                              </span></td>
                              <td width="246"><div id="pemberitahuan4"></div></td>
                            </tr>
                        </table></td>
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
<?php
}
?>