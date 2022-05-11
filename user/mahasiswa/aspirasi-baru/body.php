<br>




<div class="container">
<div class="row">  
    <div class="col-md-3 col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="../../mahasiswa">Aspirasi Terajukan</a></li>
        <li class="active"><a href="#">Aspirasi Baru</a></li>
      </ul>
    </div>
 	<div class="col-md-9 col-sm-9">	
		<div class="page-header-body">
		<div class="row">
			<div class="text text-justify"><br>
			<h3>Aspirasi Baru </h3>
				<h5><b>Silahkan isi form yang tersedia pada form dibawah ini untuk mengajukan aspirasi anda.</b></h5>	
				<form action="../../../aspirasi/aspirasibaru.php" method="post">
				<div class="form-group">
					
					<!-- <label for="usr">Subjek</label>
						<input type="text" class="form-control" id="usr" name="subjek"> -->
					<label for="usr">Topik</label>
						<select name="subjek" class="form-control" id="usr">
							<option></option>
							<?php
								include '../../../koneksi/koneksi.php';
								$query = mysqli_query($db,"SELECT * FROM tb_topik ORDER BY id ASC");								
								$jumlah=$query->num_rows;
								if($jumlah > 0){
									while($data = $query->fetch_array()){
										echo '<option value='.$data['topik'].'>'.$data['topik'].'</option>';
									}
								}
							?>
						</select>
					
					<label for="aspr">Aspirasi </label>
						<textarea class="form-control" id="aspr" name="aspirasi"></textarea><font size="1"><br></font>		
					<button type="submit" class="btn-submit btn-primary">Submit</button><br>
				</div>
				</form>
		</div>
		</div>
	</div>		
</div>
</div>
</div>
<br>
	

