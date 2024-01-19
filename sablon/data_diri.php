	<script type="text/javascript" src="js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$(document).ready(function() {
	//alert("coba");
	$('#1').change(function(){
			var No_paket = document.getElementById("1").value;
			$.ajax({ 
			type:"POST", 
			url:"admin/no_paket.php", 
			data:"no_paket="+No_paket, 
			success: function(data)
			{
			alert(data);
			$('#biaya').val(data);
			}});	
		//=========================end===============================//		
	});
	
	  $("#daftar").fadeOut();
	 $("#datadiri").fadeOut();
	 });
	 
	$("#disini").click(function() {
	$("#datadiri").fadeIn();
	$("#daftar").fadeOut();
	});
	
	$("#klik_daftar").click(function() {
	$("#daftar").fadeIn();
	$("#datadiri").fadeOut();
	 });
	
	$('#nama_member').change(function () {
	 $("#nama_member").css("border","solid #a9a9a9 1px");
	 });
	 
	 $('#email_member').change(function () {
	 $("#email_member").css("border","solid #a9a9a9 1px");
	 });
	 
	 $('#alamat_member').change(function () {
	 $("#alamat_member").css("border","solid #a9a9a9 1px");
	 });
	 
	 $('#no_telepon_member').change(function () {
	 var harga = document.getElementById("no_telepon_member").value;
	 var angka = /^[0-9a-zA-Z]+$/;
	 var angka2 = /^[0-9]+$/;
	 
	 if(harga.match(angka2))   
	 {  
	  $("#no_telepon_member").css("border","solid #a9a9a9 1px");
	 }
	 else if(harga.match(angka))   
	 {  
		$("#no_telepon_member").css("border","solid red 1px");  
	 }
	 else
   	{
	 $("#no_telepon_member").css("border","solid #a9a9a9 1px");
	 }
	 });
	 
	 
	
	 
	  $('#no_ktp_member').change(function () {
	 var harga = document.getElementById("no_telepon_member").value;
	 var angka = /^[0-9a-zA-Z]+$/;
	 var angka2 = /^[0-9]+$/;
	 
	 if(harga.match(angka2))   
	 {  
	  $("#no_ktp_member").css("border","solid #a9a9a9 1px");
	 }
	 else if(harga.match(angka))   
	 {  
		$("#no_ktp_member").css("border","solid red 1px");  
	 }
	 else
   	{
	 $("#no_ktp_member").css("border","solid #a9a9a9 1px");
	 }
	 });
	 
	$("#simpan_member").click(function() {
	var nama = document.getElementById("nama_member").value;                                                                                                        
	var no_telepon = document.getElementById("no_telepon_member").value;
	var no_ktp = document.getElementById("no_ktp_member").value;
	var email = document.getElementById("email_member").value;                                                                                        
    var alamat_member = document.getElementById("alamat_member").value;                                                                             
    var jenis_kelamin = document.getElementById("jenis_kelamin").value;
	if(nama==""){
	$("#nama_member").css("border","solid red 1px");	
	}
	if(no_telepon==""){
	$("#no_telepon_member").css("border","solid red 1px");	
	}
	if(no_ktp==""){
	$("#no_ktp_member").css("border","solid red 1px");	
	}
	if(email==""){
	$("#email_member").css("border","solid red 1px");	
	}
	if(alamat_member==""){
	$("#alamat_member").css("border","solid red 1px");	
	}
	else{
	var data_submit = 'nama=' + nama + '&no_telepon=' + no_telepon + '&no_ktp=' + no_ktp + '&email=' + email + '&alamat=' + alamat_member + '&jenis_kelamin=' + jenis_kelamin+ '&Olahdata=Simpan';
						$.ajax({ 
							type:"POST", 
							url:"admin/olahdata/member.php", 
							data:data_submit, 
							success: function(data)
						{
						//alert(data);
						}});
	var no_member = document.getElementById("no_member").value;
	$('#id_pemesanan').val(no_member);
						
	$("#daftar").fadeOut();
	$("#tombol").fadeOut();
	$("#pemesanan").fadeIn();
	}
	});
	
	$('#tanggal').change(function () {
	 $("#tanggal").css("border","solid #a9a9a9 1px");
	 });
	$('#gambar').change(function () {
	 $("#gambar").css("border","solid #a9a9a9 1px");
	 });
	$('#1').change(function () {
	 $("#1").css("border","solid #a9a9a9 1px");
	 });
	$('#biaya').change(function () {
	 $("#biaya").css("border","solid #a9a9a9 1px");
	 });
	 
	
	$("#Simpan").click(function() {
	var tanggal = document.getElementById("tanggal").value;                                                                                                        
	var gambar = document.getElementById("gambar").value;
	var paket = document.getElementById("1").value;
	var biaya = document.getElementById("biaya").value;                                                                                        
    if(tanggal==""){
	event.preventDefault();
	$("#tanggal").css("border","solid red 1px");	
	}
	if(gambar==""){
	event.preventDefault();
	$("#gambar").css("border","solid red 1px");	
	}
	if(paket=="-----Pilih Paket Pemesanan------"){
	event.preventDefault();
	$("#1").css("border","solid red 1px");	
	}
	if(biaya==""){
	//event.preventDefault();
	$("#biaya").css("border","solid red 1px");	
	}
	});
	
	$("#bayardp").click(function() {
	var gambarDP = document.getElementById("gambarDP").value;                                                                                                        
	if(gambarDP==""){
	event.preventDefault();
	$("#gambarDP").css("border","solid red 1px");	
	}
	$("#lunas").fadeIn();
	$("#DP").fadeOut();
	});
	
	$("#pembayaran").click(function() {
	var Lunas = document.getElementById("Lunas").value;                                                                                                        
	if(Lunas==""){
	event.preventDefault();
	$("#Lunas").css("border","solid red 1px");	
	}
	$("#lunas").fadeOut();
	//$("#tombol").fadeIn();
	});
	$("#member").click(function() {
		var nama = document.getElementById("kode_member").value; 
		data_submit = 'kode=' + nama +'&data_member=satu';
		$.ajax({ 
		type:"POST",
		dataType: "json",
		url:"admin/olahdata/searching_member.php", 
		data:data_submit, 
		success: function(data)
		{
		var array_member=data.length-1;
		var data_pemesanan='id_member='+data[array_member].id_pemesanan+'&data_member=dua';
		var nama_pemesanan=data[array_member].nama_member;
		var kode_pemesan=data[array_member].alamat;
		var id_member=data[array_member].id_member;
		$.ajax({ 
		type:"POST",
		dataType: "json",
		url:"admin/olahdata/searching_member.php", 
		data:data_pemesanan, 
		success: function(data)
		{
		if(data[0].staus=="pemesan")
		{
		document.getElementById("nama_pemesan").innerHTML=" Nama Pemesan: "+nama_pemesanan;
		document.getElementById("kode_pemesan").innerHTML=" Alamat Pemesan: "+kode_pemesan;
		$("#daftar").fadeOut();
		$("#tombol").fadeOut();
		$("#in").fadeOut();
		$("#pemesanan").fadeIn();
		$('#id_pemesanan').val(data[0].id_pemesanan);
		}
		else if(data[0].staus=="DP")
		{	
		document.getElementById("nama_pemesan1").innerHTML=" Nama Pemesan: "+nama_pemesanan;
		document.getElementById("kode_pemesan1").innerHTML=" Alamat Pemesan: "+kode_pemesan;
		$('#id_pembayaran_dp').val(data[0].id_pemesanan);
		$("#tombol").fadeOut();
		$("#in").fadeOut()
		$("#DP").fadeIn();
		}
		else if(data[0].staus=="pengerjaan")
		{	
		$("#in").fadeOut();
		document.getElementById("selesai").innerHTML=nama_pemesanan+" Sablon Sedang Proses Pengerjaan ";
		document.getElementById("selesai").style.color = "red";
		}
		else if(data[0].staus=="pembayaran")
		{
		$('#id_pelunasan').val(data[0].id_pemesanan);
		document.getElementById("nama_pemesan2").innerHTML=" Nama Pemesan: "+nama_pemesanan;
		document.getElementById("kode_pemesan2").innerHTML=" Alamat Pemesan: "+kode_pemesan;
		$("#lunas").fadeIn();	
		$("#tombol").fadeOut();
		$("#in").fadeOut();
		}
		else if(data[0].staus=="selesai")
		{	
		$("#in").fadeOut();
		$('#id_pemesanan').val(data[0].id_pemesanan);
		document.getElementById("nama_pemesan").innerHTML=" Nama Pemesan: "+nama_pemesanan;
		document.getElementById("kode_pemesan").innerHTML=" Alamat Pemesan: "+kode_pemesan;
		document.getElementById("selesai").innerHTML=nama_pemesanan+" Sablon Yang Anda Pesan Telah Selesai, Terimakasih Dan Silahkan Pesan Lagi Di Form Yang Ada Diatas";
		document.getElementById("selesai").style.color = "red";
		$("#pemesanan").fadeIn();
		}
		else{
		document.getElementById("selesai").innerHTML=nama_pemesanan+" Data Tidak Ada";
		document.getElementById("selesai").style.color = "red";
		}
		
		}});
		////////////////////////////////////////////////////////////////////////////////
		}});		                                                                                                       
	});
	
	//////////////////////////////ok////////////////////////////////////////////////////
	
	 </script>
	 <style type="text/css">
