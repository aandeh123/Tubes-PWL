<br>
<div class="container">
<div class="row">  
    <div class="col-md-3 col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="../../mahasiswa">Aspirasi Terajukan</a></li>
        <li><a href="../aspirasi-baru">Aspirasi Baru</a></li>
      </ul>
    </div>
 	<div class="col-md-9 col-sm-9">	
		<div class="page-header-body">
		<div class="row">
			<div class="text text-justify"><br>
			<h3>Aspirasi Belum Terjawab </h3>
			
			
			<?php 
				include '../../../koneksi/koneksi.php';
				
				$kd_aspirasi 	= $_GET['kd_aspirasi'];
				$sql  = "SELECT * FROM `tb_aspirasi` WHERE kd_aspirasi='".$kd_aspirasi."'";
				$result = mysqli_query($db, $sql);
				$row = mysqli_fetch_array($result);
				
				$kd_unit		= $row['kd_unit'];
				
				$sql1  			= "SELECT * FROM tb_unitkerja";
				$result1 		= mysqli_query($db, $sql1);
				$row1 			= mysqli_fetch_array($result1);
				
				
				echo "				
				<table class='table'>
					<tr>	
						<td ><label>Kode Aspirasi</label></td>
						<td>".$kd_aspirasi."</td>
					</tr>
					<tr>	
						<td ><label>Subjek Aspirasi</label></td>
						<td>".$row['subjek']."</td>
					</tr>
					
					<tr>	
						<td ><label>Waktu Masuk</label></td>
						<td>".$row['wkt_masuk']."</td>
					</tr>
					
					<tr>	
						<td ><label>Aspirasi</label></td>
						<td>".$row['aspirasi']."</td>
					</tr>
					
				</table>
				";			   
			?>
			</div>			
		</div>
		</div>
	</div>		
</div>
</div>
<br>
	

