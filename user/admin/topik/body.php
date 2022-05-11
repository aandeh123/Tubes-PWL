<br>
<div class="container">
<div class="row">  
    <div class="col-md-3 col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="../../admin">Tambah User</a></li>
        <li class="active"><a href="#">Topik</a></li>
        <li><a href="../aspirasi">Aspirasi</a></li><br>
      </ul>
    </div>
 	<div class="col-md-9 col-sm-9">	
		<div class="page-header-body">
		<div class="row">
			<div class="text text-justify"><br>
				<h3>Topik Baru </h3>
				<form action="../../../topik/topikbaru.php" method="post">
					<div class="form-group">
						<label for="topik">Topik *</label>
						<input type="text" class="form-control" id="topik" name="topik" placeholder="Masukkan topik baru">
						<br>
						<button type="submit" class="btn-submit btn-primary">Submit</button><br>
					</div>
				</form>
			
			<?php
				include '../../../koneksi/koneksi.php';
				$sql  		= "SELECT * FROM tb_topik";                        
				$result  	= mysqli_query($db, $sql);
				$total		= mysqli_num_rows($result);
				if(mysqli_num_rows($result) > 0){
					$no = 1;
					
					echo' <div class="table-responsive">
						<table class="table table-bordered">
							<tr>	
								<th style="text-align:center;">No</th>
								<th style="text-align:center;">topik</th>
								<th style="text-align:center;">Aksi</th>
							</tr>';
					while($row = mysqli_fetch_assoc($result)){
						$sql1  = "SELECT * FROM tb_mahasiswa";
						$result1 = mysqli_query($db, $sql1);
						$row1 = mysqli_fetch_assoc($result1);
							
						echo'<tr>
							<td style="text-align:center;">'.$no.'</td>
							<td>	'. $row['topik'].'   	</td>
							<td style="text-align:center;"><a href=cekkode/index.php>Delete</a></td>
							</tr>';
						
						$no++;
                    }
                }
				else
					echo'<h5><b>Anda tidak memiliki aspirasi yang belum anda jawab.</b></h5>';
				?>
				</table>
			
			
			</div>			
		</div>
		</div>
	</div>		
</div>
</div>
</div>
<br>
	