<!--
.style1 {font-size: 14px}
-->
     </style>
	 
	 
		<div id="page-wrapper">
            <div id="page-inner">
		        
		 <div class="row">
                <div align="center" cass="panel panel-default">
                  <!-- /. ROW  -->
                <div class="row">
				<div class="col-md-5">
        <div align="center">
				      <table width="395" border="0" id="in">
					    <tr>
                          <td colspan="3"><table width="329" border="0">
                                <tr>
                                  <td width="323"><div align="left" id="tombol"><span class="style1">Klik 
                                    <input type="submit" name="daftar" value="Daftar" class="btn btn-danger" id="klik_daftar"/> 
                                  Jika Belum Mempunyai Akun.<br />
                                  Klik
                                  <input type="submit" name="Masuk" value="Masuk" class="btn btn-danger" id="disini"/>
                                  Jika Pernah Mendaftar.</span></div></td>
                                </tr>
                          </table>                            
                          </label></td>
		                </tr>
						<tr>
                          <td colspan="3"><table width="330" border="0" id="datadiri">
                                <tr>
                                  <td width="228"><input name="kode_member" type="text" class="form-control" id="kode_member" placeholder="Kode Member *" /></td>
                                  <td width="92"><div id="pemberitahuan1">
                                    <input type="submit" name="member" value="OK" class="btn btn-danger" id="member"/>
                                  </div></td>
                                </tr>
                          </table>                            </label></td>
		                </tr>
				        
		      </table>
			          <br />
					  <div id="daftar"><br />
					  <table width="395" border="0"  >
					    <div id="div">
					      
					      <tr>
					        <td width="327">Nama
							<?php
							$no_urut = "SELECT MAX(id_member) FROM member";
							$result = mysqli_query($conn,$no_urut);
							$array_no_urut = mysqli_fetch_array($result);
							$no_urutnya=$array_no_urut[0]+1;
							?>
							<input name="nama_member" type="hidden" class="form-control" id="no_member" placeholder="Nama Lengkap *" value="<?php echo"$no_urutnya"; ?>"/>
							
					          <input name="nama_member" type="text" class="form-control" id="nama_member" placeholder="Nama Lengkap *"/></td>
                              <td width="53"><label> </label></td>
                          </tr>
					      <tr>
					        <td>No Telepon
					          <input name="no_telepon_member" type="text" class="form-control" id="no_telepon_member" placeholder="+628**********"/></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td>No KTP
					          <input name="no_ktp_member" type="text" class="form-control" id="no_ktp_member" placeholder="NO KTP *"/></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td>Alamat Email
					          <input name="email_member" type="text" class="form-control" id="email_member" placeholder="example@yahoo.cm *"/></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td>Alamat Lengkap
					          <input name="Judul52" type="text" class="form-control" id="alamat_member" placeholder="Kota/Kec/Desa-Kelurahan/Rt/Rw *"/></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td>Jenis Kelamin :
					          <label>
					            <select name="Jenis_kelamin" id="jenis_kelamin">
					              <option>Laki - Laki</option>
					              <option>Perempuan</option>
				              </select>
				              </label></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td><input type="submit" name="Olahdata2" value="Simpan" class="btn btn-danger" id="simpan_member"/>
					          <input type="reset" name="reset2" value="Reset" class="btn btn-danger"/></td>
                              <td>&nbsp;</td>
                          </tr>
				        </div>
            </table>
		    </div><br />
		          </div>
					<div class="row" align="center">
			  <div class="col-md-5">
			       <div align="right"></div>
		          <div align="center" id="pemesanan" cass="panel panel-default">
			         <div align="center">
                      <form action="#" method="post" enctype="multipart/form-data">
                        <input name="id_member" type="hidden" class="form-control" id="id_pemesanan" placeholder="Nama Lengkap *"/>
					     <br />
					     <table width="406" border="0" id="order">
					       <tr>
                             <td>Pemesanan Sablon</td>
					         <td><label> </label></td>
				           </tr>
					      
						   <tr>
                             <td><div id="nama_pemesan"></div></td>
					         <td><label> </label></td>
				           </tr>
					       <tr>
                             <td><div id="kode_pemesan"></div></td>
					         <td><label> </label></td>
				           </tr>
			            
						 <tr>
			               <td width="323">Tanggal:
		                     <input name="tanggal" type="date" class="form-control" id="tanggal" /></td>
                          <td width="73"><label>
                          </label></td>
                         </tr>
			             <tr>
			               <td>Gambar:
		                     <input name="gambar" type="file" class="form-control" id="gambar"/></td>
                          <td></td>
                         </tr>
			             
			             <tr>
			               <td>Paket  <span class="form-group">
			                 :
			                 <select name="paket" id="1">
							 <option value ='-----Pilih Paket Pemesanan------'>-----Pilih Paket Pemesanan------</option>
                              <?php
							  include"../koneksi.php";
							  $lihat_sablon=mysqli_query($conn,"SELECT * FROM paket,sablon where paket.id_sablon=sablon.id_sablon AND sablon.jenis_sablon<>'Manual'");
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
		                   <input name="biaya" type="text" class="form-control" id="biaya" placeholder="Rp,- *"/></td>
                          <td><label></label></td>
                         </tr>
			             
			             <tr>
			               <td><input type="submit" name="Olahdata" value="Pesan Salon Manual Dan Kaos" class="btn btn-danger" id="Simpan"/>
		                   <input type="reset" name="reset" value="Reset" class="btn btn-danger"/></td>
                          <td><label></label></td>
                         </tr>
	                   </table>
		  			</form>  
				    </div>
		          </div>
			  </div> 
