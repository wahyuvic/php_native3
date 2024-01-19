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
	var Keterangan = document.getElementById("keterangan").value;
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
	
	if(keterangan==""){
	event.preventDefault();
	document.getElementById("pemberitahuan3").innerHTML=" Keterangan  ";
	document.getElementById("pemberitahuan3").style.color = "red";
	$("#keterangan").css("border","solid red 1px");	
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
$query_portofolio  ="SELECT
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
pemesanan.id_paket = paket.id_paket AND id_pemesanan='$id' ";
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
                        <h1 class="page-header">Damar Apparel - Pemesanan -Edit Pemesanan </h1>
                    </div>
              </div>
                <!-- /. ROW  -->
			  <div class="row">
				<div class="col-md-5"></div> 
              </div>
			    <div class="row style3"><div><div class="panel panel-default"><div id="dataTables-example_wrapper"><div class="table-responsive">
			      <div align="center">
				  
				  <form action="olahdata/pemesanan.php" method="post" enctype="multipart/form-data">
                         <input name="id_pemesanan" type="hidden" class="form-control" id="id_member" placeholder="Nama Lengkap *" value="<?php echo"$hasil_lopping[id_pemesanan]";?>"/>
                         <input name="id_member" type="hidden" class="form-control" id="nama_member2" placeholder="Nama Lengkap *" value="<?php echo"$hasil_lopping[id_member]";?>"/>
					     <br />
					     <table width="406" border="0" id="order">
					       <tr>
                             <td>Nama :<?php echo"$hasil_lopping[nama_member]"; ?></td>
					         <td><label> </label></td>
				           </tr>
					       <tr>
                             <td>Alamat : <?php echo"$hasil_lopping[alamat]"; ?></td>
					         <td><label> </label></td>
				           </tr>
			             <tr>
                             <td>No Telepon  : <?php echo"$hasil_lopping[no_telpon]"; ?></td>
					         <td><label> </label></td>
				           </tr>
			            
						 <tr>
			               <td width="323">Tanggal Pemesanan:<?php echo"$hasil_lopping[tanggal]"; ?>
		          			</td>
                          <td width="73"><label>
                          </label></td>
                         </tr>
			             <tr>
			               <td>Paket  <span class="form-group">
			                 :
			                     <select name="paket" id="1">
								 <option name="<?php echo"$hasil_lopping[id_paket]"; ?>"><?php echo"$hasil_lopping[nama](Jumlah :$hasil_lopping[jumlah],Rp,$hasil_lopping[harga])"; ?></option>
                              <?php
							  include"../koneksi.php";
							  $lihat_sablon=mysqli_query($conn,"SELECT * FROM paket where id_paket<>'$hasil_lopping[id_paket]'");
							  while($hasil=mysqli_fetch_array($lihat_sablon))
							  {
							  ?>
                              <?php
							  echo "<option value ='$hasil[0]'>$hasil[1](Jumlah :$hasil[3],Rp,$hasil[4]) </option>";
							  }?>
                             </select>
		                   </span></td>
                          <td><label>
                          </label></td>
                         </tr>
			             <tr>
			               <td>Biaya (* Ada Yang Bisa Dinegosiasikan)  
		                   <input name="biaya" type="text" class="form-control" id="keterangan" placeholder="Rp,- *" value="<?php echo"$hasil_lopping[total_biaya]";?>"/></td>
                          <td><label></label></td>
                         </tr>
			             
			             <tr>
			               <td><input type="submit" name="Olahdata" value="Edit" class="btn btn-danger" id="Simpan"/>
		                   <input type="reset" name="reset" value="Reset" class="btn btn-danger"/></td>
                          <td><label></label></td>
                         </tr>
	                   </table>
		  			</form>
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
       
				 
</body>

</html>
<?php
}
?>