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
	 
	  $('#keterangan').change(function () {
	 $("#keterangan").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan3").innerHTML="";
	 });
	  
	$("#ok").click(function() {
	//////////////////////////////////////////////////////////////////////////////////
	//dekralasi varibel
	var Judul = document.getElementById("Judul").value;
	var Jenis = document.getElementById("Jenis").value;
	var keterangan = document.getElementById("keterangan").value;
	//////////////////////////////////////////////////////////////////////////////////
	if(Judul==""){
	event.preventDefault();
	document.getElementById("pemberitahuan1").innerHTML=" Judul ? ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#Judul").css("border","solid red 1px");	
	}
	if(Jenis==""){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML=" URL ? ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#Jenis").css("border","solid red 1px");	
	}
	
	if(keterangan==""){
	event.preventDefault();
	document.getElementById("pemberitahuan3").innerHTML=" Keterangan  ";
	document.getElementById("pemberitahuan3").style.color = "red";
	$("#keterangan").css("border","solid red 1px");	
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
				    <p>Video Baru </p>
				    <table width="616" border="0">
                      <tr>
                        <td width="145">Judul </td>
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
                        <td>URL </td>
                        <td>:</td>
                        <td><label>
                          <table width="449" border="0">
                            <tr>
                              <td width="190"><input name="Jenis" type="text" class="form-control" id="Jenis"/></td>
                             <td></td>
							  <td width="249"> <div id="pemberitahuan2"></div></td>
                            </tr>
                          </table>
                          
                        </label></td>
                      </tr>
                      <tr>
                        <td colspan="3">Keterangan
                          <label>
                          <textarea name="keterangan" rows="15" cols="100" id="keterangan">-</textarea>
                          <div id="pemberitahuan3"></div></label></td>
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
         
				 
</body>

</html>