</div>
			      
			        <div align="center" id="div" cass="panel panel-default">
                        <div align="center"><div id="DP">
                          <form action="admin/olahdata/pemesanan.php" method="post" enctype="multipart/form-data">
                          <input name="id_member" type="hidden" class="form-control" id="id_pembayaran_dp" placeholder="Nama Lengkap *"/>
					     <table width="406" border="0" id="order">
                            <tr>
                              <td>Pembayaran DP</td>
                              <td><label> </label></td>
                            </tr>
                            
							<tr>
                              <td><div id="nama_pemesan1"></div></td>
                              <td><label> </label></td>
                            </tr>
                            <tr>
                              <td><div id="kode_pemesan1"></div></td>
                              <td><label> </label></td>
                            </tr>
                              <tr>
                                <td width="325">Bukti Transfer:
                                  <input name="DP" type="file" class="form-control" id="gambarDP"/></td>
                                <td width="71"></td>
                              </tr>
                              <tr>
                                <td colspan="2"><label> </label>                                <label></label>                                <label></label></td>
                              </tr>
                            
                              <tr>
                                <td><input type="submit" name="Olahdata" value="Bayar DP" class="btn btn-danger" id="bayardp"/>
                                  <input type="reset" name="reset2" value="Reset" class="btn btn-danger"/></td>
                                <td><label></label></td>
                              </tr></table>
                       </form>
					    </div>
                          <br />
						  <div id="lunas">
						    <form action="admin/olahdata/pemesanan.php" method="post" enctype="multipart/form-data">
                         <input name="id_member" type="hidden" class="form-control" id="id_pelunasan" placeholder="Nama Lengkap *"/>
					     <table width="406" border="0" id="order">
                            <tr>
                              <td>Pelunasan Pembayaran</td>
                              <td><label> </label></td>
                            </tr>
                            
							<tr>
                              <td><div id="nama_pemesan2"></div></td>
                              <td><label> </label></td>
                            </tr>
                            <tr>
                              <td><div id="kode_pemesan2"></div></td>
                              <td><label> </label></td>
                            </tr>
                          <tr>
                            <td width="328">Gambar:
                              <input name="Lunas" type="file" class="form-control" id="Lunas"/></td>
                            <td width="68"></td>
                          </tr>
                          <tr>
                            <td colspan="2"><label></label></td>
                          </tr>
                          <tr>
                            <td><input type="submit" name="Olahdata" value="Pembayaran" class="btn btn-danger" id="pembayaran"/>
                                <input type="reset" name="reset3" value="Reset" class="btn btn-danger"/></td>
                            <td><label></label></td>
                          </tr>
						  </table>
                       </form>                                                                               
                        </div>
						</div>
			        </div>
		          </div>
	              </div>
           </div>
			            </center>
	          </div>
					  <div id="selesai"></div>
			      <footer>
				  <div align="center" id="div2" cass="panel panel-default">
                   
				  <p align="center"><br />
				    <span class="copyright">Copyright &copy; Wahyu Ardiansyah S.Kom , Herindra Bagus Prasetya S.Kom , DMR Apparel Team</span></p>
				</footer>
            </div>
            <div align="center">
              <!-- /. PAGE INNER  -->
        </div>
              <!-- /. PAGE WRAPPER  -->
          </div>
				  
				 
			      </div>
                  </div>
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
    
	<script type="text/javascript" src="js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	 $("#pemesanan").fadeOut();
	 $("#DP").fadeOut();
	 $("#lunas").fadeOut();
	 });
	</script>	 
	