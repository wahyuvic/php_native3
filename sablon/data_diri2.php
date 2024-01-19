	<script type="text/javascript" src="js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$(document).ready(function() {
	$('#12').change(function(){
				var No_paket = document.getElementById("12").value;
				$.ajax({ 
				type:"POST", 
				url:"admin/no_paket.php", 
				data:"no_paket="+No_paket, 
				success: function(data)
				{
				$('#biaya2').val(data);
				}});	
			//=========================end===============================//		
	});
		
	
	$('#tanggal2').change(function () {
	 $("#tanggal2").css("border","solid #a9a9a9 1px");
	 });
	$('#gambar2').change(function () {
	 $("#gambar2").css("border","solid #a9a9a9 1px");
	 });
	$('#12').change(function () {
	 $("#12").css("border","solid #a9a9a9 1px");
	 });
	$('#biaya2').change(function () {
	 $("#biaya2").css("border","solid #a9a9a9 1px");
	 });
	
	  $("#daftar2").fadeOut();
	 $("#datadiri2").fadeOut();
	 });
	 
	$("#disini2").click(function() {
	$("#datadiri2").fadeIn();
	$("#daftar2").fadeOut();
	});
	
	$("#klik_daftar2").click(function() {
	$("#daftar2").fadeIn();
	$("#datadiri2").fadeOut();
	 });
	
	$('#nama_member2').change(function () {
	 $("#nama_member2").css("border","solid #a9a9a9 1px");
	 });
	 
	 $('#email_member2').change(function () {
	 $("#email_member2").css("border","solid #a9a9a9 1px");
	 });
	 
	 $('#alamat_member2').change(function () {
	 $("#alamat_member2").css("border","solid #a9a9a9 1px");
	 });
	 
	 $('#no_telepon_member2').change(function () {
	 var harga = document.getElementById("no_telepon_member2").value;
	 var angka = /^[0-9a-zA-Z]+$/;
	 var angka2 = /^[0-9]+$/;
	 
	 if(harga.match(angka2))   
	 {  
	  $("#no_telepon_member2").css("border","solid #a9a9a9 1px");
	 }
	 else if(harga.match(angka))   
	 {  
		$("#no_telepon_member2").css("border","solid red 1px");  
	 }
	 else
   	{
	 $("#no_telepon_member2").css("border","solid #a9a9a9 1px");
	 }
	 });
	 
	  $('#no_ktp_member2').change(function () {
	 var harga = document.getElementById("no_telepon_member").value;
	 var angka = /^[0-9a-zA-Z]+$/;
	 var angka2 = /^[0-9]+$/;
	 
	 if(harga.match(angka2))   
	 {  
	  $("#no_ktp_member2").css("border","solid #a9a9a9 1px");
	 }
	 else if(harga.match(angka))   
	 {  
		$("#no_ktp_member2").css("border","solid red 1px");  
	 }
	 else
   	{
	 $("#no_ktp_member2").css("border","solid #a9a9a9 1px");
	 }
	 });
	$("#simpan_member2").click(function() {
	var nama = document.getElementById("nama_member").value;                                                                                                        
	var no_telepon = document.getElementById("no_telepon_member").value;
	var no_ktp = document.getElementById("no_ktp_member").value;
	var email = document.getElementById("email_member").value;                                                                                        
    var alamat_member = document.getElementById("alamat_member").value;                                                                             
    var jenis_kelamin = document.getElementById("jenis_kelamin").value;
	if(nama==""){
	$("#nama_member2").css("border","solid red 1px");	
	}
	if(no_telepon==""){
	$("#no_telepon_member2").css("border","solid red 1px");	
	}
	if(no_ktp==""){
	$("#no_ktp_member2").css("border","solid red 1px");	
	}
	if(email==""){
	$("#email_member2").css("border","solid red 1px");	
	}
	if(alamat_member==""){
	$("#alamat_member2").css("border","solid red 1px");	
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
	$('#id_pemesanan2').val(no_member);
						
	$("#daftar2").fadeOut();
	$("#tombol2").fadeOut();
	$("#pemesanan2").fadeIn();
	}
	});
	
	
	$("#Simpan2").click(function() {
	var tanggal = document.getElementById("tanggal2").value;                                                                                                        
	var gambar = document.getElementById("gambar2").value;
	var paket = document.getElementById("12").value;
	var biaya = document.getElementById("biaya2").value;                                                                                        
    if(tanggal==""){
	event.preventDefault();
	$("#tanggal2").css("border","solid red 1px");	
	}
	if(gambar==""){
	event.preventDefault();
	$("#gambar2").css("border","solid red 1px");	
	}
	if(paket=="-----Pilih Paket Pemesanan------"){
	event.preventDefault();
	$("#12").css("border","solid red 1px");	
	}
	if(biaya==""){
	event.preventDefault();
	$("#biaya2").css("border","solid red 1px");	
	}
	});
	
	$("#bayardp2").click(function() {
	var gambarDP = document.getElementById("gambarDP2").value;                                                                                                        
	if(gambarDP==""){
	event.preventDefault();
	$("#gambarDP2").css("border","solid red 1px");	
	}
	$("#lunas2").fadeIn();
	$("#DP2").fadeOut();
	});
	
	$("#pembayaran2").click(function() {
	var Lunas = document.getElementById("Lunas").value;                                                                                                        
	if(Lunas==""){
	event.preventDefault();
	$("#Lunas2").css("border","solid red 1px");	
	}
	$("#lunas2").fadeOut();
	//$("#tombol").fadeIn();
	});
	$("#member2").click(function() {
		var nama = document.getElementById("kode_member2").value; 
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
		document.getElementById("nama_pemesan12").innerHTML=" Nama Pemesan: "+nama_pemesanan;
		document.getElementById("kode_pemesan12").innerHTML=" Alamat Pemesan: "+kode_pemesan;
		$("#daftar2").fadeOut();
		$("#tombol2").fadeOut();
		$("#in2").fadeOut();
		$("#pemesanan2").fadeIn();
		$('#id_pemesanan2').val(data[0].id_pemesanan);
		}
		else if(data[0].staus=="DP")
		{	
		document.getElementById("nama_pemesan12").innerHTML=" Nama Pemesan: "+nama_pemesanan;
		document.getElementById("kode_pemesan12").innerHTML=" Alamat Pemesan: "+kode_pemesan;
		$('#id_pembayaran_dp2').val(data[0].id_pemesanan);
		$("#tombol2").fadeOut();
		$("#in2").fadeOut()
		$("#DP2").fadeIn();
		}
		else if(data[0].staus=="pengerjaan")
		{	
		$("#in2").fadeOut();
		document.getElementById("selesai12").innerHTML=nama_pemesanan+" Sablon Sedang Proses Pengerjaan ";
		document.getElementById("selesai12").style.color = "red";
		}
		else if(data[0].staus=="pembayaran")
		{
		$('#id_pelunasan2').val(data[0].id_pemesanan);
		document.getElementById("nama_pemesan12").innerHTML=" Nama Pemesan: "+nama_pemesanan;
		document.getElementById("kode_pemesan12").innerHTML=" Alamat Pemesan: "+kode_pemesan;
		$("#lunas2").fadeIn();	
		$("#tombol2").fadeOut();
		$("#in2").fadeOut();
		}
		else if(data[0].staus=="selesai")
		{	
		$("#in2").fadeOut();
		$('#id_pemesanan2').val(data[0].id_pemesanan);
		document.getElementById("nama_pemesan12").innerHTML=" Nama Pemesan: "+nama_pemesanan;
		document.getElementById("kode_pemesan12").innerHTML=" Alamat Pemesan: "+kode_pemesan;
		document.getElementById("selesai2").innerHTML=nama_pemesanan+" Sablon Yang Anda Pesan Telah Selesai, Terimakasih Dan Silahkan Pesan Lagi Di Form Yang Ada Diatas";
		document.getElementById("selesai2").style.color = "red";
		$("#pemesanan2").fadeIn();
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
				      <table width="395" border="0" id="in2">
					    <tr>
                          <td colspan="3"><table width="329" border="0">
                                <tr>
                                  <td width="323"><div align="left" id="tombol2"><span class="style1">Klik 
                                    <input type="submit" name="daftar" value="Daftar" class="btn btn-danger" id="klik_daftar2"/> 
                                  Jika Belum Mempunyai Akun.<br />
                                  Klik
                                  <input type="submit" name="Masuk" value="Masuk" class="btn btn-danger" id="disini2"/>
                                  Jika Pernah Mendaftar.</span></div></td>
                                </tr>
                          </table>                            
                          </label></td>
		                </tr>
						<tr>
                          <td colspan="3"><table width="330" border="0" id="datadiri2">
                                <tr>
                                  <td width="228"><input name="kode_member" type="text" class="form-control" id="kode_member2" placeholder="Kode Member *" /></td>
                                  <td width="92"><div id="pemberitahuan1">
                                    <input type="submit" name="member" value="OK" class="btn btn-danger" id="member2"/>
                                  </div></td>
                                </tr>
                          </table>                            </label></td>
		                </tr>
				        
		      </table>
			          <br />
					  <div id="daftar2"><br />
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
							
					          <input name="nama_member" type="text" class="form-control" id="nama_member2" placeholder="Nama Lengkap *"/></td>
                              <td width="53"><label> </label></td>
                          </tr>
					      <tr>
					        <td>No Telepon				            
				            <input name="no_telepon_member" type="text" class="form-control" id="no_telepon_member2" placeholder="+628**********"/></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td>No KTP
					          <input name="no_ktp_member" type="text" class="form-control" id="no_ktp_member2" placeholder="NO KTP *"/></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td>Alamat Email
					          <input name="email_member" type="text" class="form-control" id="email_member2" placeholder="example@yahoo.cm *"/></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td>Alamat Lengkap
					          <input name="Judul52" type="text" class="form-control" id="alamat_member2" placeholder="Kota/Kec/Desa-Kelurahan/Rt/Rw *"/></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td>Jenis Kelamin :
					          <label>
					            <select name="Jenis_kelamin" id="jenis_kelamin2">
					              <option>Laki - Laki</option>
					              <option>Perempuan</option>
				              </select>
				              </label></td>
                              <td>&nbsp;</td>
                          </tr>
					      <tr>
					        <td><input type="submit" name="Olahdata2" value="Simpan" class="btn btn-danger" id="simpan_member2"/>
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
		          <div align="center" id="pemesanan2" cass="panel panel-default">
			         <div align="center">
                      <form action="admin/olahdata/pemesanan.php" method="post" enctype="multipart/form-data">
                        <input name="id_member" type="hidden" class="form-control" id="id_pemesanan2" placeholder="Nama Lengkap *"/>
					     <br />
					     <table width="406" border="0" id="order">
					       <tr>
                             <td>Pemesanan Sablon</td>
					         <td><label> </label></td>
				           </tr>
					      
						   <tr>
                             <td><div id="nama_pemesan12"></div></td>
					         <td><label> </label></td>
				           </tr>
					       <tr>
                             <td><div id="kode_pemesan12"></div></td>
					         <td><label> </label></td>
				           </tr>
			            
						 <tr>
			               <td width="323">Tanggal:
		                     <input name="tanggal" type="date" class="form-control" id="tanggal2" /></td>
                          <td width="73"><label>
                          </label></td>
                         </tr>
			             <tr>
			               <td>Gambar:
		                     <input name="gambar" type="file" class="form-control" id="gambar2"/></td>
                          <td></td>
                         </tr>
			             
			             <tr>
			               <td>Paket  <span class="form-group">
			                 :
			                 <select name="paket" id="12">
							  <option value ='-----Pilih Paket Pemesanan------'>-----Pilih Paket Pemesanan------</option>
                              <?php
							  include"../koneksi.php";
							  $lihat_sablon=mysqli_query("SELECT * FROM paket,sablon where paket.id_sablon=sablon.id_sablon AND sablon.jenis_sablon='Manual'");
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
		                   <input name="biaya" type="text" class="form-control" id="biaya2" placeholder="Rp,- *"/></td>
                          <td><label></label></td>
                         </tr>
			             
			             <tr>
			               <td><input type="submit" name="Olahdata" value="Pesan Salon Manual" class="btn btn-danger" id="Simpan2"/>
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
                        <div align="center"><div id="DP2">
                          <form action="admin/olahdata/pemesanan.php" method="post" enctype="multipart/form-data">
                          <input name="id_member" type="hidden" class="form-control" id="id_pembayaran_dp2" placeholder="Nama Lengkap *"/>
					     <table width="406" border="0" id="order">
                            <tr>
                              <td>Pembayaran DP</td>
                              <td><label> </label></td>
                            </tr>
                            
							<tr>
                              <td><div id="nama_pemesan12"></div></td>
                              <td><label> </label></td>
                            </tr>
                            <tr>
                              <td><div id="kode_pemesan12"></div></td>
                              <td><label> </label></td>
                            </tr>
                              <tr>
                                <td width="325">Bukti Transfer:
                                  <input name="DP" type="file" class="form-control" id="gambarDP2"/></td>
                                <td width="71"></td>
                              </tr>
                              <tr>
                                <td colspan="2"><label> </label>                                <label></label>                                <label></label></td>
                              </tr>
                            
                              <tr>
                                <td><input type="submit" name="Olahdata" value="Bayar DP" class="btn btn-danger" id="bayardp2"/>
                                  <input type="reset" name="reset2" value="Reset" class="btn btn-danger"/></td>
                                <td><label></label></td>
                              </tr></table>
                       </form>
					    </div>
                          <br />
						  <div id="lunas2">
						    <form action="admin/olahdata/pemesanan2.php" method="post" enctype="multipart/form-data">
                         <input name="id_member" type="hidden" class="form-control" id="id_pelunasan2" placeholder="Nama Lengkap *"/>
					     <table width="406" border="0" id="order">
                            <tr>
                              <td>Pelunasan Pembayaran</td>
                              <td><label> </label></td>
                            </tr>
                            
							<tr>mlx
                              <td><div id="nama_pemesan12"></div></td>
                              <td><label> </label></td>
                            </tr>
                            <tr>
                              <td><div id="kode_pemesan12"></div></td>
                              <td><label> </label></td>
                            </tr>
                          <tr>
                            <td width="328">Gambar:
                              <input name="Lunas" type="file" class="form-control" id="Lunas2"/></td>
                            <td width="68"></td>
                          </tr>
                          <tr>
                            <td colspan="2"><label></label></td>
                          </tr>
                          <tr>
                            <td><input type="submit" name="Olahdata" value="Pembayaran" class="btn btn-danger" id="pembayaran2"/>
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
                   
				  <p align="center"><span class="copyright">Copyright &copy; Wahyu Ardiansyah S.Kom , Herindra Bagus Prasetya S.Kom , DMR Apparel Team</span></p>
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
	 $("#pemesanan2").fadeOut();
	 $("#DP2").fadeOut();
	 $("#lunas2").fadeOut();
	 });
	</script>	 
	